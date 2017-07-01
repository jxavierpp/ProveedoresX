<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Esta es la clase de un producto y sus atributos
 */
class Product extends Model {
    protected $primaryKey   = 'id';
    //tabla personalizada
    protected $table = 'products'; 
    //atributos del modelo
    protected $fillable = ['id','name','price','stock','category_id','is_active'];

    public function categories() {
        return $this->belongsTo('App\Category','category_id');
    }
}
