<?php

namespace App\Services;

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
        // TODO: Add caching
        $navigationItems = NavigationItem::query()
            ->whereNull('parent_id')
            ->orderBy('position')
            ->get();

        $result = [];

        /** @var NavigationItem $navigationItem */
        foreach($navigationItems as $navigationItem) {
            $navigationItem->children = $this->getChildren($navigationItem);
            $result[] = $navigationItem;
        }

        return $result;
    }

    /**
     * Get a array children of the NavigationItem.
     *
     * @param NavigationItem $navigationItem
     * @return array
     */
    private function getChildren(NavigationItem $navigationItem): array
    {
        if (null === ($children = $navigationItem->getChildren())) {
            return [];
        }

        $result = [];

        foreach ($children as $child) {
            $child->children = $this->getChildren($child);
            $result[] = $child;
        }

        return $result;
    }
}
