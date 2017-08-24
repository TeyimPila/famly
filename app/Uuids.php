<?php
/**
 * Created by PhpStorm.
 * User: reach1
 * Date: 8/24/17
 * Time: 7:19 PM
 */

namespace Famly;

use Webpatser\Uuid\Uuid;

trait Uuids
{

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }

}