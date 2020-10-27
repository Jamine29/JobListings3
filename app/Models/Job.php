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
        'company_id',
        'user_id'
    ];

    /*
     * Defines validation rules.
     */

    public static function validationRules(): array
    {
        return [
            'title' => 'required|string|min:2|max:150',
            'description' => 'required|string|min:2|max:250',
            'companyId' => 'required|integer'
        ];
    }

    /*
     * Defines one-to-many-relationship to company.
     */
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    /*
     * Defines one-to-many-relationship to user.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
