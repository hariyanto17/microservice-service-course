<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';

    protected $fillable = [
        'name', 'certificate', 'thumbnail', 'type', 'status',
        'price', 'level', 'description', 'mentors_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:y-m-d H:m:s',
        'updated_at' => 'datetime:y-m-d H:m:s'
    ];


    public function mentor()
    {
        return $this->belongsTo('App\Mentor');
    }

    public function chapters()
    {
        return $this->hasMany('App\Chapter')->orderBy('id', 'ASC');
    }

    public function images()
    {
        return $this->hasMany('App\ImageCourse')->orderBy('id', 'DESC');
    }
}
