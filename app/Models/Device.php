<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'operating_system_id', 'device_name'];

    public function operating_system()
    {
        return $this->belongsTo(OperatingSystem::class);
    }
}
