<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $fillable = ['user_id','title','url','description','status','dateadd'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
