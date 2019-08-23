<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		factory(App\User::class, 20)->create();
        // factory(App\User::class, 1)->create(['name' => 'Sonu', 'email' => 'sonu@sonu.com', 'password' => bcrypt('22222222'), 'email_verified_at' => now()]);

		// factory(App\Admin::class, 1)->create(['name' => 'Soltee', 'email' => 'soltee.13@gmail.com', 'password' => bcrypt('11111111'), 'email_verified_at' => now()]);
	        // $this->call(UsersTableSeeder::class);
    }
}
