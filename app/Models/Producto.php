<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table='producto';
    protected $primaryKey='cod';
    public $incrementing=false;
    public $timestamps=false;
    protected $keyType="String";

    protected $fillable=["nombre_corto",
        /*"descripcion",*/
        "PVP"
    ];
    function ejemplo()
    {
        $producto=["nombre_corto", "PVP"];
        $p=new Producto($producto);
        $p->familia=$_POST[`familia`];
        $p->save();
    }


}
