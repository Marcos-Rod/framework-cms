<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model

{
    protected $fillable = ['project', 'url', 'keywords', 'description', 'logo', 'public_key', 'secret_key'];
}
