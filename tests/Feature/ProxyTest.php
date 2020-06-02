<?php

namespace Tests\Feature;

use App\DesignPatterns\Structural\Proxy\RecordProxy;
use Tests\TestCase;


class ProxyTest extends TestCase
{
    public function testSetAttribute(){
        $data = [];
        $proxy = new RecordProxy($data);
        $proxy->xyz = false;
        $this->assertTrue(is_string($proxy->xyz));
    }
}
