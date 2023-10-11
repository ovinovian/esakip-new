<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class MenuItem extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = ['name', 'icon', 'route', 'status', 'permission_name', 'menu_group_id', 'posision'];

    protected $casts = ['status' => 'boolean'];
}
