<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $casts = [

        'tags' => 'array'
        
    ];
    
    public function projects(){

        return $this->belongsToMany(Project::class);

    }
}
