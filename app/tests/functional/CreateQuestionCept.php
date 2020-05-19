<?php 
$I = new FunctionalTester($scenario);
$I->amLoggedAs(['email' => '15kfechete@gmail.com', 'password' => '12345678']);
$I->wantTo('create a new question');

$I->amOnPage('/questionnaires/9');
$I->see('Example Title');
$I->click('Create New Question');

$I->amOnPage('/questionnaires/9/questions/create');
$I->see('Question Input');

$I->see('Choices');

$I->see('Choice 1');
$I->see('Choice 2');
$I->see('Choice 3');
$I->see('Choice 4');

$I->click('Submit Question');

$I->amOnPage('/questionnaires/9');
$I->see('Example');
$I->see('answer1');
$I->see('answer2');
$I->see('answer3');
$I->see('answer4');

//Also
$I->amOnPage('/questionnaires/9');
$I->see('Example Title');