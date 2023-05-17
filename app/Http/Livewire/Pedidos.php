<?php

namespace App\Http\Livewire;

use App\Models\Pedido;
use App\Models\Customer;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Setting;
use App\Models\tCart;
use App\Traits\CartTrait;
use App\Traits\PrinterTrait;
use Carbon\Carbon;
use DB;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Order;
use App\Models\User;


class Pedidos extends Component
{
    use WithPagination;
    use CartTrait;
    use PrinterTrait;

    public $search, $startDate, $endDate, $userId = 'TODOS', $details =[], $form = false, $total;
    private $pagination = 8;



    public function render()
    {
        return view('livewire.pedidos.component', [
            'orders' => $this->getReport(),
            'users' => $this->loadUsers()
        ])->layout('layouts.theme.app');
    }

    public function editarPedido(Order $order)
    {
        $this->details = $order->details;
        $this->dispatchBrowserEvent('open-modal-editarPedido');

    }

    public function getReport()
    {
        $orders = Order::orderBy('id', 'desc')
        ->paginate($this->pagination);

        return $orders;
    }

    public function loadUsers()
    {
        if(strlen($this->search) > 0)
            $users = User::where('name','like',"%{$this->search}%")
                           ->orderBy('name', 'asc')
                           ->get()->take(5);
        else
            $users = User::orderBy('name', 'asc')->get()->take(5);

        return $users;
    }

    public function resetUI()
    {
        $this->reset('tabProducts', 'cash', 'showListProducts', 'tabCategories', 'search', 'searchcustomer', 'customer_id', 'customerSelected', 'totalCart', 'itemsCart', 'productIdSelected', 'productChangesSelected', 'productNameSelected', 'changesProduct');
    }


    public function updatedCustomerSelected()
    {
        $this->dispatchBrowserEvent('close-customer-modal');
    }

    public function setTabActive($tabName)
    {
        if ($tabName == 'tabProducts') {
            $this->tabProducts = true;
            $this->tabCategories = false;
        } else {
            $this->tabProducts = false;
            $this->showListProducts = false;
            $this->tabCategories = true;
        }
    }

    public function noty($msg, $eventName = 'noty')
    {
        $this->dispatchBrowserEvent($eventName, ['msg' => $msg, 'type' => 'success']);
    }


    public function getProductsByCategory($category_id)
    {
        $this->showListProducts = true;
        $this->productsList = Product::where('category_id', $category_id)->where('stock','>',0)->get(); // *
    }


    // operaciones con el carrito
    public function add2Cart(Product $product)
    {
        $this->addProductToCart($product, $this->changes);
        $this->changes = '';
    }

    // incrementar cantidad item en carrito
    public function increaseQty(Product $product, $cant = 1)
    {
        //sleep(5);
        $this->updateQtyCart($product, $cant);
    }

    // actualizar cantidad item en carrito
    public function updateQty(Product $product, $cant = 1)
    {
        if($cant + $this->countInCart($product->id) > $product->stock)
        {
            $this->noty('STOCK INSUFICIENTE','noty','error');
            $this->dispatchBrowserEvent('refresh');
            return;
        }


        if ($cant <= 0)
            $this->removeProductCart($product->id);
        else
            $this->replaceQuantyCart($product->id, intval($cant));
    }

    // decrementar cantidad item en carrito
    public function decreaseQty($productId)
    {
        $this->decreaseQtyCart($productId);
    }

    // eliminar producto del carrito
    public function removeFromCart($id)
    {
        $this->removeProductCart($id);
    }

    // vaciar carrito
    public function cleanCart()
    {
        $this->clearCart();
    }

    public function viewDetails(Order $order)
    {
        $this->details = $order->details;
        $this->total = $order->total;
        $this->dispatchBrowserEvent('open-modal-detail');
    }

    // SAVE pedido //
    public function storepedido($print = false)
    {
        if ($this->getTotalCart() <= 0) {
            $this->noty('AGREGA PRODUCTOS A LA VENTA', 'noty', 'error');
            return;
        }


        DB::beginTransaction();

        try {
            if ($this->customerSelected != 'Seleccionar Cliente') {
                $this->customer_id = Customer::where('name', $this->customerSelected)->first()->id;
            } else {
                 $this->customer_id = Customer::where('name', 'Mostrador')->first()->id;
            }


            $pedido = Order::create([
                'total' => $this->getTotalCart(),
                'shipping' =>  0,
                'items' => $this->getItemsCart(),
                'discount' => 0,
                'cash' => $this->cash,
                'type' => 'Web',
                'status' => 'Pending',
                'user_id' => Auth()->user()->id,
                'customer_id' =>  $this->customer_id
            ]);

            if ($pedido) {
                $items = $this->getContentCart();
                foreach ($items as  $item) {
                    OrderDetail::create([
                        'order_id' => $pedido->id,
                        'product_id' => $item->id,
                        'quantity' => $item->qty,
                        'price' => $item->price,
                        'changes' => $item->changes
                    ]);

                    //update stock
                    $product = Product::find($item->id);
                    $product->stock = $product->stock - $item->qty;
                    $product->save();
                }
            }


            DB::commit();
            $this->clearCart();
            $this->resetUI();

            //si se hizo click en el botón imprimir
            if($print) $this->PrintTicket($pedido->id);

            $this->noty('Venta Registrada con Éxito');

        } catch (Exception $e) {
            DB::rollback();
            $this->not('Error al guardar el pedido: ' . $e->getMessage(), 'noty', 'error');
        }
    }

    public function addChanges($changes)
    {
        $this->addChanges2Product($this->productIdSelected, $changes);
        $this->dispatchBrowserEvent('close-modal-changes');
    }

    public function removeChanges()
    {
        $this->clearChanges($this->productIdSelected);
        $this->dispatchBrowserEvent('close-modal-changes');
    }


    public $listeners = ['cancelpedido'];

    public function cancelpedido()
    {
        $this->clearCart();
        $this->resetUI();
        $this->noty('VENTA CANCELADA');
    }

    public function Edit(Order $orden)
    {
        $this->selected_id = $orden->id;
        $this->name = $orden->name;
        $this->action = 'Editar';
        $this->form = true;

    }
}
