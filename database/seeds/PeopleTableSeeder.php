<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();
        $date->subDays(-1);

        DB::table('people')->truncate();
        $faker =  Faker::create(str_replace('-', '_', app()->getLocale()));
        $person = new \Modules\Cadastros\Models\Person();
        $client = new \Modules\Cadastros\Models\Client();
        $qntd = '4030';
        for ($i=0; $i <$qntd ; $i++) {
            $type = rand(0,1);
            $date->subDays(1);
            $person->create([
                'type_persona'=>rand(0,2),
                'persona'=>$type,
                'carrying'=>$faker->boolean,
                'name'=>$faker->name,
                'nik_name'=>$faker->userName,
                'contact'=>$faker->firstName,
                'cnpj_cpf'=>$type == 0 ? $faker->cpf : $faker->cnpj,
                'rg_ie' => $faker->rg,
                'im' => $faker->rg(false),
                'phone' => $faker->areaCode . $faker->phone(false),
                'celphone' => $faker->areaCode . $faker->cellphone(false),
                'gender' => rand(0,2),
                'email'=>rand(0, $qntd).$faker->email,
                'site'=>$faker->url,
                'notice'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
                'last_purchase'=>Carbon::now(),
                'status'=>$faker->boolean,
                'attended_by'=>rand(1,$qntd),
                'last_updated_by'=>rand(1,$qntd),
                'created_at' => clone($date),
                'updated_at' => clone($date),
            ]);
        }
        for ($i=0; $i <$qntd ; $i++) {
            $type = rand(0,1);
            $date->subDays(1);
            $client->create([
                // 'type_persona'=>rand(0,2),
                'person'=>$type,
                // 'carrying'=>$faker->boolean,
                'name'=>$faker->name,
                'nik_name'=>$faker->userName,
                'contact'=>$faker->firstName,
                'cnpj_cpf'=>$type == 0 ? $faker->cpf : $faker->cnpj,
                'rg_ie' => $faker->rg,
                'im' => $faker->rg(false),
                'phone' => $faker->areaCode . $faker->phone(false),
                'celphone' => $faker->areaCode . $faker->cellphone(false),
                'gender' => rand(0,2),
                'email'=>rand(0, $qntd).$faker->email,
                'site'=>$faker->url,
                'notice'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
                'last_purchase'=>Carbon::now(),
                'status'=>$faker->boolean,
                'attended_by'=>rand(1,$qntd),
                'last_updated_by'=>rand(1,30),
                // 'created_at' => clone($date),
                // 'updated_at' => clone($date),
            ]);
        }
    }
}
