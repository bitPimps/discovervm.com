<?php
// Include path
define('INC_PATH', $_SERVER['DOCUMENT_ROOT']);
// Site-wide settings
define('SITE_NAME', 'The Barral Institute');
define('SITE_URL', 'https://discovervm.com');
define('SITE_LOGO', 'https://www.barralinstitute.com/img/logos/bi.png');
// Social media
define('FACEBOOK_URL', 'https://www.facebook.com/BarralInstitute');
define('INSTAGRAM_URL', 'https://www.instagram.com/barralinstitute/');
define('TWITTER_URL', 'https://twitter.com/BarralInstitute');
define('TWITTER_USER', get_twitter_id_from_url(TWITTER_URL)); // Get Twitter name from Twitter URL
define('YOUTUBE_URL', 'https://www.youtube.com/user/barralinstitute');
// Physical Location
define('ADDRESS_STREET', '11211 Prosperity Farms Road, Suite D324');
define('ADDRESS_CITY', 'Palm Beach Gardens');
define('ADDRESS_STATE', 'Florida');
define('ADDRESS_STATE_ABBREVIATION', 'FL');
define('ADDRESS_ZIPCODE', '33410-3487');
// Contact numbers
define('NUMBER_TOLL_FREE', '1-866-522-7725');
define('NUMBER_LOCAL', '1-561-622-4334');
define('NUMBER_FAX', '1-561-622-4771');
