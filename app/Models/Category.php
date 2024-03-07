<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function event()
    {
        $this->belongsTo(Event::class, );
    }
}