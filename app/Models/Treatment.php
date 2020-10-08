<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Treatment
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $page_url
 *
 * @package App\Models
 */
class Treatment extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'page_url',
    ];
}
