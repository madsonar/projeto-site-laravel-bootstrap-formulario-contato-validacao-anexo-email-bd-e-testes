<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class ContatoControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAcessoGet()
    {
        $response = $this->get('/contato');

        $response->assertStatus(200);
    }

    public function testAcessoPost()
    {
        $response = $this->post('/contato');

        $response->assertStatus(302);
    }    

    public function testAcessoPostDump()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/contato', ['nome' => 'Madson']);

        //$response->dump();

        $response->assertStatus(302);
    }
    
}
