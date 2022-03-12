<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryModel;


class ProductModel extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable = [
        'name', 'desc', 'price', 'content', 'img', 'sale', 'best_seller', 'status' , 'cate_id'
    ];

    public function getCategoryRelationShip(){
        return $this->belongsTo(CategoryModel::class, 'cate_id', 'id');
    }

}
