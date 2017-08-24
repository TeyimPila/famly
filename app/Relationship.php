<?php

namespace Famly;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    use Uuids;
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

}
