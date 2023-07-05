<?php
use PHPUnit\Framework\TestCase;
use Oxyzal\OpenDataPg\Api;

class ApiTest extends TestCase
{
    public function testGetAbilitiesAgent()
        {
            $api = new Api();


            $result = $api->getAbilitiesAgent();


            $this->assertIsArray($result);
        }
}
