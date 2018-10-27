# BDD For Dummy from the DDD perspective

This tutorial will guide you to using BDD to start a simplistic "already known" 
`Authentication` domain, then introduce you to have a short look at DDD 
with tactical DDD concepts in the target `domain`.

## Plan of operation

 1. Installation of prerequisite
 2. Getting started with a simplistic "already known" 
    `Authentication` domain, *without* ORM
 3. Discussion of the first implementations popping up
 4. Introducing some DDD concepts:
     * Domain and Infrastructure
     * Value Object
     * Aggregate Root
     * Entity
     * Repository
     * Read Model
 5. Looking at how to improve our `Authentication` code
 6. Wiring the ORM into our `Authentication` code

## TODOs

- setup behat tests
    -  
 
### Installation

First, [install composer](https://getcomposer.org/download/).

After that, you can run:

```sh
composer req --dev phpstan/phpstan
composer install
```
