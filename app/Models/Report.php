<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'action',
        'file_id',
        'user_id',
    ];
    /**
     * relations
     */
    public function file()
    {
        return $this->hasOne(File::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
