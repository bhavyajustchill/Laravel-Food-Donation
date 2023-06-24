<?php

namespace App\Models;

use App\Models\SlumArea;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $table = 'donations';
    protected $fillable = [
        'name',
        'img',
        'qty',
        'user_id',
        'slum_area_id',
        'status',
    ];

    public function slum_area()
    {
        return $this->belongsTo(SlumArea::class, 'slum_area_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
