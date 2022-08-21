<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $primaryKey = 'category_id';

    protected $guarded = ['category_id'];

    public $timestamps = false;

    public function packages()
    {
        return $this->morphedByMany(Package::class,'categorizable');
    }

    public function files()
    {
        return $this->morphedByMany(File::class,'categorizable');
    }
}
