<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Watch;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class WatchController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        //$tasks = DB::table('tasks')->orderBy('name')->get();
     //   $watches = Watch::where('user_id', Auth::id())->orderBy('name', 'Asc')->get();
        // return view('index',compact('watches'));
        return view('index');
    }

    public function adminlogin(Request $request){
        $login = User::where('name', $request->name)->where('password', $request->password)->where('remember_token', 'true')->get();

        return view('admin', compact('login'));
    }
    public function store(Request $request){
        $products = watch::all();


        $destinationPath = 'images';
        $watch = new Watch();
        $watch->name = $request->name;
        $watch->price = $request->price;
        $file = $request->file('image');

        $fileName = $file->getClientOriginalName();

        $watch->image = $fileName;

        $request->file('image')->move($destinationPath);


        $watch->save();

        return view('home' , compact('products'));
    }


    public function delete($id){
        $watch = Watch::where('id',$id)->delete();
         return redirect()->back();

    }
    public function update($id, Request $request){
        // DB::table('tasks')->where('id','=',$id)->update(['name' => $_REQUEST['newName']]);
        $task = Watch::where('id',$id);
        $task-> update(['name' => $request->newName]);

        return redirect()->back();

    }

    public function edit($id)
    {
        $whatch = Watch::FindOrFail($id);

    //return view('edit' , ['data' => $data]);
    return view('edit' , compact('whatch'));
    }
}
