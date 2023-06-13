<?php

namespace App\Models\Registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    use HasFactory;
    protected $table = 't_role_master';
    protected $fillable = [
        'name',
        'status',
        'updated_by',
        'updated_at',
        'created_at',
        'created_by',
    ];
}
