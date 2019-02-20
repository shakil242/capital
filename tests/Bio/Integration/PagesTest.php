<?php

namespace App\Tests\Bio;

use App\Models\Bio;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use TestCase;

class PagesTest extends TestCase
{
    public function testMissingBioRoute(){
        $response = $this->call('GET','bio');
        $this->assertEquals(404, $response->status());
    }

    public function testBioRoute()
    {
        $someone = Bio::all()->first();
        $response = $this->call('GET', 'bio/' . $someone['slug']);
        $this->assertEquals(200, $response->status());
        $this->assertContains($someone['name'],$response->getContent());
    }

    public function testTeamRoute()
    {
        $bios = Bio::all();
        $this->visit('meet-the-team')->see($bios->first()['name']);
        $this->assertResponseOk();
    }
}
