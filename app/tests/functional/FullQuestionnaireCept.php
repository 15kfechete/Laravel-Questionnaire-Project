<?php 
$I = new FunctionalTester($scenario);

// The Purpose of tis Test is to see if the entire process for creating a questionnaire can be done

$I->amLoggedAs(['email' => '23932872@edgehill.ac.uk', 'password' => '12345678']); // Set a User as logged in
$I->wantTo('test wether creating every aspect of questionnaire works');

// given
$I->amOnPage('/home'); // Sets start on home page
// and
$I->see('Dashboard'); // Checks to see if Dashboard Line exists
// when
$I->click('Create New Questionnaire'); // Clicks on the Create New Questionnaire Button

// then
$I->amOnPage('/questionnaires/create'); // Returns the Creat Question View
// and
$I->see('Create New Questionnaire'); // Check if Create New Questionnaire Line Exists

// and
// when
$I->see('Questionnaire Title'); // Checks if the Questionnaire Title Line exists
// then
$I->fillField('questionnaireTitle','Questionnaire Design and its use in Research'); // Sets to fill the Questionnaire Title field
// and
// when
$I->see('Questionnaire Description and Terms'); // Checks if the Agreements Line Exists
// then
$I->fillField('agreementTerms','Example Decription and Agreement'); // Sets to fill the Agreement terms field
// and
// then
$I->click('Create Questionnaire'); // After fields are filled the Creat Questionnaire Button is Clicked

// when
$I->amOnPage('/questionnaires/1'); // Sets the page for the respective page
// and
// when
$I->see('Questionnaire Design and its use in Research'); //  Checks if the Questionnaire Title Exists
// and
$I->click('Create New Question'); // Then clicks on the create New Question Button

// then
// when
$I->amOnPage('/questionnaires/1/questions/create'); // Check wether the righ page is set
// and
$I->see('Question Input'); // Following Fields must Exists
$I->see('Choices');  // It was unsuccessfull to call the right data sets with test 
$I->see('Choice 1'); // but testing the webpage should work otherwise
$I->see('Choice 2');
$I->see('Choice 3');
$I->see('Choice 4');

// then
$I->click('Submit Question'); // Click to submit results

// when
$I->amOnPage('/questionnaires/1'); // Sends use to Questionnaire View
// and
$I->see('Which ethical consideration in Questionnaire Design do you think is most important?'); // The following lines should exist once view is rendered
$I->see('Consent');
$I->see('Anonymity');
$I->see('Concern for Distress');
$I->see('All of the above');
// and
$I->see('Edit Question');
$I->see('Delete Question');