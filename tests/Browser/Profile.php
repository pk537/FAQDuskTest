<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class Profile extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    use DatabaseMigrations;

    public function testProfile()
    {
        factory(User::class)->create([
            'email'=>'pk537@njit.edu',
            'password'=>'secret'
        ]);
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                    ->assertSee('My Account')
                    ->clickLink('My Account')
                    ->assertSee('Create Profile')
                    ->clickLink('Create Profile')
                    ->type('First Name','Pooja')
                    ->type('Last Name','SK')
                    ->type('Body','I am an IS Student')
                    ->press('Save')
                    ->assertSee('Profile Created')
                    ->press('My Account')
                    ->assertSee('My Profile')
                    ->clickLink('My Profile')
                    ->assertSee('First Name: Pooja
                                       Last Name: SK
                                       Body: I am an IS Student')
                    ->assertSee('Edit')
                    ->press('Edit')
                    ->type('First Name','Pooja')
                    ->type('Last Name','Kudlannavar')
                    ->type('Body','I am an IS Student and I am in First Semester')
                    ->press('Save')
                    ->assertSee('Updated Profile')
                    ->clickLink('My Account')
                    ->assertSee('Logout')
                    ->clickLink('Logout')
                    ->assertPathIs('/')

        ;});
    }
}
