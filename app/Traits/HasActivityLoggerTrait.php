<?php

namespace App\Traits;

use Spatie\Activitylog\Support\LogOptions;
use Spatie\Activitylog\Models\Concerns\LogsActivity;
 
trait HasActivityLoggerTrait
{
    use LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logAll()
            ->logOnlyDirty()
            ->dontLogEmptyChanges()
            ->useLogName(class_basename($this))
            ->setDescriptionForEvent(
                fn (string $eventName) => sprintf(
                    '%s %s',
                    class_basename($this),
                    $eventName
                )
            );
    }
}
