<?php
namespace App\Filip\FormItems;

use View;
use SleepingOwl\Admin\FormItems\NamedFormItem;
use SleepingOwl\Admin\AssetManager\AssetManager;

class ColorPicker extends NamedFormItem
{
    protected $view = 'admin.forms.color';

    public function initialize()
    {
        parent::initialize();
    }
}
