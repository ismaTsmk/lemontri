<?php

namespace App\Models;

use App\Models\Cycle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consign extends Model
{
    use HasFactory;



    public function cycle(){
        return $this->belongsTo(Cycle::class);
    }
}
