<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Esta clase es de las categorias y sus atributos
 */
class Category extends Model {
    protected $primaryKey   = 'id';
    //tabla personalizada
    protected $table = 'categories';
    //atributos del modelo
    protected $fillable = ['id','name','description','is_active'];

    /**
     * Pertenece al padre "Suppliers".
     */
    public function suppliers(){
        return $this->belongsToMany('App\Supplier');
    }
    public function products() {
        return $this->hasMany('App\Product');
    }

}