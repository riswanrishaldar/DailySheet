<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'date',
    'id',
    'chat_count',
    'batch',
    'call',
    'call_connected',
    'task_assigned',
    'webinar',
    'live_class',
    'status',
    'self_learning'

    ];
}
