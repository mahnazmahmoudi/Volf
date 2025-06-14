<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'admin_id',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
