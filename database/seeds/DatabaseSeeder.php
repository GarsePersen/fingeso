<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $arrayNames = ['Profesor','Admin','Comision','Director'];
                for ($i=0; $i < count($arrayNames); $i++) { 
                    
                     DB::table('roles')->insert([
                        'type' => $arrayNames[$i],
                        'description' => 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados.',
            ]);
        }
        $u = User::create([
                'name'=> 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin123'),
            ]);
        $u->roles()->attach(2);       
    }
}
