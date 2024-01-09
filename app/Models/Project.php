<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'link_project',
        'language',
        'description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
