<?php 
$I = new FunctionalTester($scenario);

$I->amLoggedAs(['email' => '15kfechete@gmail.com', 'password' => '12345678']);
$I->wantTo('delete a questionnaire');

$I->amOnPage('/home');
$I->click('Delete Questionnaire');

$I->DontSee('Example Title Amended');
$I->DontSee('Example Agreement Amended');