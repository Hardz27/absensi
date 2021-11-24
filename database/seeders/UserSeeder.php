<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
		$role = Roles::where('name', 'dosen')->first();
		User::insert([
			'role_id' 	=> $role->id,
			'nim'		=> '1703024',
			'password'	=> Hash::make('12345678'),
			'nama'		=> 'Iryanto MS., MS.i.,'
		]);
    }
}
