<?php

namespace App\Models;
use Database\Factories\MemberFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Member extends Model
{
    const UPDATED_AT = 'updatedAt';
    const CREATED_AT = 'createdAt';
    use HasFactory;
    protected $table = 'members';
    protected $primaryKey = 'id';
    protected $fillable = array('*');

    protected static function newFactory()
    {
        return MemberFactory::new();
    }
}
