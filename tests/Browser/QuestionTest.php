<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class QuestionTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    use DatabaseMigrations;
    public function testQuestionPage()
    {
        factory(User::class)->create();
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/home')
                    ->assertPathIs('/home')
                    ->assertSee('Questions');
                    //->press('Create a question.');


            //->assertSee('Create Question');
        });
    }
}
