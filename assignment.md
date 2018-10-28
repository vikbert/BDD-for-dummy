# Assignment

## Implement a simplistic "already known" authentication with email and password.
> Note: ❌ means to create a behat tests and make sure that test is red. ✅ implement the feature to make the test green.

#### Task 1: 
Implement a simplistic "already known" register with given email and password


- ❌ Scenario: the register-form.php is reachable
- ✅ add register-form.php
- ❌: Scenario: register form is display correctly
- ✅ implement the register form in register-form.php
- ❌: Scenario:
  
        -  register.php is reachable
        -  the confirmation text is shown, after submit the htrml form
  
- ✅ add register.php and make the test green
  
        - ✅ add `User` entity
        - ✅ add `UserRepositoryInterface`
        - ✅ add `FileStorageUserRepository` to save the user data
        - ✅ use `FileStorageUserRepository` in `register.php` to handle the registration of a new user
  
- ❌: Scenario:: a registered email can not be used for registration again
- ✅ add exception handling to ensure the existing email can not be used again for the regostration
- ❌: Scenario: form with a invalid email can not be submitted
- ✅ add html5 email validation in form
- ❌: Scenario: form with too short password can not be submitted
- ✅ add html5 password validation in form
   
#### Task 2:
Discussion of the first implementations popping up

#### Task 3:
Introducing some DDD concepts:

        * Domain and Infrastructure
        * Value Object
        * Aggregate Root
        * Entity
        * Repository
        * Read Model

#### Task 4:
Looking at how to improve our `Authentication` code

#### Task 5:
Wiring the ORM into our `Authentication` code


