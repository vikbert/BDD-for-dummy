Feature: Login
  As a user
  I want to login with email and password
  So I know the login is working

  Scenario: User can see the page with login form
    Given I visit "login-form.php"
    Then I should see the page tile "login form"