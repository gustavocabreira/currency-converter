<?php

namespace Tests\Feature;

use Tests\TestCase;

class ConvertTest extends TestCase
{
    public function testMustConvertUsdToBrl()
    {
        $response = $this->post('/api', [
            'amount' => 1,
            'from' => 'USD',
            'to' => 'BRL'
        ]);
        $response->assertJson(['result' => 5.65]);
    }

    public function testMustConvertBrlToUsd()
    {
        $response = $this->post('/api', [
            'amount' => 5.65,
            'from' => 'BRL',
            'to' => 'USD'
        ]);
        $response->assertJson(['result' => 1]);
    }

    public function testMustConvertEurToUsd()
    {
        $response = $this->post('/api', [
            'amount' => 1,
            'from' => 'EUR',
            'to' => 'USD'
        ]);
        $response->assertJson(['result' => 1.18]);
    }

    public function testMustConvertUsdToGbp()
    {
        $response = $this->post('/api', [
            'amount' => 10,
            'from' => 'USD',
            'to' => 'GBP'
        ]);
        $response->assertJson(['result' => 7.8]);
    }

    public function testMustConvertBtcToArs()
    {
        $response = $this->post('/api', [
            'amount' => 5,
            'from' => 'BTC',
            'to' => 'ARS'
        ]);
        $response->assertJson(['result' => 4318214.28]);
    }

    public function testMustConvertUsdToEur()
    {
        $response = $this->post('/api', [
            'amount' => 1.18,
            'from' => 'USD',
            'to' => 'EUR'
        ]);
        $response->assertJson(['result' => 1]);
    }

    public function testMustConvertBtcToBrl()
    {
        $response = $this->post('/api', [
            'amount' => 1,
            'from' => 'BTC',
            'to' => 'BRL'
        ]);
        $response->assertJson(['result' => 60455]);
    }

    public function testMustConvertBrlToBtc()
    {
        $response = $this->post('/api', [
            'amount' => 60455,
            'from' => 'BRL',
            'to' => 'BTC'
        ]);
        $response->assertJson(['result' => 1]);
    }
}
