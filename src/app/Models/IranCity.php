<?php

namespace SamanSh999\IranCity\app\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class IranCity extends Model
{
    use NodeTrait;

    protected $table = 'iran_cities';

    protected $fillable = ['name'];

    public $timestamps = false;

}
