<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class ContactForm
 *
 * @property string name
 * @property string email
 * @property string phone_number
 * @property string message
 * @property Carbon created_at
 * @property Carbon updated_at
 *
 *
 * @package App\Models
 */
class ContactForm extends Model
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
        'phone_number',
        'message',
    ];
}
