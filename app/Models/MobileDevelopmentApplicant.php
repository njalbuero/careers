<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileDevelopmentApplicant extends Model
{
    protected $guarded = [
        'id'
    ];
    public function job(){
        return $this->belongsto(MobileDevelopmentJob::class, 'position_id');
    }
    use HasFactory;
}
