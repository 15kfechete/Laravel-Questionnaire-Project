<?php 
$I = new FunctionalTester($scenario);

$I->amLoggedAs(['email' => '23932872@edgehill.ac.uk', 'password' => '12345678']);
$I->wantTo('edit a question');

$I->amOnPage('/questionnaires/1');
$I->click('Edit Question');

$I->amOnPage('/questionnaires/1/edit');
$I->see('Edit Question');

$I->see('Question Input');

$I->see('Choices');

$I->see('Choice 1');
$I->see('Choice 2');
$I->see('Choice 3');
$I->see('Choice 4');

$I->click('Edit Question');

$I->amOnPage('/questionnaires/1');
$I->see('Example');
$I->see('answer1');
$I->see('answer2');
$I->see('answer3');
$I->see('answer4');

// IThis test should not work since I couldnt get to make the actual webpage to work in the first place.