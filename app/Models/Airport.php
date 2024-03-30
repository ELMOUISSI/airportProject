<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class airport extends Model
{
    use HasFactory;

    public function volsDepart()
    {
        return $this->hasMAny(vole::class,'airport_depart_id');
    }
}
