<?php

namespace Tests\Feature;

use App\Http\Controllers\FacilityController;
use App\Facility;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use WithoutMiddleware;
use function Sodium\increment;

class ExampleTest extends TestCase
{


    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $fac = new Facility(['create']);
        $this->assertTrue($fac->create([

            'Name' =>'Hip Pop',
            'Location'=>'A121',
            'Category'=>'Multi-complex',
            'Type'=>'Open',
            'Capacity'=>50,
            'filename'=> 'part.jpg',
            'mime'=> image/jpeg,
            'original_filename'=>part.jpg,
            'Status'=>'Available',


        ]));
        /*$this->assertDatabaseHas('facilities', [
            'Name' =>'Jazz'
        ]);*/

    }
}
