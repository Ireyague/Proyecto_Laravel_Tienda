<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable=["nombre_corto",
        /*"descripcion",*/
        "PVP"
    ];
    protected $table='producto';
    protected $primaryKey='cod';
    public $incrementing=false;
    public $timestamps=false;
    protected $keyType="String";

}
