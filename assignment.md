# Assignment

## Implement a simplistic "already known" authentication with email and password.

Follow the following steps to add the feature with `BDD`
- ❌ this icon means to create a behat scenario and the test should be `red`.
- ✅ this icon means to implement the feature in order to make the failed test green.

## Task 1: 
Implement a simplistic "already known" registration with given email and password.


- ❌ Scenario: the register-form.php is reachable
- ✅ add register-form.php
- ❌ Scenario: register form is display correctly
- ✅ implement the register form in register-form.php
- ❌ Scenario:
  
        -  register.php is reachable
        -  the confirmation text is shown, after submit the htrml form
  
- ✅ add register.php and make the test green
  
        - ✅ add `User` entity
        - ✅ add `UserRepositoryInterface`
        - ✅ add `FileStorageUserRepository` to save the user data
        - ✅ use `FileStorageUserRepository` in `register.php` to handle the registration of a new user
  
- ❌ Scenario: a registered email can not be used for registration again
- ✅ add exception handling to ensure the existing email can not be used again for the regostration
- ❌ Scenario: form with a invalid email can not be registered
- ✅ add email validation and ensure validation message is shown
- ❌ Scenario: form with too short password can not be register
- ✅ add password validation and ensure validation message is shown
   
## Task 2:
Discussion of the first implementations popping up

## Task 3:
Introducing some DDD concepts:

        * Domain and Infrastructure
        * Value Object
        * Aggregate Root
        * Entity
        * Repository
        * Read Model

## Task 4:
Looking at how to improve our `Authentication` code

## Task 5:
Wiring the ORM into our `Authentication` code


