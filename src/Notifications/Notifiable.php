<?php

namespace Spatie\UptimeMonitor\Notifications;

use Illuminate\Notifications\Notifiable as NotifiableTrait;

class Notifiable
{
    use NotifiableTrait;

    /**
     * @return string|null
     */
    public function routeNotificationForMail()
    {
        return config('uptime-monitor.notifications.mail.to');
    }

    /**
     * @return string|null
     */
    public function routeNotificationForSlack()
    {
        return config('uptime-monitor.notifications.slack.webhook_url');
    }

    /**
     * @return string|null
     */
    public function routeNotificationForTwilio()
    {
        return config('uptime-monitor.notifications.twilio.to');
    }

    public function getKey(): string
    {
        return static::class;
    }
}
