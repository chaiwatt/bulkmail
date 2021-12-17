<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'กนกนันทร์ สุเชาว์อินทร์',
                'email' => 'ttrsuser1@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'จาริยา รัชตาธิวัฒน์',
                'email' => 'ttrsuser2@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'อนุรักษ์ พันธ์งามตา',
                'email' => 'ttrsuser3@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'พงศกร สุขปาน',
                'email' => 'ttrsuser4@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'พนิตา สุภาพ',
                'email' => 'ttrsuser5@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'มินตรา รักการดี',
                'email' => 'ttrsuser6@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'สายธาร สวนจันทร์',
                'email' => 'ttrsuser7@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'จิตราพร ทองค',
                'email' => 'ttrsofficer1@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'เฉลิมเดช ประพิณไพโรจน์',
                'email' => 'ttrsofficer2@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'ณภัทร เครือทิวา',
                'email' => 'ttrsofficer3@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'ณัฏฐา สุภาสนันท์ ',
                'email' => 'ttrsofficer4@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'ณัฐพงษ์ ธนโชติเจริญ์',
                'email' => 'ttrsofficer5@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'ศรัณย์ ศิริกําเนิด',
                'email' => 'ttrsofficer6@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'สุดคนึง แววสูงเนิน',
                'email' => 'ttrsofficer7@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'สุภัทร สวนจันทร์',
                'email' => 'ttrsofficer8@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'อรุณี มัทนะไพศาล',
                'email' => 'ttrsofficer9@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'อาวัชนา สุขรุ่งเรือง',
                'email' => 'ttrsofficer10@npcsolution.com',     
                'password' => Hash::make('11111111'), 
            ]
        ]);
    }
}
