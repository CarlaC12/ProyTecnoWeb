<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function index()
    {
        $users=User::all();
      return view('user.index',compact('users'));
    }

   
    public function create()
    {
        $roles = DB::table('roles')->get();
        return view('user.create', compact('roles'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'email' =>'required|email|unique:users,email',
            'fullname'=>'required|max:35',
            'ci'=>'required',
            'roles' => 'required'
        ]);
        $user=new User;
        $user->fullname=$request->fullname;
        $user->ci=$request->ci;
        $user->email=$request->email;
        $user->password = bcrypt($request->get('password'));
        $user->save();
        $user->roles()->sync($request->roles);
       /* $user->assignRole('Admin');*/
        return redirect()->route('user.index');
        
    }

    
    public function show($id)
    {
       
    }

    
    public function edit($id)
    {
        $roles = DB::table('roles')->get();

        $user=User::findOrfail($id);
        return view('user.edit',compact('user','roles'));
    }

    
    public function update(Request $request, $id)
    {
        $user=User::findOrfail($id);
        $user->fullname=$request->fullname;
        $user->ci=$request->ci;
        $user->email=$request->email;
        if ($request->get('password')!='') {
            $user->password = bcrypt($request->get('password'));
        }
        $user->save();
        $usuario->roles()->sync($request->roles);
        return redirect()->route('user.index');
    }

    
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
