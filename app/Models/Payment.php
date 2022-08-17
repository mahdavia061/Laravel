<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $guarded=['payment_id'];

    const CREATED_AT = 'payment_created_at ';
    const UPDATED_AT =  'payment_updated_at ';
}
