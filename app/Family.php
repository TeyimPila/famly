<?php
/**
 * Created by PhpStorm.
 * User: reach1
 * Date: 8/23/17
 * Time: 9:11 PM
 */

namespace Famly;


use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use Uuids;

    protected $fillable = [
        'name', 'description', 'type'
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
}