<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registions extends Model
{
    use HasFactory;
    protected $table = 'registions';
    protected $primaryKey = 'id';

    public function member()
    {
        return $this->hasMany( 'App\Models\Members', 'member_id');
    }
    
    public function locker()
    {
        return $this->hasMany( 'App\Models\Locker', 'locker_id');
    }

}
