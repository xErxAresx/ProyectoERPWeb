<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    private function seedUsers() {
        DB::table('users')->delete();
        $u = new User;
        $u->nombre = "Arnaldo";
        $u->apellidos = "Estoy aqui";
        $u->email = "arnaulopez26@gmail.com";
        $u->password = bcrypt("dawmola2");
        $u->lvlAdmin = 2;
        $u->save();
    }

    public function run()
    {
        // $this->call(UserSeeder::class);
        self::seedUsers();
		$this->command->info('Tabla usuarios inicilizada con datos!');
        
    }
}
