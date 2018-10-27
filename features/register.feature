Feature: Register
  As a new user
  I want to register with email and password
  So I know the register is working

  Scenario: User can see the page with login form
    Given I visit "register-form.php"
    When I should see the page tile "new user register"
    Then I fill in "email" with "demo@demo.de"
    And I fill in "password" with "password"
    And I press "register"
    Then I should see "OK"

