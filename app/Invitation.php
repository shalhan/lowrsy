<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $table = 'invite';
    protected $fillable = [
        'id',
        'user_id',
        'display_name',
        'invitation_name',
        'image_display',
        'image_preview'
    ];
    public $timestamps = false;
}
