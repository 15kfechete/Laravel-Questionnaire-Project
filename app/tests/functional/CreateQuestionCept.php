<?php 
$I = new FunctionalTester($scenario);
// This test checks wether creating a question works
$I->amLoggedAs(['email' => '23932872@edgehill.ac.uk', 'password' => '12345678']); // Sets user as being logged in
$I->wantTo('create a new question');

// given
$I->amOnPage('/questionnaires/1'); // Test begins in the questionnaire view
// and
$I->see('Questionnaire Design and its use in Research'); // Checks if Questionnaire Title exists
// then
$I->click('Create New Question'); // click to return the create question view

// when
$I->amOnPage('/questionnaires/1/questions/create'); // the create question view is rendered

// and
$I->see('Question Input'); // Following Fields must Exists
$I->see('Choices');  // It was unsuccessfull to call the right data sets with test 
$I->see('Choice 1'); // but testing the webpage should work otherwise
$I->see('Choice 2');
$I->see('Choice 3');
$I->see('Choice 4');

// then
$I->click('Submit Question'); // This should submit all the fields and create the data for the question

// when
$I->amOnPage('/questionnaires/1'); // The following lines should exist once view is rendered and data is transferred
$I->see('Questionnaire Design and its use in Research');
$I->see('Which ethical consideration in Questionnaire Design do you think is most important?');
$I->see('Consent');
$I->see('Anonymity');
$I->see('Concern for Distress');
$I->see('All of the above');
