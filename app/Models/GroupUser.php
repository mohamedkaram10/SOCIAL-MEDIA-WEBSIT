<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    use HasFactory;

    public const UPDATED_AT = null;

    protected $fillable = [
        'status',
        'role',
        'group_id',
        'user_id',
        'created_by',
    ];
}
