<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Categorizable;

class File extends Model
{
    use HasFactory;

    use Categorizable;

protected $primaryKey = 'file_id';

protected $guarded = ['file_id'];


    public function packages()
    {
        return $this->belongsToMany(Package::class,'package_file','file_id','package_id');
    }



}
