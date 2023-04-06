<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\School;
use App\Models\cuttOff;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Department extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function dept(): BelongsTo{
    return $this->belongsTo(School::class, 'id');
    }
    public function cuttOff():HasOne {
    return $this->hasOne(cuttOff::class, 'dept_id');
  }
}