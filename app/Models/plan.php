<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plan extends Model
{
    use HasFactory;

    protected $primaryKey = 'plan_id';

    protected $guarded = ['plan_id'];

    public $timestamps = false;
}
