<?php

namespace App\Services;

use App\Models\Treatment;

class TreatmentService
{
    /**
     * Get treatments sorted by creation date.
     *
     * @param null|int $limit
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getTreatments(int $limit = null)
    {
        $treatments = Treatment::query()->orderBy('created_at');
        if ($limit) {
            $treatments->limit($limit);
        }
        return $treatments->get();
    }
}
