<?php 
$I = new FunctionalTester($scenario);

$I->amLoggedAs(['email' => '15kfechete@gmail.com', 'password' => '12345678']);
$I->wantTo('test homepage is working');

$I->amOnPage('/');
$I->seeInCurrentUrl('/');

$I->amOnPage('/');
$I->see('Dashboard');


