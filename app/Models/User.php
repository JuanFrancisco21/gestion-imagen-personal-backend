<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyemail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'dni',
        'rol',
        'course_year',
        'cycle',
        'name',
        'surname',
        'email',
        'password',
        'others',
    ];
      /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function photoUrls()
    {
        return $this->morphMany(PhotoUrl::class, 'imageable');
    }
}
