<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Visitor.
 *
 * @package namespace App\Entities;
 */
class Visitor extends Model implements Transformable
{
    use TransformableTrait;
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nom','prenom','cin','service','sorti'];

}
