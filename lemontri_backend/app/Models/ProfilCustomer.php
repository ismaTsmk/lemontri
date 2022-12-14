<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilCustomer extends Model
{
    use HasFactory;

    
    public function consigns()
    {
        return $this->belongsToMany('App\Models\Consign',"consign_profil_customer");
    }
}
