<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model {
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_desc',
        'product_mrp',
        'product_image'
    ];
}
