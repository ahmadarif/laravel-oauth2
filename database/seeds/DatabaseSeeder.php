<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Ahmad Arif';
        $user->email = 'ahmad.arif019@gmail.com';
        $user->password = bcrypt('123');
        $user->save();

        DB::table('oauth_clients')->insert([
            'name' => 'mobileapps',
            'secret' => '0EbHHHt6o7vTdi0ssRe6VLtOcfRYdkXsmVqjPhL5',
            'redirect' => 'http://localhost',
            'personal_access_client' => 0,
            'password_client' => 1,
            'revoked' => 0
        ]);
    }
}
