<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    public const STATUS_NEW = 'new';
    public const STATUS_DONE = 'done';

    protected $fillable = [
        'title',
        'user_id'
    ];

    public function new(){
        return static::where('status', self::STATUS_NEW);
    }

    public function done(){
        return static::where('status', self::STATUS_DONE);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }

}
