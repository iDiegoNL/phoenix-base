<?php

namespace App\Providers;

use App\Listeners\SendAchievementUnlockedNotification;
use App\Models\Download as DownloadModel;
use App\Models\Screenshot as ScreenshotModel;
use App\Observers\DownloadObserver;
use App\Models\Job as JobModel;
use App\Observers\JobObserver;
use App\Observers\ScreenshotObserver;
use Assada\Achievements\Event\Unlocked as UnlockedAchievement;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use SocialiteProviders\Manager\SocialiteWasCalled;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        SocialiteWasCalled::class => [
            'SocialiteProviders\\Discord\\DiscordExtendSocialite@handle',
        ],
        UnlockedAchievement::class => [
            SendAchievementUnlockedNotification::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        JobModel::observe(JobObserver::class);
        DownloadModel::observe(DownloadObserver::class);
        ScreenshotModel::observe(ScreenshotObserver::class);
    }
}
