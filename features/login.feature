Feature: Login
  As a user
  I want to login with email and password
  So I know the login is working

  Scenario: User can see the page with login form
    Given I visit "login-form.php"
    Then I should see the page tile "login form"
    When I fill in "email" with "this_is_a_unknown_email@unknown.domain"
    And I fill in "password" with "some_password"
    And I press "login"
    Then I should be on "login.php"
    And the response status code should be 200
