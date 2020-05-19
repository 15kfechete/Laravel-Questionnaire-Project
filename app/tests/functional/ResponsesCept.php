<?php 
$I = new FunctionalTester($scenario);
// The purpose of this test is to test wether the responses from a completed questionnaire are rendered in the Questionnaire View

$I->amLoggedAs(['email' => '23932872@edgehill.ac.uk', 'password' => '12345678']); // Logged In use example
$I->wantTo('see if response results appear');

// given
$I->amOnPage('/questionnaires/1');
$I->see('Questionnaire Design and its use in Research'); // Questionnaire Title

// when
$I->see('Which ethical consideration in Questionnaire Design do you think is most important?'); // Checks to see Question Topic
$I->see('Consent'); // Checks to see Question Option
$I->see('Anonymity'); // Checks to see Question Option
$I->see('Concern for Distress'); // Checks to see Question Option
$I->see('All of the above'); // Checks to see Question Option
$I->see('Edit Question');
$I->see('Delete Question');

// then
$I->see('Answered'); // Checks to see if a response regarding the number of answered questions appears
$I->see('%'); // Checks to see if a response regardin the percentage answers of the question option nappears


