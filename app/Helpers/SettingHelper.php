<?php

namespace App\Helpers;

use App\Models\Setting;

class SettingHelper
{

    public static function getSetting($key)
    {
        $setting = Setting::where(
            'key',
            $key
        )->first();

        if ($setting) {
            if ($setting->type != null) {
                return $setting->value[$setting->type];
            }
        }

        return "Please set the setting for " . $key;
    }
}
