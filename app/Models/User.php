<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /*
     * Defines Many-To-Many-Relationship to User.
     */
    public function companies()
    {
        return $this->belongsToMany('App\Models\Company', 'company_user', 'user_id', 'company_id')
            ->withTimestamps();
    }

    /*
     * Defines One-To-Many-Relationship to User.
     */
    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }
}
