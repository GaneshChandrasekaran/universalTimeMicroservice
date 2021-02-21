# Universal Time Service

This PHP microservice returns the current [UTC time](https://en.wikipedia.org/wiki/Coordinated_Universal_Time) in RFC 2822 format for all timezones.
Example format: Mon, 15 Aug 2005 15:52:01 +0000

### Prerequisites
Install and setup the following dependencies on your machine:
- [Docker Engine](https://www.docker.com/products/docker-desktop)
- [PHP Composer](https://getcomposer.org/download/)

## Setup the application
- Clone the repository into a local directory
- Go to the root directory of the project. All commands in rest of the document should be executed from here.
- Run `composer install`

## Start the application
- Run `docker-compose up -d`
- Open your browser and go to http://localhost:8120/UniversalTime

The endpoint http://localhost:8120/UniversalTime also optionally accepts `timeUTC` as a request parameter.
Example http://localhost:8120/UniversalTime?timeUTC=1613840623

## Running PHP Unit Tests
- Run `./vendor/bin/phpunit`

## Stop the application
- Run `docker-compose down --remove-orphans`
