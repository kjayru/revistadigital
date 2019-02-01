<?php

namespace App\Imports;

use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Hash;
use App\RoleUser;
use App\User;
/*class UsersImport implements ToModel
{

    public function model(array $row)
    {


        return new User([
            'name'     => $row[0],
            'email'    => $row[1],
            'password' => Hash::make($row[2]),
         ]);
    }
}*/

class UsersImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            echo "<pre>";
            print_r($row);
            echo "</pre>";
            /*User::create([
                'name' => $row[0],
            ]);*/
            dd('end');
            $usuario =  new User();

            $usuario->name = $request->name;
            $usuario->email = $request->email;

            $usuario->password = Hash::make($request->password);


            $usuario->save();

            $role = new RoleUser();
            $role->user_id = $usuario->id;
            $role->role_id = $request->role_id;

            $role->save();
        }
    }
}
