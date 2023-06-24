<?php

namespace App\Models;

use App\Models\Donation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlumArea extends Model
{
    use HasFactory;
    protected $table = 'slum_areas';
    protected $fillable = [
        'name',
        'address',
    ];

    public function donation()
    {
        return $this->hasMany(Donation::class);
    }
}
