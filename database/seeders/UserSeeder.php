<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Entities\Users\User::create([
            'name' => 'Sistapp SS',
            'email' => 'sistapp@sistapp.com.br',
            'password' => bcrypt('teste123'),
            'is_active' => false,
        ])->givePermissionTo('admin');

        \App\Models\Entities\Users\User::create([
            'name' => 'Teste admin',
            'email' => 'teste@teste.com',
            'password' => bcrypt('teste123'),
            'is_active' => true,
        ])->givePermissionTo('admin');

        \App\Models\Entities\Users\User::create([
            'name' => 'Teste plan1',
            'email' => 'plan1@teste.com',
            'password' => bcrypt('teste123'),
            'is_active' => true,
        ])->givePermissionTo('plan1');

        \App\Models\Entities\Users\User::create([
            'name' => 'Teste plan2',
            'email' => 'plan2@teste.com',
            'password' => bcrypt('teste123'),
            'is_active' => false,
        ])->givePermissionTo('plan2');

        \App\Models\Entities\Users\User::create([
            'name' => 'Teste plan3',
            'email' => 'plan3@teste.com',
            'password' => bcrypt('teste123'),
            'is_active' => false,
        ])->givePermissionTo('plan3');

        \App\Models\Entities\Users\User::create([
            'name' => 'Teste plan4',
            'email' => 'plan4@teste.com',
            'password' => bcrypt('teste123'),
            'is_active' => false,
        ])->givePermissionTo('plan4');

//        \App\Models\Users\User::factory(30)->create([])->givePermissionTo('standard');
    }
}
