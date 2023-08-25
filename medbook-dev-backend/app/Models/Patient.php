<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'gender_id', 'date_of_birth'];

    public function gender() {
        return $this->belongsTo(Gender::class);
    }

    public function services() {
        return $this->belongsToMany(Service::class, 'patient_services')
            ->withPivot('date');
    }
}
