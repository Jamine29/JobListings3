<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $company = \App\Models\Company::inRandomOrder()->first();
        $user = $company->users()->inRandomOrder()->first();

        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->realText($maxNbChars = 250, $indexSize = 2),
            'company_id' => $company,
            'user_id' => $user
        ];
    }
}
