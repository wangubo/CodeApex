<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Purchase;
use App\Models\Sales;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory,SoftDeletes,Notifiable;

    protected $fillable = [
        'purchase_id','price',
        'discount','description',
    ];

   

    public function purchase(){
        return $this->belongsTo(Purchase::class);
    }
    public function sales(){
        return $this->hasMany(Sales::class);
    }
}
