<?php

namespace App\Models;
use Database\Factories\LockerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locker extends Model
{
    use HasFactory;
    protected $table = 'lockers';
    protected $primaryKey = 'locker_id';
    protected $fillable = array('*');
    protected static function newFactory()
    {
        return LockerFactory::new();
    }

    public function member()
    {
        return $this->hasOne( 'App\Models\Members', 'user_id');
    }

    
}
