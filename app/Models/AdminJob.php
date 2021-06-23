<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminJob extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function department(){
        return $this->belongsto(Department::class);
    }
    public function applicants(){
        return $this->hasMany(AdminApplicant::class, 'position_id');
    }
}
