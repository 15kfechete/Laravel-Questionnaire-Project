<?php 
$I = new FunctionalTester($scenario);


$I->am('admin');
$I->wantTo('test laravel working');

$I->amOnPage('/');

$I->seeCurrentUrlEquals('/');
$I->sees('Laravel', '.title');




