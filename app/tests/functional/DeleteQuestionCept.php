<?php 
$I = new FunctionalTester($scenario);

$I->amLoggedAs(['email' => '15kfechete@gmail.com', 'password' => '12345678']);
$I->wantTo('delete a question');

$I->amOnPage('/questionnaires/9');
$I->click('Delete Question');

$I->amOnPage('/questionnaires/9');

$I->DontSee('Example');
$I->DontSee('answer1');
$I->DontSee('answer2');
$I->DontSee('answer3');
$I->DontSee('answer4');

