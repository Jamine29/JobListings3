<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =[
        'title',
        'description',
        'company_id'
    ];

    /*
     * Defines One-To-Many-Relationship to Company.
     */
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
