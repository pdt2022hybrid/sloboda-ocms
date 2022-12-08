<?php namespace Matej\Testplugin\Components;

use Cms\Classes\ComponentBase;

class Test extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'test Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
