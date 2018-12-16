<?php

namespace Tests\Browser;

use phpDocumentor\Reflection\Types\Integer;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class CreateQuestionTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    use DatabaseMigrations;

    public function testCreateQuestion()
    {
        factory(User::class)->create([
            'email'=>'pk537@njit.edu',
            'password'=>'secret'
        ]);


        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/question/create')
                    ->assertSee('Create Question')
                    ->type('body', 'what is laravel?')
                    ->press('Save')
                    ->assertPathIs('/home')
                    ->assertSee('IT WORKS!');


        });
        //$id = DB::table('questions')->select('id')->where('body', $body)->first();

    }
}
