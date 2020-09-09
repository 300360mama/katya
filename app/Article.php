<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";

    public function images()
    {
        return $this->hasMany('App\Images');
    }
}
