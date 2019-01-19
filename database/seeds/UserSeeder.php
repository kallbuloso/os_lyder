<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $user = new \App\Models\User();
        $date = Carbon::create(2018, 7, 18, 9);
        $faker =  Faker::create('pt_BR');
        $qntd = '20';

        $user->create([
            'cnpj_cpf' => 30780630890,
            'name' => $faker->name,
            'nik_name' => $faker->userName,
            'contact' => $faker->firstName,
            'rg_ie' => $faker->rg,
            'im' => $faker->rg(false),
            'phone' => $faker->areaCode . $faker->phone(false),
            'celphone' => $faker->areaCode . $faker->cellphone(false),
            'address' => $faker->streetName,
            'neighborhood' => $faker->citySuffix,
            'city' => $faker->city,
            'state' => $faker->state,
            'number' => $faker->buildingNumber,
            'zipcode' => $faker->postcode,
            'complement' => $faker->secondaryAddress,
            'email' => 'admin@admin.com',
            'email_verified_at' => $date,
            'site' => $faker->url,
            'password' => bcrypt('123456'),
        ]);
        
        $user->create([
            'cnpj_cpf' => 14445751000126,
            'name' => $faker->name,
            'nik_name' => $faker->userName,
            'contact' => $faker->firstName,
            'rg_ie' => $faker->rg,
            'im' => $faker->rg(false),
            'phone' => $faker->areaCode . $faker->phone(false),
            'celphone' => $faker->areaCode . $faker->cellphone(false),
            'address' => $faker->streetName,
            'neighborhood' => $faker->citySuffix,
            'city' => $faker->city,
            'state' => $faker->state,
            'number' => $faker->buildingNumber,
            'zipcode' => $faker->postcode,
            'complement' => $faker->secondaryAddress,
            'email' => 'adm@adm.com',
            'email_verified_at' => $date,
            'site' => $faker->url,
            'password' => bcrypt('123456'),
        ]);
        
        for ($i=2; $i <$qntd ; $i++) {
            $user->create([
                'cnpj_cpf' => rand(0, 1) == 1 ? $faker->cpf(false) : $faker->cnpj(false),
                'name' => $faker->name,
                'nik_name' => $faker->userName,
                'contact' => $faker->firstName,
                'rg_ie' => $faker->rg,
                'im' => $faker->rg(false),
                'phone' => $faker->areaCode . $faker->phone(false),
                'celphone' => $faker->areaCode . $faker->cellphone(false),
                'address' => $faker->streetName,
                'neighborhood' => $faker->citySuffix,
                'city' => $faker->city,
                'state' => $faker->state,
                'number' => $faker->buildingNumber,
                'zipcode' => $faker->postcode,
                'complement' => $faker->secondaryAddress,
                'email' => $faker->email,
                'email_verified_at' => $date,
                'site' => $faker->url,
                'status' => $faker->boolean,
                'password' => bcrypt('123456'),
            ]);
        }


    }
}
