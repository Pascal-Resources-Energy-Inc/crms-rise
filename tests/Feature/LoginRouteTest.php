<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginRouteTest extends TestCase
{
    public function testLegacyHtmlLoginUrlRedirectsToLaravelLoginRoute()
    {
        $response = $this->get('/login.html');

        $response->assertRedirect('/login');
    }
}
