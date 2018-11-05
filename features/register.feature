Feature: Register
  As a new user
  I want to register with email and password
  So I know the register is working

  Scenario: User can register with email and password with success
    Given I visit "register-form.php"
    When I should see the page tile "new user register"
    Then I fill in "email" with "demo@demo.de"
    And I fill in "password" with "password"
    And I press "register"
    Then I should be on "register.php"
    And I should see "Ok"

  Scenario: User cannot repeat the register with the same email
    Given I visit "register-form.php"
    When I should see the page tile "new user register"
    Then I fill in "email" with "demo@demo.de"
    And I fill in "password" with "another_password"
    And I press "register"
    Then I should be on "register.php"
    And I should see "Nope"

  Scenario: User cannot cannot submit the form with invalid email
    Given I visit "register-form.php"
    Then I fill in "email" with "demo"
    And I fill in "password" with "123test"
    And I press "register"
    Then I should be on "register.php"
    And I should see "Nope, invalid email"

  Scenario: User cannot cannot submit the form with invalid password
    Given I visit "register-form.php"
    Then I fill in "email" with "demo@test.de"
    And I fill in "password" with "123"
    And I press "register"
    Then I should be on "register.php"
    And I should see "Nope, invalid password"