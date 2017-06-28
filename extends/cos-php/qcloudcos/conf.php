<?php

namespace qcloudcos;

class Conf {
    // Cos php sdk version number.
    const VERSION = 'v4.2.3';
    const API_COSAPI_END_POINT = 'http://region.file.myqcloud.com/files/v2/';

    // Please refer to http://console.qcloud.com/cos to fetch your app_id, secret_id and secret_key.
    const APP_ID = '1252873427';
    const SECRET_ID = 'AKIDhEXaNtw8rJbcQ0mN9fvvfAPN5Xjfrjtn';
    const SECRET_KEY = 'mJcgaFgrnSs2way6xc2D8tQkocASUHp8';

    /**
     * Get the User-Agent string to send to COS server.
     */
    public static function getUserAgent() {
        return 'cos-php-sdk-' . self::VERSION;
    }
}
