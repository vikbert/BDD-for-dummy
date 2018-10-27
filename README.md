# BDD For Dummy from the DDD perspective

This tutorial will introduce you to using BDD to start the implementation of
basic authentication tutorial, then have a short look at DDD 
with tactical DDD concepts.

## Plan of operation

 1. Installation of prerequisite via `composer`
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

### Installation

First, [install composer](https://getcomposer.org/download/).

After that, you can run:

```sh
composer install
```
