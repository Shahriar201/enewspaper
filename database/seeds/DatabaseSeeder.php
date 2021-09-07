<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Model\Category;
use App\Model\Division;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        // factory(App\User::class, 3)->make();
        factory(App\Model\Category::class, 30)->create();
        factory(App\Model\Post::class, 30)->create();

        //Create user
        $user = new User();
        $user->name = 'Shahriar Islam';
        $user->email = 'shahriar@gmail.com';
        $user->email_verified_at = now();
        $user->password = Hash::make('12345678');
        $user->remember_token = Str::random(10);
        $user->save();

        //Create Divisions
        $data = [
            ['name_bn' => 'চট্টগ্রাম', 'status' => 0 ,'name_en' => 'Chattogram'],
            ['name_bn' => 'রাজশাহী', 'status' => 0 ,'name_en' => 'Rajshahi'],
            ['name_bn' => 'খুলনা', 'status' => 0 ,'name_en' => 'Khulna'],
            ['name_bn' => 'বরিশাল', 'status' => 0 ,'name_en' => 'Barishal'],
            ['name_bn' => 'সিলেট', 'status' => 0 ,'name_en' => 'Sylhet'],
            ['name_bn' => 'ঢাকা', 'status' => 0 ,'name_en' => 'Dhaka'],
            ['name_bn' => 'রংপুর', 'status' => 0 ,'name_en' => 'Rangpur'],
            ['name_bn' => 'ময়মনসিংহ', 'status' => 0 ,'name_en' => 'Mymensingh'],
        ];

        DB::table('districts')->insert($data);
    }
    
}
