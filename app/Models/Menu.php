<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = "menus";

    protected $fillable = [
        'id',
        'restaurant_id',
        'name',
        'description',
        'price',
    ];

    public function restaurant()
    {
        return $this->hasOne(Restaurant::class);
    }
}
