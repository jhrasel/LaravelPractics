<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo', 'phone' , 'email', 'address', 'description', 'hotline', 'copywrite_text'
    ];

}
