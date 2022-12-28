<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = "sales";
    protected $fillable = ['product_id', 'sale_made'];
    public $timestamps = true;

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
