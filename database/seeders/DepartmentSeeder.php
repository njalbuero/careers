<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'slug' => "web_development",
            'name' => "Web Development",
        ]);
        DB::table('departments')->insert([
            'slug' => "mobile_development",
            'name' => "Mobile Development",
        ]);
        DB::table('departments')->insert([
            'slug' => "quality_assurance",
            'name' => "Quality Assurance",
        ]);
        DB::table('departments')->insert([
            'slug' => "graphics",
            'name' => "Graphics",
        ]);
        DB::table('departments')->insert([
            'slug' => "accounting",
            'name' => "Accounting",
        ]);
        DB::table('departments')->insert([
            'slug' => "admin",
            'name' => "Admin",
        ]);
        DB::table('departments')->insert([
            'slug' => "sales",
            'name' => "Sales",
        ]);
    }
}
