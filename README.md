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
 | MATOMO_ENABLED | no | false | used for Matomo analytics tracking |
 | MATOMO_SITE_ID | no | none | used for Matomo analytics tracking|
 | MATOMO_SITE_URL | no | none | used for Matomo analytics tracking |
 
## License

(The MIT license)

Copyright (c) 2020 Angel S. Moreno

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.