<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Parents extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function createParent(){
        $response = $this->post('/create-parent',[
            'fname' => 'best',
            'lname' => 'mugisa',
            'contact' => '256702913454'
        ]);

        $response->assertok();
    }
}
