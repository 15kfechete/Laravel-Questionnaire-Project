<?php 
$I = new FunctionalTester($scenario);
 // This test will try and see wether the questionnaire can be completed.
$I->wantTo('test wether a questionnaire can be completed');

// given
$I->amOnPage('/'); // it will begin from the welcome view
// when
$I->see('Private Access');
$I->see('Access Questionnaires');
// and
$I->see('Public Access');
// then
$I->click('View Public Questionnaires');

// when
$I->amOnPage('/respondents');
// then
$I->see('Questionnaire Design and its use in Research');
$I->see('Description, Terms and Agreements');
$I->see('Click here please to participate in the survey');
// and 
// then
$I->click('Complete Survey');

// when
$I->amOnPage('/surveys/1-questionnaire-design-and-its-use-in-research');
// and
$I->see('1. Which ethical consideration in Questionnaire Design do you think is most important?');
$i->SeeOptionIsSelected("'answers'", 'Consent');
// and
$I->see('2. Which type of Questionnaire do you think is most commonly used?');
$i->SeeOptionIsSelected("'answers'", 'Closed Questionnaires');
// and
$I->see('3. From a range of 1(1=low) to 4 (4=high), how would you rate your attitude towards questionnaires?');
$i->SeeOptionIsSelected("'answers'", '1');
// and
$I->see('4. How often do you participate in surveys?');
$i->SeeOptionIsSelected("'answers'", 'Never');
// and
$I->see('5. What do you think is the most common reason for why Questionnaires exist?');
$i->SeeOptionIsSelected("'answers'", ' To gather Opinions');

// then 
$I->click('Submit Responses');

// and
$I->amOnPage('/farewell');

// This test was unsuccessfull as the $i->SeeOptionIsSelected("'answers'", '....'); would not be recognised
// But carrying out the test manually should work.