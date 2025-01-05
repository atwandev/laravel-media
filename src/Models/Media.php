<?php

namespace AtwanDev\LaravelMedia\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /**
     * Cast columns
     * @var array
     */
    protected $casts = ['files' => 'json'];
}
