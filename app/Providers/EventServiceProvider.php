<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Modules\Booking\Events\EnquirySendEvent;
use Modules\Booking\Listeners\EnquiryNotifyListen;
use Modules\Booking\Listeners\EnquirySendListen;
use Modules\User\Events\NewVendorRegistered;
use Modules\User\Events\SendMailUserRegistered;
use Modules\User\Events\VendorApproved;
use Modules\User\Listeners\SendMailUserRegisteredListen;
use Modules\User\Listeners\SendNotifyApproved;
use Modules\User\Listeners\SendNotifyRegistered;
use Modules\User\Listeners\SendNotifyRegisteredListen;
use Modules\User\Listeners\SendVendorApprovedMail;
use Modules\User\Listeners\SendVendorRegisterdEmail;
use Modules\Vendor\Events\PayoutRequestEvent;
use Modules\Vendor\Listeners\PayoutNotifyListener;
use Modules\Vendor\Listeners\PayoutRequestNotificationListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        
        SendMailUserRegistered::class => [
            SendMailUserRegisteredListen::class,
            SendNotifyRegisteredListen::class
        ],
        VendorApproved::class=>[
            SendVendorApprovedMail::class,
            SendNotifyApproved::class
        ],
        NewVendorRegistered::class=>[
            SendVendorRegisterdEmail::class,
            SendNotifyRegistered::class
        ],
//        VendorLogPayment::class =>[
//            VendorLogPaymentListen::class
//        ]
        PayoutRequestEvent::class=>[
            PayoutRequestNotificationListener::class,
            PayoutNotifyListener::class
        ],
        EnquirySendEvent::class=>[
            EnquirySendListen::class,
            EnquiryNotifyListen::class
        ]
        
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
