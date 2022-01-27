<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ganga extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','url','category_id','points','price','discount_price','available'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
