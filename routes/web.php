<?php


use App\Http\Livewire\Sales;
use App\Http\Livewire\Users;
use App\Http\Livewire\Pedidos;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Reports;
use App\Http\Livewire\Products;
use App\Http\Livewire\Settings;
use App\Http\Livewire\Customers;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Categories;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\RegistroController;
use App\Http\Controllers\PedidosEstadosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('categories', Categories::class)->name('categories');
    Route::get('products', Products::class)->name('products');
    Route::get('customers', Customers::class)->name('customers');
    Route::get('users', Users::class);
    Route::get('sales', Sales::class);
    Route::get('pedidos', Pedidos::class)->name('pedidos');
    Route::get('reports', Reports::class);
    Route::get('profile', Profile::class)->name('profile');
    Route::get('dash', Dashboard::class)->name('dash');
    Route::get('settings', Settings::class)->name('settings');
    Route::get('orden-pendiente/{order}', 'App\Http\Controllers\PedidosEstadosController@pedidoPendiente')->name('pedidoPendiente');
    Route::get('orden-entregada/{order}', 'App\Http\Controllers\PedidosEstadosController@pedidoEntregada')->name('pedidoEntregada');
    Route::get('orden-cerrada/{order}', 'App\Http\Controllers\PedidosEstadosController@pedidoCerrada')->name('pedidoCerrada');
    Route::get('orden-cancelada/{order}', 'App\Http\Controllers\PedidosEstadosController@pedidoCancelada')->name('pedidoCancelada');
});

Route::get('/', function () {
    return view('auth.login');
});

Route::get('registro', RegistroController::class)->name('registro');




require __DIR__ . '/auth.php';
