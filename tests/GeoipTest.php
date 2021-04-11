<?php

use SilverStripe\Dev\SapphireTest;
use Sunnysideup\Geoip\Geoip;

/**
 * @internal
 * @coversNothing
 */
class GeoipTest extends SapphireTest
{
    public function testSetDefaultCountry()
    {
        Geoip::set_default_country_code('DE');
        Geoip::set_enabled(false);

        $this->assertSame('DE', Geoip::visitor_country());
        $this->assertSame('DE', Geoip::get_default_country_code());
    }
}
