<?php

namespace App\Services;

class BreadcrumbService
{
    protected $breadcrumbs = [];

    public function addBreadcrumb($label, $url = null)
    {
        $this->breadcrumbs[] = [
            'label' => $label,
            'url' => $url,
        ];
    }

    public function getBreadcrumbs()
    {
        return $this->breadcrumbs;
    }
}
