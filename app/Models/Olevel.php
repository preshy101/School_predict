<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Olevel extends Model
{
    use HasFactory;
      protected $guarded = [];

    public function user(): BelongsTo{
    return $this->belongsTo(User::class, 'id');
    }
}