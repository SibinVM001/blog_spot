<?php
/*******************************
    Author : Sibin V M
    Title : Blog Model
    Created Date : 10-06-2022
********************************/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'image_title', 'content'];
}
