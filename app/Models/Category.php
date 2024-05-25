<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query)
    {
        if(request('search')) {
           return $query->where('name', 'like', '%' . request('search') . '%');
        }
    }

    public function foods()
    {
        return $this->hasMany(Food::class);
    }

    
}
