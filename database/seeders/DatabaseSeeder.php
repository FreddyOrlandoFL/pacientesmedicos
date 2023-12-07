<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PatientDatabaseSeeder::class);
        $this->call(DiagnosticDatabaseSeeder::class);
        $this->call(AssingDiagnosticDatabaseSeeder::class);
        
    }
}
