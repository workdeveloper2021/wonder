<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        'id', 'title', 'price', 'size', 'image', 'video', 'v_description', 'ftitle', 'fdescription','type' ,'status' 
	
    ];
}