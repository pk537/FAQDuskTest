<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
use App\Question;

class AnswerTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    use DatabaseMigrations;

    public function testAnswerPage()
    {
        factory(User::class)->create([
            'email'=>'pk537@njit.edu',
            'password'=>'secret'
        ]);
        factory(Question::class)->create([
            'user_id'=>User::where(['email'=>'pk537@njit.edu'])->first()->id,
            'body'=> 'what is laravel?'
        ]);
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                ->visit('/question/1')
                ->assertSee('Question')
                ->assertSee('what is laravel')
                ->clickLink('Answer Question')
                ->type('body','framework')
                ->press('Save')
                ->assertSee('framework')
        ;});
    }
}
