<?php 
$I = new FunctionalTester($scenario);

$I->amLoggedAs(['email' => '15kfechete@gmail.com', 'password' => '12345678']);
$I->wantTo('test homepage is working');

$I->amOnPage('/home');
$I->seeInCurrentUrl('/home');

$I->amOnPage('/home');
$I->see('Dashboard');


