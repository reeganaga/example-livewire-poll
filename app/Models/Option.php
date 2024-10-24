<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Option extends Model
{
    public function votes() : HasMany
    {
        return $this->hasMany(Vote::class);
    }

    public function poll() : BelongsTo
    {
        return $this->belongsTo(Poll::class);
    }
}
