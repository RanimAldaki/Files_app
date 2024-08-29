<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_name',
        'create_date',
        'end_date',
        'path',
        'reservation',
        'report_id'
    ];
    /**
     * relations
     */
    public function groupFiles()
    {
        return $this->hasMany(GroupFile::class);
    }
    public function report()
    {
        return $this->hasOne(Report::class);
    }
}
