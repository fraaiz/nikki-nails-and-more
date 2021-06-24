<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * Class Treatment
 *
 * @property int $id
 * @property bool $enabled
 * @property bool $in_menu
 * @property string $title
 * @property string $content
 * @property string $slug
 * @property User $last_edit_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * Relations
 * @property User $lastEditedBy
 *
 * Attributes
 * @property string $lastEdited
 *
 * @package App\Models
 */
class Treatment extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $casts = [
        'enabled' => 'bool',
        'in_menu' => 'bool',
    ];

    /**
     * @var string[]
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * @var string[]
     */
    protected $appends = [
        'lastEdited',
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'enabled',
        'in_menu',
        'title',
        'slug',
        'content',
        'last_edit_by',
    ];

    /**
     * @return BelongsTo
     */
    public function lastEditedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'last_edit_by');
    }

    /**
     * @return string
     */
    public function getLastEditedAttribute(): string
    {
        return $this->updated_at->toDateTimeString();
    }
}
