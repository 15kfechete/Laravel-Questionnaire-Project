<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('I want to ensure Laravel works');
$I->amOnPage('/');
$I->see('Laravel');


