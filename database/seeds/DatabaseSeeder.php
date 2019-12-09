<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 30)->create();
        factory(App\Admin::class)->create([
            'name' => "Administrator",
            'email' => "admin@admin.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        factory(App\Admin::class, 6)->create();
        // factory(App\User::class, 1)->create(['avatar' => 'saroj.jpg', 'name' => '', 'email' => 'saroj.gmail.com', 'email_verified_at' => now(), 'password' => bcrypt('11111111'), 'remember_token' => Str::random(10)]);
        // factory(App\User::class, 1)->create(['avatar' => 'hitler.jpg', 'name' => '', 'email' => 'hitler.gmail.com', 'email_verified_at' => now(), 'password' => bcrypt('11111111'), 'remember_token' => Str::random(10)]);
        // factory(App\User::class, 1)->create(['avatar' => 'rebecca.jpg', 'name' => '', 'email' => 'rebecca.gmail.com', 'email_verified_at' => now(), 'password' => bcrypt('11111111'), 'remember_token' => Str::random(10)]);
        // factory(App\User::class, 1)->create(['avatar' => 'hari.jpg', 'name' => '', 'email' => 'hari.gmail.com', 'email_verified_at' => now(), 'password' => bcrypt('11111111'), 'remember_token' => Str::random(10)]);
        // factory(App\User::class, 1)->create(['name' => 'Sonu', 'email' => 'sonu@sonu.com', 'password' => bcrypt('22222222'), 'email_verified_at' => now()]);

		// factory(App\Admin::class, 1)->create(['name' => 'Soltee', 'email' => 'soltee.13@gmail.com', 'password' => bcrypt('11111111'), 'email_verified_at' => now()]);
	        // $this->call(UsersTableSeeder::class);
    }
}
