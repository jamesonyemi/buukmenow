<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneBook extends Model
{
    use HasFactory;
    protected $table = "phone";
    protected $guarded = [];
    // protected $fillable = ['first_name', 'last_name', 'phone_number'];
}
