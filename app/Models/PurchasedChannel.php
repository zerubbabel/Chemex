<?php

namespace App\Models;

use App\Traits\HasCreator;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static where(string $string, string $value)
 * @property string name
 */
class PurchasedChannel extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;
    use HasCreator;

    protected $table = 'purchased_channels';

    protected static function booted()
    {
        static::saving(function ($model) {
            self::hasCreator($model);
        });
    }

}
