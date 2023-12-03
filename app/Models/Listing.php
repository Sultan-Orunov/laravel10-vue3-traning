<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'listings';
    protected $guarded = false;

    public function owner(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
