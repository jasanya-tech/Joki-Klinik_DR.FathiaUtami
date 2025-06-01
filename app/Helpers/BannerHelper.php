<?php 

namespace App\Helpers;

use App\Models\Banner;

class BannerHelper
{
    /**
     * Get the banner image URL based on the type.
     *
     * @param string $type
     * @return string
     */
    public static function getBannerImageUrl(string $name): string
    {
        $Banner = Banner::where('name', $name)->firstOrFail();

        if ($Banner && $Banner->image) {
            return asset('storage/' . $Banner->image);
        }

        return asset('images/default-banner.jpg'); // Ganti dengan path default banner jika tidak ditemukan
    }
}