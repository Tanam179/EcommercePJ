<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductModel;



class CategoryModel extends Model
{
    use HasFactory;


    protected $table = "categories_product";
    protected $fillable = [
        'name', 'desc', 'status'
    ];


    public function getProductRelationship() {
        return $this->hasMany(ProductModel::class, 'cate_id', 'id');
    }

}
