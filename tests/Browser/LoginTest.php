<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class LoginTest extends DuskTestCase
{
    //use RefreshDatabase;
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLoginPage()
    {
        factory(User::class)->create();
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Login')
                    ->type('email','pk537@njit.edu')
                    ->type('password','secret')
                    ->press('Login')
                    ->assertPathIs('/login')
                    ->loginAs(User::find(1));

        });
    }
}
