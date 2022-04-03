<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aProduct extends Model
{
    use HasFactory;
    protected $table="t_products";
    protected $fillable=['id', 'pname', 'pcompany', 'price', 'quantity', 'product_img'];
}
