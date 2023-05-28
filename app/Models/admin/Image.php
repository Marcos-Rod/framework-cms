<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Image extends Model

{
    protected $fillable = ['url'];

    //Relacion polimorfica
    public function imageable()
    {
        return $this->morphTo();
    }
}
