<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany('App\Tag', 'work_tag')->withTimestamps();
    }
}
