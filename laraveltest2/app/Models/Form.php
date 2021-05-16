<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    public static $rules = [
        'name' => 'required',
        'mail' => 'required',
    ];
    protected $fillable = ['name', 'mail'];
}
