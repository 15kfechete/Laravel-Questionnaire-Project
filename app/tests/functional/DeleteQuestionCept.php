<?php 
$I = new FunctionalTester($scenario);
// The purpose of this test is to check if the delete question feature works
$I->amLoggedAs(['email' => '23932872@edgehill.ac.uk', 'password' => '12345678']); // Sets it to be logged in as user
$I->wantTo('delete a question');

$I->amOnPage('/questionnaires/1'); // Sets it to be in questionnaire view
$I->click('Delete Question');  // This Link should delee the Questionnaire

$I->amOnPage('/questionnaires/1'); // Should refresh page

// The following lines should no longer exist if the test is successfull
$I->DontSee('Example');
$I->DontSee('answer1');
$I->DontSee('answer2');
$I->DontSee('answer3');
$I->DontSee('answer4');

// The test was unsuccessfull to make it work , but should actually work on the website

