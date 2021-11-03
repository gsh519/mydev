<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Work extends Model
{
    protected $fillable = [
        'title',
        'summary',
        'body',
        'service_url',
        'twitter_check',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
