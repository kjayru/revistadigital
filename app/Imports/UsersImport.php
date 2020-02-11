<?php

namespace App\Imports;

use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
Use \DB;
use Hash;
use App\RoleUser;
use App\User;
use App\UserFile;

class UsersImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        UserFile::query()->truncate();

        echo "<pre>";
        print_r("CARGANDO ARCHIVO A BASE...");
        echo "</pre>";


        foreach ($rows as $k => $row)
        {

                if($k>0){
                            UserFile::create([
                                    'name' => $row[1],
                                    'lastname'=> $row[2],
                                    'puntoventa'=> $row[3],
                                    'numdocumento'=> $row[5],
                                    'perfil'=> $row[6],
                                    'movil'=> $row[7],
                                    'email'=> $row[8],
                                    'region'=> $row[11],
                                    'departamento'=> $row[12],
                                    'provincia'=> $row[13],
                                    'distrito'=> $row[14],
                                    'canal'=> $row[15],

                            ]);
                    }
                }



        echo "<pre>";
        print_r("DEPURANDO DUPLICIDAD DE ARCHIVOS");
        echo "</pre>";

        DB::unprepared("DELETE t1 FROM user_files t1 INNER JOIN user_files t2  WHERE t1.id < t2.id AND t1.email = t2.email");

                $users = User::all();

                $temps = UserFile::all();
                $existentes[]='';
                $nuevos[] = '';
                foreach($temps as $key => $tp){
                     $us = User::where('email',$tp->email)->count();
                    if($us>0){
                        $existentes[] = $tp->email;
                    }else{
                        $nuevos[] = $tp->email;
                    }
                   // echo $tp->email."<br>";
                }


/*
            echo "<h1>existentes</h1>";
            echo "<pre>";
            print_r(@$existentes);
            echo "</pre>";
*/

            //buscando usuarios no renovados
                foreach($users as $us){
                    if (in_array($us->email, $existentes)) {

                    }else{
                        $huerfanos[] = $us->email;
                    }
                }


        echo "<pre>";
        print_r("ELIMINANDO USUARIOS NO ACTUALIZADOS");
        echo "</pre>";
         //eliminacion de usuario
        foreach($huerfanos as $hue){

            if($hue!='admin@revista.com' && $hue!='sisac@claro.com.pe'){
                User::where('email',$hue)->delete();
            }

        }

        echo "<pre>";
        print_r("DEPURANDO TABLA USUARIO TEMPORAL");
        echo "</pre>";

        foreach($existentes as  $iuser){
            $unico = UserFile::where('email',$iuser)->delete();

        }

        echo "<pre>";
        print_r("INSERTANDO USUARIO NUEVOS");
        echo "</pre>";
    //insertando usuario nuevos a users
        $userchilds = UserFile::all();
        $rand = range(1, 9999);
        foreach($userchilds as  $unico){

           // $unico = UserFile::where('email',$user)->first();
            $npass = User::ramdowpass(8);
            $usuario = new User();

            $usuario->name  = $unico->name;
            $usuario->lastname = $unico->lastname;
            $usuario->puntoventa = $unico->puntoventa;
            $usuario->numdocumento = $unico->numdocumento;
            $usuario->perfil = $unico->perfil;
            $usuario->movil = $unico->movil;
            $usuario->email = $unico->email;
            $usuario->region = $unico->region;
            $usuario->departamento = $unico->departamento;
            $usuario->provincia = $unico->provincia;
            $usuario->distrito = $unico->distrito;
            $usuario->canal = $unico->canal;
            $usuario->password = Hash::make($npass);

            $usuario->save();



           $rol = new RoleUser();
           $rol->role_id = 3;
           $rol->user_id = $usuario->id;
           $rol->save();

           $data = ['message' => "Envio de registro",'clave'=>$npass];
           Mail::to($unico->email)->send(new TestEmail($data));

        }
        echo "<pre>";
        print_r("PROCESO FINALIZADO");
        echo "</pre>";
    }



}
