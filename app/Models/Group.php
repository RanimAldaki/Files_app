<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'group_name'
    ];
    /**
     * relations
     */
    public function groupUsers()
    {
        return $this->hasMany(GroupUser::class);
    }
    public function groupFiles()
    {
        return $this->hasMany(GroupFile::class);
    }
}
