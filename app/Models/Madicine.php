<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Madicine extends Model
{
    use HasFactory;

    protected $table = 'medicines';

    protected $fillable = [
        'name','category_id','brand','purchase_price','discount','selling_price','stock'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
