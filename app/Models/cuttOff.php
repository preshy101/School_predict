<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class cuttOff extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function dept(): BelongsTo{
    return $this->belongsTo(Department::class, 'id');
    }
}