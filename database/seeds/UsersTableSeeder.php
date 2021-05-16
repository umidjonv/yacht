<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();

        $user->name =  str_random(10);
        $user->email = str_random(10).'@gmail.com';
        $user->password = bcrypt('123456');

        if($user->save())
        {
            $member = new \App\Models\Member();
            $member->UserId = $user->id;
            $member->WithdrawalDescription = "";
            $member->MembershipStatus = false;
            $member->CurrentPoint = random_int(10, 25000);
            $member->AccumulatedPoint = random_int(10, 25000);
            $member->ReservationsCount = random_int(1, 100);
            $member->ReservationsCount = '2021-05-'+random_int(1, 30)+' 11:'+random_int(1, 59)+'';

            $member->save();

        }



//        DB::table('users')->insert([
//            'name' => str_random(10),
//            'email' => str_random(10).'@gmail.com',
//            'password' => bcrypt('123456'),
//        ]);


    }
}
