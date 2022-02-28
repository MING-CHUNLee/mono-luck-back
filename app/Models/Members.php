<?php

namespace App\Models;
use Database\Factories\MemberFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Members extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $primaryKey = 'member_id';
    protected $fillable = array('*');

    protected static function newFactory()
    {
        return MemberFactory::new();
    }
}
