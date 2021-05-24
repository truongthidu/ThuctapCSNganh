<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware(function($request, $next){
            session(['module_active' => 'user']);
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::paginate(10);
        $role = Role::all();
        return view("admin/user/list", compact('user', 'role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $role = Role::all();
        return view("admin/user/create", compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $userAll = User::all();
        $role = Role::all();
        if(isset($_POST['btnAddUser'])){
            $count = 0;
            $error = array();
            foreach($userAll as $item){
                if($item->email == $request->email){
                    $error['email'] = "This email is really exits";
                }
            }
            foreach($role as $item_role){
                if($item_role->role == "Admin") ++$count;
            }
            if($count == 1){
                if($request->role == 1) $error['role'] = "Only 1 person has the right to be an Admin";
                else $request->role = 2;
            }
            $request->validate([
                'name' => 'required|regex:/^[a-zA-Z0-9-._ ]+$/|min:3|max:40',
                'email' => 'required|email|max:50',
                'phoneNumber' => 'bail|numeric|digits:10',
                'image' => 'bail|image|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            if($request->hasFile("image")){
                $destination_path = 'public/images/user';
                $image = $request->file('image');
                $imageName = $image->getClientOriginalName();
                $image->storeAs($destination_path, $imageName);
                $request->image = $imageName;
            }
            if(empty($error)){
                $user->name = $request->name;
                $user->img = $request->image;
                $user->email = $request->email;
                $user->phoneNumber = $request->phoneNumber;
                $user->gender = $request->gender;
                $user->day = $request->day;
                $user->month = $request->month;
                $user->year = $request->year;
                $user->role_id = $request->role;
                $user->save();
                return redirect()->route("user.index")->with('alert' , "ADD USER SUCCESS");
            }
            else return view("admin/user/create", compact('error', 'role'));
        }
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
        //
        $user = User::find($id);
        $role = Role::all();
        return view("admin/user/edit", compact('user', 'role'));
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
        $user = User::find($id);
        $userAll = User::all();
        if(isset($_POST['btnUpdateUser'])){
            $count = 0;
            $error = array();
            $request->validate([
                'name' => 'required|regex:/^[a-zA-Z0-9-._ ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+$/|min:3|max:40',
                'email' => 'required|email|max:50',
                'phoneNumber' => 'bail|numeric|digits:10',
                'image' => 'bail|image|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            if($request->hasFile("image")){
                $destination_path = 'public/images/user';
                $image = $request->file('image');
                $imageName = $image->getClientOriginalName();
                $image->storeAs($destination_path, $imageName);
                $request->image = $imageName;
            }
            foreach($userAll as $item){
                if($request->email != $user->email){
                    if($item->email == $request->email) $error['email'] = "This email is really exits";
                }
            }
            foreach($userAll as $item){
                if($item->role_id == 1){
                    ++$count;
                    if($count > 0){
                        if($request->role != $user->role_id){
                            if($request->role == 1) $error['role'] = "Only 1 person has the right to be an Admin";
                            else $request->role = 2;
                        }
                    }
                    else $request->role = 1;
                }
            }
            if(empty($error)){
                $user->name = User::checkIsset($user->name, $request->name);
                $user->img = User::checkIsset($user->img, $request->image);
                $user->email = User::checkIsset($user->email, $request->email);
                $user->phoneNumber = User::checkIsset($user->phoneNumber, $request->phoneNumber);
                $user->gender = User::checkIsset($user->gender, $request->gender);
                $user->day = User::checkIsset($user->day, $request->day);
                $user->month = User::checkIsset($user->month, $request->month);
                $user->year = User::checkIsset($user->year, $request->year);
                $user->role_id = User::checkIsset($user->role, $request->role);
                $user->save();
                return redirect()->route("user.index")->with('alert' , "ADD USER SUCCESS");
            }
            else return back()->with('error', $error);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('alert', "DELETE USER id = $id SUCCESS");
    }
}
