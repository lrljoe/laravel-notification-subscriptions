<?php

namespace LiranCo\NotificationSubscriptions\Traits;

use LiranCo\NotificationSubscriptions\Models\NotificationSubscription;

trait HasNotificationSubscriptions
{
    public function notificationSubscribers()
    {
        return $this->morphMany(NotificationSubscription::class, 'notifiable');
    }
} return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');

