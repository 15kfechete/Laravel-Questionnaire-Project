<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('test Laravel Working');

$I->amOnPage('/');

$I->seeCurrentUrlEquals('/');
$I->See('Dashboard');

