<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registion extends Model
{
    use HasFactory;
    protected $table = 'registrations';
    protected $primaryKey = 'id';
    protected $fillable = array('*');

    public function member()
    {
        return $this->hasOne( 'App\Models\Member', 'memberId');
    }
    


}
