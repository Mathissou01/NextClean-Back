<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $fillable = ['campus_id', 'start_time', 'end_time'];


    /**
     * Get the campus that hosts the session.
     */
    public function campus()
    {
        return $this->belongsTo(Campus::class, 'campus_id');
    }

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];
}
