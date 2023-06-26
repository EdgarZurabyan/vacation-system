<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    protected $fillable = ['start_date', 'end_date', 'recorded'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}


