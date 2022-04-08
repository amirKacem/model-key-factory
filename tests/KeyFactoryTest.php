<?php

namespace Eloquent\KeyFactory\Tests;

use Illuminate\Support\Str;
use Eloquent\KeyFactory\KeyFactory;


class KeyFactoryTest extends  TestCase {

    /** @test */
    public function testThatString(){

        $key = KeyFactory::generate('test');
        $this->assertTrue(str_contains($key,'test'));

    }

    /** @test */
    public function generate_key_using_str(){
        $key = Str::key(
            prefix: 'test',
        );

        $this->assertTrue(
            condition: str_contains($key, 'test'),
        );
    }
}