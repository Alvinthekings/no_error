<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sanction;

class SanctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing sanctions
        Sanction::truncate();

        // Minor Offense Sanctions
        Sanction::create([
            'severity' => 'minor',
            'major_category' => null,
            'offense_count' => 1,
            'sanction_type' => 'Verbal reprimand / warning',
            'description' => 'First offense for minor violation - Verbal reprimand or warning',
        ]);

        Sanction::create([
            'severity' => 'minor',
            'major_category' => null,
            'offense_count' => 2,
            'sanction_type' => 'Written warning',
            'description' => 'Second offense for minor violation - Written warning',
        ]);

        Sanction::create([
            'severity' => 'minor',
            'major_category' => null,
            'offense_count' => 3,
            'sanction_type' => 'One step lower in the Deportment Grade',
            'description' => 'Third offense for minor violation - One step lower in the Deportment Grade',
        ]);

        // Major Offense Sanctions - Category 1
        Sanction::create([
            'severity' => 'major',
            'major_category' => 'Category 1',
            'offense_count' => 1,
            'sanction_type' => 'One step lower in the Deportment Grade, CS',
            'description' => 'First offense for major violation Category 1 - One step lower in the Deportment Grade, Community Service',
        ]);

        Sanction::create([
            'severity' => 'major',
            'major_category' => 'Category 1',
            'offense_count' => 2,
            'sanction_type' => 'NI in Deportment, 3-5 days suspension, CS',
            'description' => 'Second offense for major violation Category 1 - Needs Improvement in Deportment, 3-5 days suspension, Community Service',
        ]);

        Sanction::create([
            'severity' => 'major',
            'major_category' => 'Category 1',
            'offense_count' => 3,
            'sanction_type' => 'NI in Deportment, Dismissal or Expulsion',
            'description' => 'Third offense for major violation Category 1 - Needs Improvement in Deportment, Dismissal or Expulsion',
        ]);

        // Major Offense Sanctions - Category 2
        Sanction::create([
            'severity' => 'major',
            'major_category' => 'Category 2',
            'offense_count' => 1,
            'sanction_type' => 'One step lower in the Deportment Grade, CS',
            'description' => 'First offense for major violation Category 2 - One step lower in the Deportment Grade, Community Service',
        ]);

        Sanction::create([
            'severity' => 'major',
            'major_category' => 'Category 2',
            'offense_count' => 2,
            'sanction_type' => 'NI in Deportment, 3-5 days suspension, CS',
            'description' => 'Second offense for major violation Category 2 - Needs Improvement in Deportment, 3-5 days suspension, Community Service',
        ]);

        Sanction::create([
            'severity' => 'major',
            'major_category' => 'Category 2',
            'offense_count' => 3,
            'sanction_type' => 'NI in Deportment, Dismissal or Expulsion',
            'description' => 'Third offense for major violation Category 2 - Needs Improvement in Deportment, Dismissal or Expulsion',
        ]);

        // Major Offense Sanctions - Category 3
        Sanction::create([
            'severity' => 'major',
            'major_category' => 'Category 3',
            'offense_count' => 1,
            'sanction_type' => 'One step lower in the Deportment Grade, CS',
            'description' => 'First offense for major violation Category 3 - One step lower in the Deportment Grade, Community Service',
        ]);

        Sanction::create([
            'severity' => 'major',
            'major_category' => 'Category 3',
            'offense_count' => 2,
            'sanction_type' => 'NI in Deportment, 3-5 days suspension, CS',
            'description' => 'Second offense for major violation Category 3 - Needs Improvement in Deportment, 3-5 days suspension, Community Service',
        ]);

        Sanction::create([
            'severity' => 'major',
            'major_category' => 'Category 3',
            'offense_count' => 3,
            'sanction_type' => 'NI in Deportment, Dismissal or Expulsion',
            'description' => 'Third offense for major violation Category 3 - Needs Improvement in Deportment, Dismissal or Expulsion',
        ]);
    }
}
