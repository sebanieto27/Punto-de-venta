<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegistroController extends Component
{

    public $vista = 'paso-dos', $form = false;

    //Public del primer paso, registro de usuario
    public $name, $last_name,$nif, $commercial_name, $address, $number, $phone, $city, $district, $state, $email, $password;

    public function render()
    {
        return view('livewire.registro.component')->layout('layouts.theme.instalacion.menu');
    }

    public function pasoUno()
    {
        $this->vista = 'paso-uno';
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'nif' => [
                'required',
                'string',
                'max:9',
                Rule::unique('users', 'nif')->ignore(auth()->user())
            ],
            'commercial_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore(auth()->user())
            ],
            'password' => 'required|string|min:8',
        ];
    }

    public function pasoDos()
    {
        sleep(1);

        $this->validate($this->rules(), User::$messages);

        $user = User::create([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'nif' => $this->nif,
            'commercial_name' => $this->commercial_name,
            'address' => $this->address,
            'number' => $this->number,
            'phone' => $this->phone,
            'city' => $this->city,
            'district' => $this->district,
            'state' => $this->state,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        auth()->login($user);

        $this->vista = 'paso-dos';
    }
    public function pasoTres()
    {
        $this->vista = 'paso-tres';
    }
    public function pasoCuatro()
    {
        $this->vista = 'paso-cuatro';
        $this->vista = 'crear-familia';
        $this->vista = 'editar-familia';
        $this->vista = 'crear-articulo';
        $this->vista = 'editar-articulo';
    }
    public function pasoCinco()
    {
        $this->vista = 'paso-cinco';
        $this->vista = 'crear-mesa';
        $this->vista = 'editar-mesa';
        $this->vista = 'crear-salon';
        $this->vista = 'editar-editar';
    }
}
