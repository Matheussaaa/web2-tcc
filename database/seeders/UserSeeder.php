DB::table('users')->insert([
                'name' => 'Usuario',
                'email' => 'usuario@gmail.com',
                'password' => Hash::make('usuario123'),
                'role_id' => 1,
            ]);
            
            DB::table('users')->insert([
                'name' => 'Administrador',
                'email' => 'administrador@gmail.com',
                'password' => Hash::make('administrador123'),
                'role_id' => 2,
            ]);