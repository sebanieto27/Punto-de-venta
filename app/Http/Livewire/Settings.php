<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class Settings extends Component
{
    public $name, $address, $phone, $leyend, $printer, $logo, $logoPreview, $logoPrincipal, $logoPrincipalPreview;
    use WithFileUploads;


    public function mount()
    {
        $info = Setting::first();

        if($info){
            $this->name = $info->name;
            $this->address = $info->address;
            $this->phone = $info->phone;
            $this->leyend = $info->leyend;
            $this->printer = $info->printer;
            $this->logoPreview = $info->logo;
            $this->logoPrincipalPreview = $info->logoPrincipal;
        }
    }

    public function render()
    {
        return view('livewire.settings.component')
        ->layout('layouts.theme.app');
    }


    public function Store()
    {
        $rules = [
            'name' => 'required|min:3|max:65',
            'phone' => 'required|max:10',
            'address' => 'required|max:255',
            'leyend' => 'required|max:50',
            'printer' => 'required|max:30',
            'logo' => 'image|mimes:jpg,png,jpeg|dimensions:min_width=128,min_height=128,max_width=128,max_height=128',
            'logoPrincipal' => 'image|mimes:jpg,png,jpeg',
        ];

        $msg = [
            'name.required' => 'Ingresa el nombre del negocio',
            'name.min' => 'El nombre debe tener al menos 3 caracteres',
            'name.max' => 'El nombre debe tener máximo 65 caracteres',
            'phone.required' => 'Ingresa el teléfono',
            'phone.max' => 'El teléfono debe tener máximo 10 caracteres',
            'address.required' => 'Ingresa la dirección',
            'address.max' => 'La dirección debe tener máximo 255 caracteres',
            'leyend.required' => 'Ingresa la leyenda',
            'leyend.max' => 'La leyenda debe tener máximo 50 caracteres',
            'printer.required' => 'Ingresa el nombre de la impresora',
            'printer.max' => 'El nombre de la impresora debe tener máximo 30 caracteres',
            'logo.image' => 'El logo debe ser un archivo de tipo imagen',
            'logo.mimes' => 'El tipo de archivo para el logo debe ser JPG,PNG,JPEG',
            'logo.dimensions' => 'Las dimensiones del logo deben ser 128x128',
            'logoPrincipal.image' => 'El logo debe ser un archivo de tipo imagen',
            'logoPrincipal.mimes' => 'El tipo de archivo para el logo debe ser JPG,PNG,JPEG',
        ];

        $this->validate($rules, $msg);

        sleep(2);

        $tempLogoPrincipal = Setting::first()->logoPrincipal ?? '';
        $tempLogo = Setting::first()->logo ?? '';

        Setting::truncate();


        $config = Setting::create(
            [
                'name' => $this->name,
                'phone' => $this->phone,
                'address' => $this->address,
                'leyend' => $this->leyend,
                'printer' => $this->printer,
            ]
        );

        if ($this->logoPrincipal) {

            // Elimina logo anterior
            if (File::exists(public_path($tempLogoPrincipal))) {
                File::delete($tempLogoPrincipal);
            }

            // Guardar logo en la BD
            $customFileName = uniqid() . '_.' . $this->logo->extension();
            $config->logoPrincipal = $customFileName;
            $config->save();

            // storage logo in public folder
            $this->logoPrincipal->storeAs('', $customFileName, 'public2');  //CONFIGURAR DRIVER PUBLIC2

            // display new logo
            $this->logoPrincipalPreview = $customFileName;

            // clear previous logo
            $this->logoPrincipal = null;

        }

        if ($this->logo) {

            // Elimina logo anterior
            if (File::exists(public_path($tempLogo))) {
                File::delete($tempLogo);
            }

            // Guardar logo en la BD
            $customFileName = uniqid() . '_.' . $this->logo->extension();
            $config->logo = $customFileName;
            $config->save();

            // storage logo in public folder
            $this->logo->storeAs('', $customFileName, 'public2');  //CONFIGURAR DRIVER PUBLIC2

            // display new logo
            $this->logoPreview = $customFileName;

            // clear previous logo
            $this->logo = null;

        }

        $this->dispatchBrowserEvent('noty', ['msg'=> 'Configuración guardada', 'type' => 'success']);

    }


public $sisteners =['refresh' => '$refresh'];
}
