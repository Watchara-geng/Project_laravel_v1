<?php
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'fname'=> 'Ngamnij',
            'lname'=> 'Arch-int',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'ngamnij@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Chakchai',
            'lname'=> 'So-In',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'chakso@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Chaiyapon',
            'lname'=> 'Keeratikasikorn',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'chaiyapon@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Punyaphol',
            'lname'=> 'Horata',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'punhor1@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Sartra',
            'lname'=> 'Wongthanavasu',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'wongsar@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Sirapat',
            'lname'=> 'Chiewchanwattana',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'sunkra@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Somjit',
            'lname'=> 'Arch-int',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'somjit@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Khamron',
            'lname'=> 'Sunat',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'skhamron@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Chitsutha',
            'lname'=> 'Soomlek',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'chitsutha@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Nagon',
            'lname'=> 'Watanakij',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'nagon@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Boonsup',
            'lname'=> 'Waikham',
            'aca_pos'=> 'Assoc.Prof.',
            'email' => 'nagon@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Paweena',
            'lname'=> 'Wanchai',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'wpaweena@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Pipat',
            'lname'=> 'Reungsang',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'reungsang@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Pusadee',
            'lname'=> 'Seresangtakul',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'pusadee@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Monlica',
            'lname'=> 'Wattana',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'monlwa@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Wararat',
            'lname'=> 'Songpan',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'wararat@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Sunti',
            'lname'=> 'Tintanai',
            'aca_pos'=> 'Assoc.Prof.',
            'email' => 'sunti@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Saiyan',
            'lname'=> 'Saiyod',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'saiyan@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Silada',
            'lname'=> 'Kasemvilas',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'sumkas@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Urachart',
            'lname'=> 'Kokaew',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'urachart@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Urawan',
            'lname'=> 'Chanket',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'curawa@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Phet',
            'lname'=> 'Aimtongkham',
            'aca_pos'=> 'Dr.',
            'email' => 'phetim@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);

        User::create([
            'fname'=> 'Wachirawut',
            'lname'=> 'Thamviset',
            'aca_pos'=> 'Dr.',
            'email' => 'twachi@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Warunya',
            'lname'=> 'Wunnasri',
            'aca_pos'=> 'Dr.',
            'email' => 'waruwu@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Rapassit',
            'lname'=> 'Chinnapatjee',
            'aca_pos'=> 'Dr.',
            'email' => 'rapassit@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Sakpod',
            'lname'=> 'Tongleamnak',
            'aca_pos'=> 'Dr.',
            'email' => 'sakpod@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Thanaphon',
            'lname'=> 'Tangchoopong',
            'aca_pos'=> 'Dr.',
            'email' => 'thanaphon@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Sakpod',
            'lname'=> 'Tongleamnak',
            'aca_pos'=> 'Dr.',
            'email' => 'rapassit@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Sarun',
            'lname'=> 'Apichontrakul',
            'aca_pos'=> 'Dr.',
            'email' => 'sarunap@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Rasamee',
            'lname'=> 'Suwanwerakamtorn',
            'aca_pos'=> 'Assist.Prof.',
            'email' => 'rasamee@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Chanon',
            'lname'=> 'Dechsupa',
            'aca_pos'=> 'Dr.',
            'email' => ' chanode@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Praisan',
            'lname'=> 'Padungweang',
            'aca_pos'=> 'Dr.',
            'email' => 'praipa@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);










    }
}
