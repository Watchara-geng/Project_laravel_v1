<?php
use App\Models\User;
use App\Models\Source_data;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Source_data::create([
            'source_name'=> 'Scopus'
        ]);
        Source_data::create([
            'source_name'=> 'Web Of Science'
        ]);
        Source_data::create([
            'source_name'=> 'TCI'
        ]);
        User::create([
            'fname'=> 'Ngamnij',
            'lname'=> 'Arch-int',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'ngamnij@kku.ac.th',
            'password' => Hash::make('123456789'),
            'picture' => 'images/imag_teacher/Ngamnij.jpg',
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Chakchai',
            'lname'=> 'So-In',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'chakso@kku.ac.th',
            'password' => Hash::make('123456789'),
            'role' => 1,
            'picture' => 'images/imag_teacher/Chakchai.jpg',
        ]);
        User::create([
            'fname'=> 'Somjit',
            'lname'=> 'Arch-int',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'somjit@kku.ac.th',
            'picture' => 'images/imag_teacher/Somjit.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Chaiyapon',
            'lname'=> 'Keeratikasikorn',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'chaiyapon@kku.ac.th',
            'picture' => 'images/imag_teacher/Chaiyapon.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Punyaphol',
            'lname'=> 'Horata',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'punhor1@kku.ac.th',
            'picture' => 'images/imag_teacher/Punyaphol.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Sartra',
            'lname'=> 'Wongthanavasu',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'wongsar@kku.ac.th',
            'picture' => 'images/imag_teacher/Sartra.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Sirapat',
            'lname'=> 'Chiewchanwattana',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'sunkra@kku.ac.th',
            'picture' => 'images/imag_teacher/Sirapat.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Somjit',
            'lname'=> 'Arch-int',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'somjit@kku.ac.th',
            'picture' => 'images/imag_teacher/Somjit.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Khamron',
            'lname'=> 'Sunat',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'skhamron@kku.ac.th',
            'picture' => 'images/imag_teacher/Khamron.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Chitsutha',
            'lname'=> 'Soomlek',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'chitsutha@kku.ac.th',
            'picture' => 'images/imag_teacher/Chitsutha.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Nagon',
            'lname'=> 'Watanakij',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'nagon@kku.ac.th',
            'picture' => 'images/imag_teacher/Nagon.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Boonsup',
            'lname'=> 'Waikham',
            'aca_pos'=> 'Assoc.Prof.',
            'email' => 'nagon@kku.ac.th',
            'picture' => 'images/imag_teacher/Boonsup.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Paweena',
            'lname'=> 'Wanchai',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'wpaweena@kku.ac.th',
            'picture' => 'images/imag_teacher/Paweena.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Pipat',
            'lname'=> 'Reungsang',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'reungsang@kku.ac.th',
            'picture' => 'images/imag_teacher/Pipat.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Pusadee',
            'lname'=> 'Seresangtakul',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'pusadee@kku.ac.th',
            'picture' => 'images/imag_teacher/Pusadee.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Monlica',
            'lname'=> 'Wattana',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'monlwa@kku.ac.th',
            'picture' => 'images/imag_teacher/Monlica.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Wararat',
            'lname'=> 'Songpan',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'wararat@kku.ac.th',
            'picture' => 'images/imag_teacher/Wararat.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1

        ]);
        User::create([
            'fname'=> 'Sunti',
            'lname'=> 'Tintanai',
            'aca_pos'=> 'Assoc.Prof.',
            'email' => 'sunti@kku.ac.th',
            'picture' => 'images/imag_teacher/Sunti.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Saiyan',
            'lname'=> 'Saiyod',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'saiyan@kku.ac.th',
            'picture' => 'images/imag_teacher/Saiyan.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Silada',
            'lname'=> 'Kasemvilas',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'sumkas@kku.ac.th',
            'picture' => 'images/imag_teacher/Silada.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Urachart',
            'lname'=> 'Kokaew',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'urachart@kku.ac.th',
            'picture' => 'images/imag_teacher/Urachart.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Urawan',
            'lname'=> 'Chanket',
            'aca_pos'=> 'Assoc.Prof.Dr.',
            'email' => 'curawa@kku.ac.th',
            'picture' => 'images/imag_teacher/Urawan.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Phet',
            'lname'=> 'Aimtongkham',
            'aca_pos'=> 'Dr.',
            'email' => 'phetim@kku.ac.th',
            'picture' => 'images/imag_teacher/Phet.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);

        User::create([
            'fname'=> 'Wachirawut',
            'lname'=> 'Thamviset',
            'aca_pos'=> 'Dr.',
            'email' => 'twachi@kku.ac.th',
            'picture' => 'images/imag_teacher/Wachirawut.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Warunya',
            'lname'=> 'Wunnasri',
            'aca_pos'=> 'Dr.',
            'email' => 'waruwu@kku.ac.th',
            'picture' => 'images/imag_teacher/Warunya.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Rapassit',
            'lname'=> 'Chinnapatjee',
            'aca_pos'=> 'Dr.',
            'email' => 'rapassit@kku.ac.th',
            'picture' => 'images/imag_teacher/Rapassit.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Sakpod',
            'lname'=> 'Tongleamnak',
            'aca_pos'=> 'Dr.',
            'email' => 'sakpod@kku.ac.th',
            'picture' => 'images/imag_teacher/Sakpod.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Thanaphon',
            'lname'=> 'Tangchoopong',
            'aca_pos'=> 'Dr.',
            'email' => 'thanaphon@kku.ac.th',
            'picture' => 'images/imag_teacher/Thanaphon.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);

        User::create([
            'fname'=> 'Sarun',
            'lname'=> 'Apichontrakul',
            'aca_pos'=> 'Dr.',
            'email' => 'sarunap@kku.ac.th',
            'picture' => 'images/imag_teacher/Sarun.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Rasamee',
            'lname'=> 'Suwanwerakamtorn',
            'aca_pos'=> 'Assist.Prof.',
            'email' => 'rasamee@kku.ac.th',
            'picture' => 'images/imag_teacher/Rasamee.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Chanon',
            'lname'=> 'Dechsupa',
            'aca_pos'=> 'Dr.',
            'email' => ' chanode@kku.ac.th',
            'picture' => 'images/imag_teacher/Chanode.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);
        User::create([
            'fname'=> 'Praisan',
            'lname'=> 'Padungweang',
            'aca_pos'=> 'Dr.',
            'email' => 'praipa@kku.ac.th',
            'picture' => 'images/imag_teacher/Praipa.jpg',
            'password' => Hash::make('123456789'),
            'role' => 1
        ]);










    }
}
