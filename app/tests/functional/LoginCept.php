<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('test login is working');
// The purpose of this test is to test wether the login feature of the website works.

// given
$I->amOnPage('/login'); // Starts in the login page
// and
$I->seeInCurrentUrl('/login'); // check if its in the login page
// and
$I->see('Login'); // checks to see if the login link exists
// and
$I->see('Register'); // checks to see if the register link exists

// then
// when
$I->see('E-Mail Address'); // Checks to see if Email Line Exists
// and
$I->fillField('email','15kfechete@gmail.com'); // Tells to fill the fied of the email section

// and
$I->see('Password'); // Checks to see if Password Line Exists
// and
$I->fillField('password','12345678'); // Tells to fill the field of the password section
//and
$I->click('Login'); // Tells to click the login button

// then
$I->amOnPage('/home'); // should go to the Homepage afterwards
