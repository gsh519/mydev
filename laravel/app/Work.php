<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Work extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
