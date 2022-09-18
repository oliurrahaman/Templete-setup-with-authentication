<?php

namespace App\Models;

use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class cat extends Model
{
    use HasFactory;
    protected $table='cats';
    protected $primaryKey='id';
    protected $fillable=[
                    'catName',
                    'catTitle'
    ];
    public function product()
    {
        return $this->belongsTo(product::class);
    }
}
