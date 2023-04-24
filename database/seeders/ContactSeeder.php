<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'address' => "<h3>Buttonwood, California.</h3>
                        <p>Rosemead, CA 91770</p>",
            'phone' => "<h3>+1 253 565 2365</h3>
                        <p>Mon to Fri 9am to 6pm</p>",
            'email' => "<h3>support@colorlib.com</h3>
                        <p>Send us your query anytime!</p>",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
