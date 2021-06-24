<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileDevelopmentJob extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];

    public function department(){
        return $this->belongsto(Department::class);
    }
    public function applicants(){
        return $this->hasMany(MobileDevelopmentApplicant::class, 'position_id');
    }
}
