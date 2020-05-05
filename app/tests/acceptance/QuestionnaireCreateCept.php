<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('create questionnaire');
$I->amOnPage('/questionnaires/create');
$I->fillField('questionnaireTitle', 'Kevin');
$I->fillField('agreementTerms', 'qwerty');
$I->click('Create Questionnaire');
?>