<?php

namespace SamanSh999\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class IranCity extends Model
{
    use NodeTrait;

    protected $table = 'cities';

    protected $fillable = ['name'];

    public $timestamps = false;

}
