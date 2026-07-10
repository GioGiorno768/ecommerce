<?php

namespace Tests\Unit;

use Tests\TestCase;

class DancellTest extends TestCase{
    public function halaman_beranda_dapat_di_akses()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertViewIs('home');
    }
}
