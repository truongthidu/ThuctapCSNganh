<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserInfoController extends Controller
{
    //

    public function show(Request $request){
        $convertEmail = User::convertEmail(Auth::user()->email);
        $convertPhoneNumber = User::convertPhoneNumber(Auth::user()->phoneNumber);
        if(isset($_POST['btnUpdate'])){
            $error = array();
            if(!empty($_POST['phoneNumber'])){
                $request->validate(
                    [
                        'phoneNumber' => 'numeric|digits:10',
                    ],
                    [
                        'numeric' => 'You need to enter numbers for the ":attribute" field',
                        'digits' => 'The field ":attribute" only 10 numbers',
                    ]
                );
            }
            if(!empty($_POST['password'])){
                $request->validate(
                    [
                        'new_password' => 'required|min:6|max:32|confirmed',
                        'new_password_confirmation' => 'required|min:6|max:32',
                    ],
                    [
                        'required' => 'Fill out this field',
                        'min' => 'The minimum length of passwords is 6',
                        'max' => 'The maximum length of passwords is 32',
                        'confirmed' => 'The "password_confirmation" does not match',
                    ]
                );
                $password = Hash::make("secret");
                if($password != $_POST['password']){
                    $error['password'] = "Incorrect password !!!";
                }
            }

            $user = User::find(Auth::user()->id);
            $user->name = $request->username;
            $user->email = $request->email;
            $user->phoneNumber = $request->phoneNumber;
            $user->gender = $request->gender;
            if(isset($request->new_password)) $user->password = md5($request->new_password);
            else $user->password = $user->password;
            $user->day = $request->day;
            $user->month = $request->month;
            $user->year = $request->year;
            $user->save();

            Auth::user()->gender = $_POST['gender'];
            Auth::user()->day = $_POST['day'];
            Auth::user()->month = $_POST['month'];
            Auth::user()->year = $_POST['year'];
            return $_POST;
            if(empty($error) && empty($erorrs)) $request->session()->flash('success', "Cập nhật thành công");
            else $request->session()->flash('error', $error);
            return view("user/userinfo", compact('convertEmail', 'convertPhoneNumber'));
        }
        else{
            return view("user/userinfo", compact('convertEmail', 'convertPhoneNumber'));
        }
    }

    // public function update(Request $request){
        
    // }
}
