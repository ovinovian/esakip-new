<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class MenuGroup extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = ['name', 'status', 'permission_name', 'posision'];

    protected $casts = ['status' => 'boolean'];

    public function items()
    {
        return $this->hasMany(MenuItem::class);
    }
}
