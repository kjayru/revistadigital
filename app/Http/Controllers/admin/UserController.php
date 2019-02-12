<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\Input;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use \DB;
use Hash;
use Carbon\Carbon;
use App\User;
use App\RoleUser;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = DB::table('users')->paginate(100);

        return view('admin.usuario.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.usuario.create',['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario =  new User();
        $usuario->name = $request->name;
        $usuario->lastname = $request->lastname;
        $usuario->puntoventa = $request->puntoventa;
        $usuario->numdocumento = $request->numdocumento;
        $usuario->perfil = $request->perfil;
        $usuario->movil = $request->movil;
        $usuario->email = $request->email;
        $usuario->region = $request->region;
        $usuario->departamento = $request->departamento;
        $usuario->provincia = $request->provincia;
        $usuario->distrito = $request->distrito;
        $usuario->canal = $request->canal;
        $usuario->email = $request->email;

        $usuario->password = Hash::make($request->password);


        $usuario->save();

        $role = new RoleUser();
        $role->user_id = $usuario->id;
        $role->role_id = $request->role_id;

        $role->save();

         return redirect()->route('users.index')
         ->with('info','Usuario creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('admin.usuario.edit',['roles'=>$roles,'user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario =   User::find($id);

        $usuario->name = $request->name;

        $usuario->lastname = $request->lastname;
        $usuario->puntoventa = $request->puntoventa;
        $usuario->numdocumento = $request->numdocumento;
        $usuario->perfil = $request->perfil;
        $usuario->movil = $request->movil;
        $usuario->email = $request->email;
        $usuario->region = $request->region;
        $usuario->departamento = $request->departamento;
        $usuario->provincia = $request->provincia;
        $usuario->distrito = $request->distrito;
        $usuario->canal = $request->canal;
        $usuario->email = $request->email;

        if($request->password){
           $usuario->password = Hash::make($request->password);
        }

        $usuario->save();

        $role = RoleUser::where('user_id',$id)->first();
       if($role){
          $role->role_id = $request->role_id;
          $role->save();
       }else{
            $rol = new RoleUser();
            $rol->role_id = $request->role_id;
            $rol->user_id = $id;
            $rol->save();
       }

         return redirect()->route('users.index')
         ->with('info','Usuario creado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function cargamasiva(){

        return view('admin.usuario.carga');
    }


    public function proceso(Request $request){
       // dd($request->archivo);

        Excel::import(new UsersImport, $request->archivo);
        return redirect()->route('users.index')
        ->with('info','Carga de usuarios satisfactoriamente');

    }

}
