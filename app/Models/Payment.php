<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Payment extends Model
{
    use HasFactory;


    protected $guarded = ['payment_id'];

    const CREATED_AT = 'payment_created_at ';
    const UPDATED_AT = 'payment_updated_at ';

    const ONLINE = 1;
    const WALLET = 2;

    const COMPELETE = 1;
    const INCOMPELETE = 2;

    public function user()
    {
        return $this->belongsTo(User::class, 'payment_user_id');
    }

    public function payment_method_format()
    {
        switch ($this->attributes['payment_method']) {
            case self::ONLINE:
                return 'ONLINE';
                break;

            case self::WALLET:
                return 'WALLET';
                break;
        };
    }

    public function payment_status_format()
    {
        switch ($this->attributes['payment_status']) {
            case self::COMPELETE:
                return 'COMPELETE';
                break;

            case self::INCOMPELETE:
                return 'INCOMPELETE';
                break;
        };
    }
}
