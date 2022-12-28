<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable = [ 'name', 'reference', 'weight', 'category', 'stock'];
    public $timestamps = true;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
