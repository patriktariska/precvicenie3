<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <10; $i++){
            DB::table('users')->insert([
                'fname' => str_random(3),
                'lname' => str_random(3),
                'email' => str_random(3)."@mail.sk",
                'age' => mt_rand(18, 80),
            ]);
        }
    }
}
