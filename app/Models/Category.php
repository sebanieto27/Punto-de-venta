<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public static function rules($id)
    {
        if ($id <= 0) {
            return [
                'name' => 'required|min:3|max:50|unique:categories'
            ];
        } else {
            return [
                'name' => "required|min:3|max:50|unique:categories,name,{$id}"
            ];
        }
    }

    public static $messages = [
        'name.required' => 'Nombre requerido',
        'name.min' => 'El nombre debe tener al menos 3 caracteres',
        'name.max' => 'El nombre debe tener máximo 50 caracteres',
        'name.unique' => 'La categoría ya existe en sistema'
    ];

    // relationships
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function image()
    {
        //Este patrón a menudo se denomina patrón de objeto nulo y puede ayudar a eliminar las comprobaciones condicionales en su código.
        return  $this->morphOne(Image::class, 'model')->withDefault();
    }


    // accessors && mutators
    public function getImgAttribute()
    {
        $img = $this->image->file;

        if ($img != null) {
            if (file_exists('storage/categories/' . $img))
                return 'storage/categories/' . $img;
            else
                return 'storage/no_image_available.jpg';
        }

        return 'storage/image_not_found.png';
    }
}
