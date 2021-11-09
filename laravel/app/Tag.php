<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    protected $fillable = [
        'tag_name',
    ];

    public function getHashtagAttribute(): string
    {
        return '#' . $this->tag_name;
    }

    public function works(): BelongsToMany
    {
        return $this->belongsToMany('App\Work', 'work_tag')->withTimestamps();
    }
}
