<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'category_image',   
    ];

    public function products(){
        return $this->belongsToMany(Product::class,'junctions');
        //relation()->with which model n intermediate table name ->junctions
    }
}


// In Laravel, Model is a class that represents the logical structure and relationship of underlying data table. In Laravel, each of the database table has a corresponding “Model” that allow us to interact with that table. Models gives you the way to retrieve, insert, and update information into your data table.