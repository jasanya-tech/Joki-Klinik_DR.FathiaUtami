<?php

namespace App\Helpers;

use App\Models\Setting;

class SettingHelpers
{

    public static function getSetting($key)
    {
        $setting = Setting::where(
            'key',
            $key
        )->where('active', true)->first();

        if ($setting) {
            if ($setting->type != null) {
                return $setting->value[$setting->type];
            }
        }

        return "";
    }
}
