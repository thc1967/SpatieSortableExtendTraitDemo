<?php

namespace App\Traits;

use Spatie\Activitylog\Traits\LogsActivity as SpatieLogsActivity;

trait LogsActivity
{
    use SpatieLogsActivity;

    /**
     * Log only changed properties
     *
     * @var boolean
     */
    protected static $logOnlyDirty = true;

    /**
     * The custom log name for the model
     *
     * @param string $eventName
     * @return string
     */
    public function getLogNameToUse(string $eventName = ''): string
    {
        return str_plural(strtolower(class_basename($this)));
    }
}
