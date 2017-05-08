<?php

namespace FredBradley\CranleighSchool;

use Log;
use Monolog;
use Config;
use Illuminate\Support\ServiceProvider;

class SlackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     * @return void
     * @throws \Exception
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config.php' => config_path('slacklogs.php')
        ], 'slackconfig');
        if (file_exists(config_path('slacklogs.php'))) {
            if (Config::has('slacklogs.webhook')) {
                Log::listen(function () {
                    $monolog = Log::getMonolog();

                    if (env('APP_ENV') != 'production') {
                        $monolog->pushHandler($chromeHandler = new Monolog\Handler\ChromePHPHandler());
                        $chromeHandler->setFormatter(new Monolog\Formatter\ChromePHPFormatter());
                    }

                    if (env('APP_ENV') != 'production') {
                        $slack_channel = config('slacklogs.channel_dev');
                    } else {
                        $slack_channel = config('slacklogs.channel_master');
                    }

                    $slackHandler = new Monolog\Handler\SlackWebhookHandler(
                        config('slacklogs.webhook'),
                        $slack_channel,
                        config('slacklogs.name'),
                        true,
                        ":eyes:",
                        true,
                        false,
                        Monolog\Logger::DEBUG
                    );

                    $monolog->pushHandler($slackHandler);
                    $slackHandler->setFormatter(new Monolog\Formatter\LineFormatter());
                });
            } else {
                $errmsg = "It looks like you're trying to use the SlackLogs Webhook, but you haven't defined a webhook in `config/slacklogs.php`";
                throw new \Exception($errmsg);
                Log::error($errmsg);
            }
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}