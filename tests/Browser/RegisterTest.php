<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     *
     */
    public function testRegisterPage()
    {
        $this->browse(function (Browser $browser){
            $browser->visit('/register')
                ->assertSee('Register');
        });


    }
    public function testUser_Registeration()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Register')
                    ->type('email','pk537@njit.edu')
                    ->type('password','secret')
                    ->type('password_confirmation','secret')
                    ->press('Register')
                    ->assertPathIs('/home');

        });
    }
}
