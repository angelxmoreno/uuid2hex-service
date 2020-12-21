# UUID2Hex Service

PHP micro service for generating unique 16 character hex ids. I created this to be able to track the visitor and session ids
sent yo a Matomo (Formerly called Piwik) instance.

## Installation
```sh
git clone git@github.com:angelxmoreno/uuid2hex-service.git
cd uuid2hex-service
cp sample.env .env
composer install
docker-compose up
open http://localhost:8011/
```

## Configuration

The sample.env file contains several environmental variables to configure the app. These variables are set as defaults
 for the docker instance.
 
 | Name | required? | Default | Description |
 | -----| ------- | ----------- |------- |
 | PORT_PREFIX | only for Docker | 80 | the prefix for the ports used in the docker-compose.yml file.
 | APP_PREFIX | only for Docker | uuid2hex | the prefix used to name your docker containers
 | DATABASE_URL | yes| url of the mariaDB container | the database url your app should connect to
 | CACHE_URL | yes | file based caching using the app cache dir | the cache engine your app should use for db caching
 | SENTRY_DSN | no | none | used for sentry error catching |
 | SENTRY_ENVIRONMENT | no | none | used for sentry error catching |
 | SENTRY_SERVER_NAME | no | none | used for sentry error catching |
 
