<?php

namespace App\Models;

use App\Models\cat;
use App\Models\unit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $primaryKey='id';
    protected $fillable=[
                 'name',
                 'category',
                 'img',
                 'date',
                 'unit',
                 'price',
                 'is_sample_product',
                 'Details',
                 'country',
                 'time',
                 'sale_range',
                 'features'

    ];
    public function category(){
        return $this->hasMany(cat::class);
    }

    public function unit(){
        return $this->hasMany(unit::class);
    }
}
