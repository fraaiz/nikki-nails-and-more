<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class ContactForm
 *
 * @property string name
 * @property string email
 * @property string date
 * @property string time
 * @property Carbon created_at
 * @property Carbon updated_at
 *
 *
 * @package App\Models
 */
class ReservationForm extends Model
{
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
        'name',
        'email',
        'date',
        'time',
    ];
}
