<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->truncate();
        $faker =  Faker::create(str_replace('-', '_', app()->getLocale()));
        $client = new \Modules\Cadastros\Models\Client();
        $qntd = '30';
        for ($i=0; $i <$qntd ; $i++) {
            $type = rand(0,1);
            $client->create([
                'type'=>$type,
                'name'=>$faker->name,
                'nik_name'=>$faker->userName,
                'contact'=>$faker->firstName,
                'cnpj_cpf'=>$type == 0 ? $faker->cpf : $faker->cnpj,
                'rg_ie' => $faker->rg,
                'im' => $faker->rg(false),
                'phone' => $faker->areaCode . $faker->phone(false),
                'celphone' => $faker->areaCode . $faker->cellphone(false),
                'gender' => rand(0,2),
                'email'=>$faker->email,
                'site'=>$faker->url,
                'notice'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
                'status'=>$faker->boolean,
                'attended_by'=>rand(1,$qntd),
                'last_updated_by'=>rand(1,$qntd),
            ]);
        }
    }
}
