## Install Instructions

### Step One
Install this using Composer by adding the following to your shell.
```sh
composer require fredbradley/slacklogs
```
Or if you're the type of person that likes to edit the `composer.json` file directly, then add in: 
```json
"fredbradley/slacklogs": "^1.2.*"
```

### Step Two
Add the Service Provider to you `config/app.php`.
In `config/app.php`, at the bottom of the array group where it lists "Package Service Providers...", add in:
```php
FredBradley\CranleighSchool\SlackServiceProvider::class,
```
Remember to ensure there's no trailing comma at the end of the array, but that there is one on the line above!

### Step Three
Publish the config:
in your shell write:
```sh
php artisan vendor:publish --tag=slackconfig
```
### Step Four
Edit your config, in the file `config/slacklogs.php`
 - `webhook` => the slack webhook you have set up at https://slack.com. ([More info here](https://www.programmableweb.com/news/how-to-integrate-webhooks-slack-api/how-to/2015/10/20))
 - `name` => change this if you wish - it will be the name that slack posts as
 - `channel_dev` => The name of the channel you wish to post errors of your local environment to
 - `channel_master` => The name of the channel you wish to post errors of your production environment to
 
 
