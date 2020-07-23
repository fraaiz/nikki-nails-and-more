<?php

namespace App\Services\Admin;

use App\Models\NavigationItem;

class NavigationService
{
    /**
     * Get all menu items.
     *
     * @return array
     */
    public function getNavigationItems(): array
    {
        return [
            [
                'title' => 'Dashboard',
                'icon' => 'fas fa-home',
                'url' => Route('admin::dashboard'),
            ],
            [
                'title' => 'Treatments',
                'icon' => 'fas fa-cut',
                'url' => Route('admin::treatments'),
            ],
        ];
    }
}
