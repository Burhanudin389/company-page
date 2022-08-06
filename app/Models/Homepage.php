<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;

    protected $fillable = [
        'jumbotron_image', 
        'jumbotron_title', 
        'jumbotron_description', 
        'jumbotron_button',
        'keunggulan_img',
        'keunggulan_title',
        'keunggulan_description',
        'solusi_img',
        'solusi_title',
        'solusi_description',
    ];
}
