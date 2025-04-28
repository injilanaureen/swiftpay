<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NavbarSeeder extends Seeder
{
    public function run()
    {
        // Inserting data for navbar items (main menu)
        DB::table('navbar_items')->insert([
            [
                'name' => 'Home',
                'url' => '/',
                'position' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Company',
                'url' => '#',
                'position' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Services',
                'url' => '#',
                'position' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Partnership',
                'url' => '#',
                'position' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Inserting data for navbar sub-items (dropdown items)
        DB::table('navbar_sub_items')->insert([
            [
                'name' => 'About Us',
                'url' => '/about',
                'position' => 1,
                'navbar_item_id' => 2, // Assuming "Company" is navbar item ID 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mission & Vision',
                'url' => '/mission-vision',
                'position' => 2,
                'navbar_item_id' => 2, // "Company" menu
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Contact',
                'url' => '/contact',
                'position' => 3,
                'navbar_item_id' => 2, // "Company" menu
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Payment Orchestration',
                'url' => '/services/payment-orchestration',
                'position' => 1,
                'navbar_item_id' => 3, // "Services" menu
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'White Label Solution',
                'url' => '/services/white-level-solution',
                'position' => 2,
                'navbar_item_id' => 3, // "Services" menu
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'UPI Solution',
                'url' => '/services/upi-solution',
                'position' => 3,
                'navbar_item_id' => 3, // "Services" menu
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Online Solution',
                'url' => '/services/online-solution',
                'position' => 4,
                'navbar_item_id' => 3, // "Services" menu
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Payment Gateway',
                'url' => '/services/payment-gateway',
                'position' => 5,
                'navbar_item_id' => 3, // "Services" menu
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Referral Partnership',
                'url' => '/partnership/referral-partnership',
                'position' => 1,
                'navbar_item_id' => 4, // "Partnership" menu
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PSP Partnership',
                'url' => '/partnership/psp-partnership',
                'position' => 2,
                'navbar_item_id' => 4, // "Partnership" menu
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
