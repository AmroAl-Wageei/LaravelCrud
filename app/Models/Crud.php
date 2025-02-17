<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;
    
    // #1
    protected $fillable = ['name', 'email'];
     // #2
    // protected $guarded = [];
    // #3
    // protected $guarded = ['name'];

    
    public $timestamps = false;
}