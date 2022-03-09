<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;
    protected $table = "admin";
    protected $fillable = [
        'admin_email', 'admin_phone', 'admin_name', 'admin_password'
    ];
}
