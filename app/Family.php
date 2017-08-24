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
    protected $fillable = [
        'name', 'description', 'type'
    ];

}