<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'user_id'
    ];

    public function colorPalettes()
    {
        return $this->hasMany(ColorPalette::class);
    }
    public function palettes()
{
    return $this->hasMany(\App\Models\ColorPalette::class, 'collection_id');
}

}