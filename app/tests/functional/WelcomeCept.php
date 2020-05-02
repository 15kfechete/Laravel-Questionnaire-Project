<?php 
$I = new FunctionalTester($scenario);

$I->am('a admin');
$I->wantTo('test laravel working');

$I->amOnPage('/home');

$I->seeCurrentUrlEquals('/home');
$I->sees('Laravel', '.title');




