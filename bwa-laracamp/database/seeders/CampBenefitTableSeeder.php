<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits =[
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit',

            ],
            [
                'camp_id' => 1,
                'name' => 'iMac Pro 2021 & Display',

            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Certifiacate',

            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project Certificate',

            ],

            ];

            foreach ($campBenefits as $key => $campb) {
                CampBenefit::create($campb);
            }
    }
}
