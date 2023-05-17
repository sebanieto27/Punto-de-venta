<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'nif',
        'commercial_name',
        'address',
        'number',
        'phone',
        'city',
        'district',
        'state',
        'profile'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public static function rules($id)
    {
        if ($id <= 0) {
            return [
                'name' => 'required|min:3|max:50|string|unique:users',
                'last_name' => 'required|min:3|max:50|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:3',
                'nif' => 'required|digits_between:1,100',
                'commercial_name' => 'nullable|string',
                'address' => 'nullable|string',
                'number' => 'nullable|digits_between:1,100',
                'phone' => 'required|digits_between:1,100',
                'city' => 'nullable|string',
                'district' => 'nullable|string',
                'state' => 'nullable|string',
                'profile' => 'nullable|not_in:eleger'
            ];
        } else {
            return [
                'name' => "required|min:3|max:50|string|unique:users,name,{$id}",
                'last_name' => 'required|min:3|max:50|string',
                'email' => "required|email|unique:users,email,{$id}",
                'password' => 'nullable|min:3',
                'nif' => 'required|digits_between:1,100',
                'commercial_name' => 'nullable|string',
                'address' => 'nullable|string',
                'number' => 'nullable|digits_between:1,100',
                'phone' => 'required|digits_between:1,100',
                'city' => 'nullable|string',
                'district' => 'nullable|string',
                'state' => 'nullable|string',
                'profile' => 'nullable|not_in:eleger'
            ];
        }
    }

    public static $messages = [
        'name.required' => 'El nombre es obligatorio',
        'name.min' => 'El nombre debe tener al menos :min caracteres',
        'name.max' => 'El nombre no debe tener más de :max caracteres',
        'name.string' => 'El nombre debe ser una cadena de texto',
        'name.unique' => 'El nombre ya existe',
        'email.required' => 'El correo electrónico es obligatorio',
        'email.email' => 'El correo electrónico no es válido',
        'email.unique' => 'El correo electrónico ya está en uso',
        'password.required' => 'La contraseña es obligatoria',
        'password.min' => 'La contraseña debe tener al menos :min caracteres',
        'password.confirmed' => 'Las contraseñas no coinciden',
        'nif.required' => 'El NIF es obligatorio',
        'nif.digits' => 'El NIF debe tener :digits dígitos',
        'nif.unique' => 'El NIF ya está en uso',
        'phone.required' => 'El número de teléfono es obligatorio',
        'phone.digits' => 'El número de teléfono debe tener :digits dígitos',
        'address.required' => 'La dirección es obligatoria',
        'address.string' => 'La dirección debe ser una cadena de texto',
        'commercial_name.required' => 'El nombre comercial es obligatorio',
        'commercial_name.string' => 'El nombre comercial debe ser una cadena de texto',
        'number.required' => 'El número de dirección es obligatorio',
        'number.digits_between' => 'El número de dirección debe tener entre :min y :max dígitos',
        'city.required' => 'La ciudad es obligatoria',
        'city.string' => 'La ciudad debe ser una cadena de texto',
        'district.required' => 'El distrito es obligatorio',
        'district.string' => 'El distrito debe ser una cadena de texto',
        'state.required' => 'El estado es obligatorio',
        'state.string' => 'El estado debe ser una cadena de texto'
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'model')->withDefault();
    }

    // accesros && mutators
    public function getAvatarAttribute()
    {
        $img = $this->image->file;

        if ($img != null) {
            if (file_exists('storage/avatars/' . $img))
                return 'storage/avatars/' . $img;
            else
                return 'storage/default_avatar.png';
        }

        return 'storage/default_avatar.png';
    }

    // relationships
    public function sales()
    {
        return $this->hasMany(Order::class);
    }
}
