<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Example extends Selenium
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testTitle()
    {
        $this->visit('/')
            ->see('Site title','title');
    }
}
