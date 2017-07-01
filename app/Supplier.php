<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Esta clase es de un proveedor (supplier) y sus atributos
 */
class Supplier extends Model {
    //tabla personalizada
    protected $table = 'suppliers'; 
    //atributos del modelo
    protected $fillable = ['id','supplierName','supplierEmail','supplierPhone','is_active'];
    
    /**
     * Relacion muchos a muchos
     */
    public function categories(){
        return $this->belongsToMany('categories');
    }
}
