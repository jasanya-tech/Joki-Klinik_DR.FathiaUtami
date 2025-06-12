<?php

namespace App\Helpers;

use App\Models\Setting;

class SettingHelper
{
    public static function getSetting($key, $lang = 'id')
    {
        $setting = Setting::where('key', $key)->where('status_id', 1)->first();

        if (!$setting) {
            return "Setting with key '$key' not found";
        }

        $value = $setting->value;

        // Coba decode JSON
        $decoded = json_decode($value, true);

        // Jika JSON valid dan berbentuk array, ambil berdasarkan bahasa
        if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
            return $decoded[$lang] ?? reset($decoded); // fallback ke elemen pertama jika tidak ada key
        }

        // Jika bukan JSON, kembalikan string biasa
        return $value;
    }
}
