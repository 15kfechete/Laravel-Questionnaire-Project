<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('test homepage working');

$I->amOnPage('/login');
$I->seeInCurrentUrl('/login');

$I->see('Login');
$I->see('Register');

$I->see('E-Mail Address');
$I->fillField('email','15kfechete@gmail.com');

$I->see('Password');
$I->fillField('password','12345678');
$I->click('Login');
