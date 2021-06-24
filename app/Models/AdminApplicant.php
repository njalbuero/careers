<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminApplicant extends Model
{
    protected $guarded = [
        'id'
    ];
    public function job(){
        return $this->belongsto(AdminJob::class, 'position_id');
    }
    use HasFactory;
}
