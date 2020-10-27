<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /*
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'address',
        'email'
    ];

    /*
     * Defines validation rules.
     */
    public static function validationRules(): array
    {
        return [
            'name' => 'required|string|min:1|max:150',
            'description' => 'required|string|min:1|max:250',
            'address' => 'required|string|min:1|max:150',
            'email' => 'required|email'
        ];
    }

    /*
     * Defines One-To-Many-Relationship to Job.
     */
    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }

    /*
     * Defines Many-To-Many-Relationship to User.
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User')
                ->withTimestamps()
                ->withPivot(['isManager'])
                ->as('company_user');
    }

    /*
     * Get all Managers of the Company
     */
    public function managers()
    {
        return $this->belongsToMany('App\Models\User')
                        ->withPivot(['isManager'])
                        ->where('isManager', 1);
    }
}
