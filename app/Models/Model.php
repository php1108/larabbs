<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Spatie\Permission\Traits\HasRoles;

class Model extends EloquentModel
{
    use HasRoles;
    public function scopeRecent($query)
    {
        return $query->orderBy('id', 'desc');
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'desc');
    }

}
