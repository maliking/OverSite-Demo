<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Preview\Proxy\Service;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class PhoneNumberTest extends HolodeckTestCase
{
    public function testCreateRequest()
    {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->proxy->services("KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->phoneNumbers->create("PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
        } catch (DeserializeException $e) {
        } catch (TwilioException $e) {
        }

        $values = array(
            'Sid' => "PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
        );

        $this->assertRequest(new Request(
            'post',
            'https://preview.twilio.com/Proxy/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers',
            null,
            $values
        ));
    }

    public function testCreateResponse()
    {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "sid": "PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "phone_number": "+987654321",
                "country_code": "US",
                "capabilities": [],
                "url": "https://preview.twilio.com/Proxy/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers/PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->preview->proxy->services("KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->phoneNumbers->create("PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest()
    {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->proxy->services("KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->phoneNumbers("PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->delete();
        } catch (DeserializeException $e) {
        } catch (TwilioException $e) {
        }

        $this->assertRequest(new Request(
            'delete',
            'https://preview.twilio.com/Proxy/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers/PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
        ));
    }

    public function testDeleteResponse()
    {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->preview->proxy->services("KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->phoneNumbers("PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->delete();

        $this->assertTrue($actual);
    }

    public function testReadRequest()
    {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->proxy->services("KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->phoneNumbers->read();
        } catch (DeserializeException $e) {
        } catch (TwilioException $e) {
        }

        $this->assertRequest(new Request(
            'get',
            'https://preview.twilio.com/Proxy/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers'
        ));
    }

    public function testReadFullResponse()
    {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://preview.twilio.com/Proxy/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "next_page_url": null,
                    "key": "phone_numbers",
                    "url": "https://preview.twilio.com/Proxy/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers?PageSize=50&Page=0"
                },
                "phone_numbers": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "service_sid": "KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "sid": "PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "2015-07-30T20:00:00Z",
                        "date_updated": "2015-07-30T20:00:00Z",
                        "phone_number": "+987654321",
                        "country_code": "US",
                        "capabilities": [],
                        "url": "https://preview.twilio.com/Proxy/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers/PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                ]
            }
            '
        ));

        $actual = $this->twilio->preview->proxy->services("KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->phoneNumbers->read();

        $this->assertGreaterThan(0, count($actual));
    }

    public function testFetchRequest()
    {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->proxy->services("KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->phoneNumbers("PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->fetch();
        } catch (DeserializeException $e) {
        } catch (TwilioException $e) {
        }

        $this->assertRequest(new Request(
            'get',
            'https://preview.twilio.com/Proxy/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers/PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
        ));
    }

    public function testFetchResponse()
    {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "phone_number": "12345",
                "country_code": "US",
                "capabilities": [],
                "url": "https://preview.twilio.com/Proxy/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers/PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->preview->proxy->services("KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->phoneNumbers("PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->fetch();

        $this->assertNotNull($actual);
    }
}