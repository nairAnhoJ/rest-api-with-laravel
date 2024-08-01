<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            'Human Resources',
            'Finance',
            'IT',
            'Marketing',
            'Sales',
            'Customer Service',
            'Research and Development',
            'Operations',
            'Legal',
            'Procurement'
        ];

        foreach ($departments as $department) {
            $newDepartment = new Department();
            $newDepartment->name = $department;
            $newDepartment->save();
        }
    }
}
