<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_name'
    ];

    protected $guarded = [
        'user_id'
    ];

    public function users(): BelongsToMany
    {
       return $this->belongsToMany(User::class, 'course_user', 'user_id', 'course_id');
    }
}
