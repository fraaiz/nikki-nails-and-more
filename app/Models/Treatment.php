<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class Treatments
 *
 * @property int id
 * @property string title
 * @property string description
 * @property string image
 * @property string slug
 *
 * @property Carbon created_at
 * @property Carbon updated_at
 *
 * @package App\Models
 */
class Treatment extends Model
{
    use HasFactory;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'image',
        'slug',
    ];
}
