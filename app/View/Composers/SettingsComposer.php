<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Setting;

class SettingsComposer
{
    public $settings;

    public function __construct()
    {
        $this->settings = Setting::getSettings();
    }

    public function compose(View $view)
    {
        $view->with('settings', $this->settings);
    }
}
