<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_frodo_is_created_sucessfully(){
        $response = $this->post('/pets', [
            'name' => 'Frodo',
            'description' => 'Central Asian Shepherd Dog',
            'type' => 'Dog',
            'birthday' => '2024-02-01',
        ]);

        $this->assertDatabaseHas('pets', [
            'name' => 'Frodo'
        ]);
    }


    public function test_number_of_days_old_is_calculated_correctly(){

        $daysOld = \Carbon\Carbon::parse(2024-02-01)->diffInDays(now());

        $this->assertEquals(number_format($daysOld,0), '19,948');
    }
}
