<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{

    public function list(){
        $data = [];                
        $data["title"] = "Lista de Usarios";
        $data["user"] = User::all();
        $data["cantidad"] = 0;
        $data["1"]["Medicina"] = 0;
        $data["1"]["Ingenieria"] = 0;
        $data["1"]["Abogacia"] = 0;
        $data["1"]["Licenciatura"] = 0;
        $data["1"]["cantidad"] = 0;

        $data["2"]["Medicina"] = 0;
        $data["2"]["Ingenieria"] = 0;
        $data["2"]["Abogacia"] = 0;
        $data["2"]["Licenciatura"] = 0;
        $data["2"]["cantidad"] = 0;

        $data["3"]["Medicina"] = 0;
        $data["3"]["Ingenieria"] = 0;
        $data["3"]["Abogacia"] = 0;
        $data["3"]["Licenciatura"] = 0;
        $data["3"]["cantidad"] = 0;

        $data["4"]["Medicina"] = 0;
        $data["4"]["Ingenieria"] = 0;
        $data["4"]["Abogacia"] = 0;
        $data["4"]["Licenciatura"] = 0;
        $data["4"]["cantidad"] = 0;

        $data["5"]["Medicina"] = 0;
        $data["5"]["Ingenieria"] = 0;
        $data["5"]["Abogacia"] = 0;
        $data["5"]["Licenciatura"] = 0;
        $data["5"]["cantidad"] = 0;

        $data["6"]["Medicina"] = 0;
        $data["6"]["Ingenieria"] = 0;
        $data["6"]["Abogacia"] = 0;
        $data["6"]["Licenciatura"] = 0;
        $data["6"]["cantidad"] = 0;

        $data["7"]["Medicina"] = 0;
        $data["7"]["Ingenieria"] = 0;
        $data["7"]["Abogacia"] = 0;
        $data["7"]["Licenciatura"] = 0;
        $data["7"]["cantidad"] = 0;

        $data["8"]["Medicina"] = 0;
        $data["8"]["Ingenieria"] = 0;
        $data["8"]["Abogacia"] = 0;
        $data["8"]["Licenciatura"] = 0;
        $data["8"]["cantidad"] = 0;

        $data["9"]["Medicina"] = 0;
        $data["9"]["Ingenieria"] = 0;
        $data["9"]["Abogacia"] = 0;
        $data["9"]["Licenciatura"] = 0;
        $data["9"]["cantidad"] = 0;

        $data["10"]["Medicina"] = 0;
        $data["10"]["Ingenieria"] = 0;
        $data["10"]["Abogacia"] = 0;
        $data["10"]["Licenciatura"] = 0;
        $data["10"]["cantidad"] = 0;

        foreach ($data['user'] as $user)
        {
            $data["cantidad"]++;
            switch($user ->getComuna())
            {
                case "10":
                    $data["10"]["cantidad"]++;
                    switch($user->getCarrera())
                    {
                        case "Medicina":
                            $data["10"]["Medicina"]++;
                            break;
                        case "Ingenieria":
                            $data["10"]["Ingenieria"]++;
                            break;
                        case "Abogacia":
                            $data["10"]["Abogacia"]++;
                            break; 
                        case "Licenciatura":
                            $data["10"]["Licenciatura"]++;
                            break; 
                    }
                    break;
                case "1":
                    $data["1"]["cantidad"]++;
                    switch($user->getCarrera())
                    {
                        case "Medicina":
                            $data["1"]["Medicina"]++;
                            break;
                        case "Ingenieria":
                            $data["1"]["Ingenieria"]++;
                            break;
                        case "Abogacia":
                            $data["1"]["Abogacia"]++;
                            break; 
                        case "Licenciatura":
                            $data["1"]["Licenciatura"]++;
                            break; 
                    }
                    break;
                case "2":
                    $data["2"]["cantidad"]++;
                    switch($user->getCarrera())
                    {
                        case "Medicina":
                            $data["2"]["Medicina"]++;
                            break;
                        case "Ingenieria":
                            $data["2"]["Ingenieria"]++;
                            break;
                        case "Abogacia":
                            $data["2"]["Abogacia"]++;
                            break; 
                        case "Licenciatura":
                            $data["2"]["Licenciatura"]++;
                            break; 
                    }
                    break;
                case "3":
                    $data["3"]["cantidad"]++;
                    switch($user->getCarrera())
                    {
                        case "Medicina":
                            $data["3"]["Medicina"]++;
                            break;
                        case "Ingenieria":
                            $data["3"]["Ingenieria"]++;
                            break;
                        case "Abogacia":
                            $data["3"]["Abogacia"]++;
                            break; 
                        case "Licenciatura":
                            $data["3"]["Licenciatura"]++;
                            break; 
                    }
                    break;
                case "4":
                    $data["4"]["cantidad"]++;
                    switch($user->getCarrera())
                    {
                        case "Medicina":
                            $data["4"]["Medicina"]++;
                            break;
                        case "Ingenieria":
                            $data["4"]["Ingenieria"]++;
                            break;
                        case "Abogacia":
                            $data["4"]["Abogacia"]++;
                            break; 
                        case "Licenciatura":
                            $data["4"]["Licenciatura"]++;
                            break; 
                    }
                    break;
                case "5":
                    $data["5"]["cantidad"]++;
                    switch($user->getCarrera())
                    {
                        case "Medicina":
                            $data["5"]["Medicina"]++;
                            break;
                        case "Ingenieria":
                            $data["5"]["Ingenieria"]++;
                            break;
                        case "Abogacia":
                            $data["5"]["Abogacia"]++;
                            break; 
                        case "Licenciatura":
                            $data["5"]["Licenciatura"]++;
                            break; 
                    }
                    break;
                case "6":
                    $data["6"]["cantidad"]++;
                    switch($user->getCarrera())
                    {
                        case "Medicina":
                            $data["6"]["Medicina"]++;
                            break;
                        case "Ingenieria":
                            $data["6"]["Ingenieria"]++;
                            break;
                        case "Abogacia":
                            $data["6"]["Abogacia"]++;
                            break; 
                        case "Licenciatura":
                            $data["6"]["Licenciatura"]++;
                            break; 
                    }
                    break;
                case "7":
                    $data["7"]["cantidad"]++;
                    switch($user->getCarrera())
                    {
                        case "Medicina":
                            $data["7"]["Medicina"]++;
                            break;
                        case "Ingenieria":
                            $data["7"]["Ingenieria"]++;
                            break;
                        case "Abogacia":
                            $data["7"]["Abogacia"]++;
                            break; 
                        case "Licenciatura":
                            $data["7"]["Licenciatura"]++;
                            break; 
                    }
                    break;
                case "8":
                    $data["8"]["cantidad"]++;
                    switch($user->getCarrera())
                    {
                        case "Medicina":
                            $data["8"]["Medicina"]++;
                            break;
                        case "Ingenieria":
                            $data["8"]["Ingenieria"]++;
                            break;
                        case "Abogacia":
                            $data["8"]["Abogacia"]++;
                            break; 
                        case "Licenciatura":
                            $data["8"]["Licenciatura"]++;
                            break; 
                    }
                    break;
                case "9":
                    $data["9"]["cantidad"]++;
                    switch($user->getCarrera())
                    {
                        case "Medicina":
                            $data["9"]["Medicina"]++;
                            break;
                        case "Ingenieria":
                            $data["9"]["Ingenieria"]++;
                            break;
                        case "Abogacia":
                            $data["9"]["Abogacia"]++;
                            break; 
                        case "Licenciatura":
                            $data["9"]["Licenciatura"]++;
                            break; 
                    }
                    break;
            }
        }

        if($data["1"]["cantidad"]!=0)
        {
            $data["1"]["Medicina"] = $data["1"]["Medicina"]/$data["1"]["cantidad"] * 100;
            $data["1"]["Ingenieria"] = $data["1"]["Ingenieria"]/$data["1"]["cantidad"] * 100;
            $data["1"]["Abogacia"] = $data["1"]["Abogacia"]/$data["1"]["cantidad"] * 100;
            $data["1"]["Licenciatura"] = $data["1"]["Licenciatura"]/$data["1"]["cantidad"] * 100;
            $data["1"]["cantidad"] = $data["1"]["cantidad"]/ $data["cantidad"] * 100;
        }
        if($data["2"]["cantidad"]!=0)
        {
        $data["2"]["Medicina"] = $data["2"]["Medicina"]/$data["2"]["cantidad"] * 100;
        $data["2"]["Ingenieria"] = $data["2"]["Ingenieria"]/$data["2"]["cantidad"] * 100;
        $data["2"]["Abogacia"] = $data["2"]["Abogacia"]/$data["2"]["cantidad"] * 100;
        $data["2"]["Licenciatura"] = $data["2"]["Licenciatura"]/$data["2"]["cantidad"] * 100;
        $data["2"]["cantidad"] = $data["2"]["cantidad"]/ $data["cantidad"] * 100;
        }
        if($data["3"]["cantidad"]!=0)
        {
            $data["3"]["Medicina"] = $data["3"]["Medicina"]/$data["3"]["cantidad"] * 100;
            $data["3"]["Ingenieria"] = $data["3"]["Ingenieria"]/$data["3"]["cantidad"] * 100;
            $data["3"]["Abogacia"] = $data["3"]["Abogacia"]/$data["3"]["cantidad"] * 100;
            $data["3"]["Licenciatura"] = $data["3"]["Licenciatura"]/$data["3"]["cantidad"] * 100;
            $data["3"]["cantidad"] = $data["3"]["cantidad"]/ $data["cantidad"] * 100;
        }
        if($data["4"]["cantidad"]!=0)
        {
            $data["4"]["Medicina"] = $data["4"]["Medicina"]/$data["4"]["cantidad"] * 100;
            $data["4"]["Ingenieria"] = $data["4"]["Ingenieria"]/$data["4"]["cantidad"] * 100;
            $data["4"]["Abogacia"] = $data["4"]["Abogacia"]/$data["4"]["cantidad"] * 100;
            $data["4"]["Licenciatura"] = $data["4"]["Licenciatura"]/$data["4"]["cantidad"] * 100;
            $data["4"]["cantidad"] = $data["4"]["cantidad"]/ $data["cantidad"] * 100;
        }
        if($data["5"]["cantidad"]!=0)
        {
            $data["5"]["Medicina"] = $data["5"]["Medicina"]/$data["5"]["cantidad"] * 100;
            $data["5"]["Ingenieria"] = $data["5"]["Ingenieria"]/$data["5"]["cantidad"] * 100;
            $data["5"]["Abogacia"] = $data["5"]["Abogacia"]/$data["5"]["cantidad"] * 100;
            $data["5"]["Licenciatura"] = $data["5"]["Licenciatura"]/$data["5"]["cantidad"] * 100;
            $data["5"]["cantidad"] = $data["5"]["cantidad"]/ $data["cantidad"] * 100;
        }
        if($data["6"]["cantidad"]!=0)
        {
            $data["6"]["Medicina"] = $data["6"]["Medicina"]/$data["6"]["cantidad"] * 100;
            $data["6"]["Ingenieria"] = $data["6"]["Ingenieria"]/$data["6"]["cantidad"] * 100;
            $data["6"]["Abogacia"] = $data["6"]["Abogacia"]/$data["6"]["cantidad"] * 100;
            $data["6"]["Licenciatura"] = $data["6"]["Licenciatura"]/$data["6"]["cantidad"] * 100;
            $data["6"]["cantidad"] = $data["6"]["cantidad"]/ $data["cantidad"] * 100;
        }
        if($data["7"]["cantidad"]!=0)
        {
            $data["7"]["Medicina"] = $data["7"]["Medicina"]/$data["7"]["cantidad"] * 100;
            $data["7"]["Ingenieria"] = $data["7"]["Ingenieria"]/$data["7"]["cantidad"] * 100;
            $data["7"]["Abogacia"] = $data["7"]["Abogacia"]/$data["7"]["cantidad"] * 100;
            $data["7"]["Licenciatura"] = $data["7"]["Licenciatura"]/$data["7"]["cantidad"] * 100;
            $data["7"]["cantidad"] = $data["7"]["cantidad"]/ $data["cantidad"] * 100;
        }
        if($data["8"]["cantidad"]!=0)
        {
            $data["8"]["Medicina"] = $data["8"]["Medicina"]/$data["8"]["cantidad"] * 100;
            $data["8"]["Ingenieria"] = $data["8"]["Ingenieria"]/$data["8"]["cantidad"] * 100;
            $data["8"]["Abogacia"] = $data["8"]["Abogacia"]/$data["8"]["cantidad"] * 100;
            $data["8"]["Licenciatura"] = $data["8"]["Licenciatura"]/$data["8"]["cantidad"] * 100;
            $data["8"]["cantidad"] = $data["8"]["cantidad"]/ $data["cantidad"] * 100;
        }
        if($data["9"]["cantidad"]!=0)
        {
            $data["9"]["Medicina"] = $data["9"]["Medicina"]/$data["9"]["cantidad"] * 100;
            $data["9"]["Ingenieria"] = $data["9"]["Ingenieria"]/$data["9"]["cantidad"] * 100;
            $data["9"]["Abogacia"] = $data["9"]["Abogacia"]/$data["9"]["cantidad"] * 100;
            $data["9"]["Licenciatura"] = $data["9"]["Licenciatura"]/$data["9"]["cantidad"] * 100;
            $data["9"]["cantidad"] = $data["9"]["cantidad"]/ $data["cantidad"] * 100;
        }
        if($data["10"]["cantidad"]!=0)
        {
            $data["10"]["Medicina"] = $data["10"]["Medicina"]/$data["10"]["cantidad"] * 100;
            $data["10"]["Ingenieria"] = $data["10"]["Ingenieria"]/$data["10"]["cantidad"] * 100;
            $data["10"]["Abogacia"] = $data["10"]["Abogacia"]/$data["10"]["cantidad"] * 100;
            $data["10"]["Licenciatura"] = $data["10"]["Licenciatura"]/$data["10"]["cantidad"] * 100;
            $data["10"]["cantidad"] = $data["10"]["cantidad"]/ $data["cantidad"] * 100;
        }

        return view('user.list')->with("data",$data);
    }

    public function edit($id){
        $data = [];
        $user = User::findOrFail($id);
        $data["title"] = $user->getName();
        $data["user"] = $user;
        return view('user.edit')->with("data", $data);
    }

    public function saveEdit(Request $request){
        $request->validate(User::validate());
        $id =$request->input('id');
        User::where('id',$id)->update([
            'user' => $request->input('user'),
            'comuna' => $request->input('comuna'),
            'carrera' => $request->input('carrera'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        $message = Lang::get('messages.postCreated');
        return redirect()->route('home.index')->with('success',$message);
    }

}
