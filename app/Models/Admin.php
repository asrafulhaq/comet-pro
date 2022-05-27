<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function humayon()
    {
        return $this -> belongsTo(Role::class, 'role_id', 'id'); 
    }

    
}
