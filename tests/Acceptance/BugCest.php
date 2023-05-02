<?php

use Tests\Support\AcceptanceTester;

class BugCest
{
    public function should_fail_and_does(AcceptanceTester $I)
    {
        $I->assertTrue(true);
        throw new Exception("exception thrown");
    }

    public function should_fail_and_does_not(AcceptanceTester $I)
    {
        $I->assertTrue(true);
        $I->amGoingTo('just a comment');
        throw new Exception("exception thrown");
    }

}
