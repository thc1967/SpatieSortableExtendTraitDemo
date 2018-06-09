<?php

namespace App;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;
// use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Widget extends Model implements Sortable
{
    use LogsActivity, SoftDeletes, SortableTrait;

    /**
     * Control over the Sortable trait
     *
     * @var array
     */
    public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
    ];

    /**
     * The attributes to log when changing the model
     *
     * @var array
     */
    protected static $logAttributes = [
        'name', 'sort_order',
    ];
}
