<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualityAssuranceApplicant extends Model
{
    protected $guarded = [
        'id'
    ];
    public function job(){
        return $this->belongsto(QualityAssuranceJob::class, 'position_id');
    }
    use HasFactory;
}
