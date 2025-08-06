<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property integer $value
 */
class SummarizedData extends Model
{
    protected $fillable = [
        'name', 'value'
    ];
}
