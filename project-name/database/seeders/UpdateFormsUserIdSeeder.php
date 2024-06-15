<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateFormsUserIdSeeder extends Seeder
{
    public function run()
    {
        // Assuming you want to set user_id to 1 for all existing forms
        DB::table('forms')->whereNull('user_id')->update(['user_id' => 1]);
    }
}
