<?php

namespace Database\Factories;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeesFactory extends Factory
{
    protected $model = Employees::class;

    public function definition(): array
    {
    	return [
    	    'id' => null,
    	    'name' => $this->faker->name,
    	];
    }
}
