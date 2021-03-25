<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Ciudads;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        self::seedUsers();
        $this->command->info('Tabla de Usuarios inicializada con datos!');

        self::seedCiudads();
        $this->command->info('Tabla de Ciudades inicializada con datos!');

    }

    private function seedUsers()
    {
    	DB::table('users')->delete();

        foreach( $this->arrayUsers as $users)
        {
        $p = new User;
        $p->id = $users['id'];
        $p->name = $users['name'];
        $p->email = $users['email'];
        $p->password = $users['password'];
        $p->save();
        }
    }
    private function seedCiudads()
    {
    	DB::table('ciudads')->delete();

        foreach( $this->arrayCiudads as $ciudads)
        {
        $p = new Ciudads;
        $p->id_ciudad = $ciudads['id_ciudad'];
        $p->ciu_descripcion = $ciudads['ciu_descripcion'];
        $p->save();
        }
    }
    private $arrayUsers =
    array(
        array(
            'id'=>'1',
            'name' => 'admin',
            'email' => 'admin@ofimax.com',
            'password' => '$2y$10$ltzK6PI0aJCApjr6Sv000ezdT.EetgZ4.Eu4s1zcS5bgOmqmrbIOi',
            
            ),
        array(
             'id'=>'2',
            'name' => 'tecnico',
            'email' => 'tecnico@ofimax.com',
            'password' => '$2y$10$C039kyhWJjWO0JIx2chIKOTVEburIZXPCC1vAFXwQBSzAe5nfWIZm',
            )
       
    );


    private $arrayCiudads =
    array(
        array(
            'id_ciudad'=>'1',
            'ciu_descripcion' => 'Colonia Neuland',          
            ),
        array(
            'id_ciudad'=>'2',
            'ciu_descripcion' => 'Filadelfia', 
             ),
       array(
            'id_ciudad'=>'3',
            'ciu_descripcion' => 'Villa Hayes',          
            ),
        array(
            'id_ciudad'=>'4',
            'ciu_descripcion' => 'Loma Plata', 
             ),
        array(
                'id_ciudad'=>'5',
                'ciu_descripcion' => 'Ñemby',          
                ),
        array(
                'id_ciudad'=>'6',
                'ciu_descripcion' => 'Luque', 
            ),

        array(
               'id_ciudad'=>'7',
                    'ciu_descripcion' => 'Concepción', 
              ),
        array(
                'id_ciudad'=>'8',
                'ciu_descripcion' => 'Caacupé',          
                ),
        array(
                'id_ciudad'=>'9',
                'ciu_descripcion' => 'Encarnación', 
            ),

        array(
               'id_ciudad'=>'10',
                    'ciu_descripcion' => 'Asunción', 
              )
       
    );
}
