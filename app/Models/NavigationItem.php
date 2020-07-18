<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * NavigationItem model.
 *
 * @property int $id
 * @property null|int $parent_id
 * @property string $name
 * @property string $route_name
 * @property int $position
 *
 * @property BelongsTo getParent
 *
 * @package App\Models
 */
class NavigationItem extends Model
{
    /**
     * Telling the model which fields can be
     * filled when creating a new model.
     */
    protected $fillable = ['*'];

    /**
     * Get the parent model when exists.
     *
     * @return BelongsTo
     */
    public function getParent(): BelongsTo
    {
        return $this->belongsTo(__CLASS__, 'parent_id');
    }

    /**
     * Get all the children when exist.
     *
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getChildren()
    {
        return self::query()
            ->where('parent_id', $this->id)
            ->get();
    }
}
