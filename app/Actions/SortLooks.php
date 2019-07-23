<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class SortLooks extends AbstractAction
{
    public function getTitle()
    {
        return 'SortLooks';
    }

    public function getIcon()
    {
        return 'voyager-edit';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary',
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.looks.order');
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'events';
    }
}