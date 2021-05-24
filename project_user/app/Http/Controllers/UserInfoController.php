<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        $convertEmail = User::convertEmail(Auth::user()->email);
        $convertPhoneNumber = User::convertPhoneNumber(Auth::user()->phoneNumber);
        return view("user/userinfo", compact('convertEmail', 'convertPhoneNumber', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $userAll = User::all();
        if(isset($request->btnUpdate)){
            $error = array();

            $request->validate(
                [
                    'username' => 'bail|required|min:3|regex:/^[a-zA-Z0-9-._ ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+$/',
                    'email' => 'bail|required|min:15',
                ],
                [
                    'required' => 'Fill out ":attribute"',
                    'min' => 'The minimum length of email is :min',
                ]
            );

            foreach($userAll as $item){
                if($user->email != $request->email){
                    if($item->email == $request->email) $error['email'] = "This email already exists !";
                }
            }

            if(!empty($request->phoneNumber)){
                $request->validate(
                    [
                        'phoneNumber' => 'bail|numeric|digits:10',
                    ],
                    [
                        'numeric' => 'You need to enter numbers for the ":attribute" field',
                        'digits' => 'The field ":attribute" only 10 numbers',
                    ]
                );
            }
            if(!empty($request->password) || !empty($request->new_password) || !empty($request->new_password_confirmation)){
                $request->validate(
                    [
                        'password' => 'bail|required',
                        'new_password' => 'bail|required|min:6|max:32|confirmed',
                        'new_password_confirmation' => 'bail|required|min:6|max:32',
                    ],
                    [
                        'required' => 'Fill out ":attribute"',
                        'min' => 'The minimum length of password is 6',
                        'max' => 'The maximum length of password is 32',
                        'confirmed' => 'The "password_confirmation" does not match',
                    ]
                );
                if(!Hash::check($request->password, $user->password)){
                    $error['password'] = "Incorrect password";
                }
            }
            if(!empty($request->image)){
                $request->validate(
                    [
                        'image' => 'bail|image|mimes:jpg,jpeg,png,gif|max:2048',
                    ],
                    [
                        'image' => "The select file must be an image",
                        'mimes' => 'The picture file with incorrect format(e.g: ".jpg", ".jpeg", ".png", ".gif")',
                        'max' => 'The pictures are limited to no more than 2M',
                    ]
                );
                if($request->hasFile("image")){
                    $destination_path = 'public/images/users';
                    $image = $request->file('image');
                    $imageName = $image->getClientOriginalName();
                    $path = $image->storeAs($destination_path, $imageName);
                    $user->img = $imageName;
                    $imageExtension = $image->getClientOriginalExtension();
                }
            }

            if(empty($error)){
                $user->name = User::checkIsset($user->name, $request->username);
                $user->email = User::checkIsset($user->email, $request->email);
                if(!empty($request->new_password)) $user->password = Hash::make($request->new_password);
                else $user->password = $user->password;
                $user->phoneNumber = User::checkIsset($user->phoneNumber, $request->phoneNumber);
                $user->gender = User::checkIsset($user->gender, $request->gender);
                $user->day = User::checkIsset($user->day, $request->day);
                $user->month = User::checkIsset($user->month, $request->month);
                $user->year = User::checkIsset($user->year, $request->year);
                $user->save();
                $request->session()->flash('success', "Your account has been updated");
            }
            else{ $request->session()->flash('success', ''); }
            return back()->with('error', $error);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        //
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
}
