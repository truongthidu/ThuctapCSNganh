@extends('layouts.user')
@section("content")
    @if (session("success"))
        <div class="alert alert-success alertMessage">
            <i class="fas fa-check-circle"></i>{{ session("success") }}
        </div>
    @else
        <div class="alertMessage">
        </div>
    @endif
    <div class="userinfo">
        <form action="{{ url("user/info") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title-userinfo">
                <h4>User information</h4>
                <h6>Manage profile information for account security</h6>
            </div>
            <div style="position: relative;">
                <div class="form-userinfo d-flex">
                    <label for="username">Username</label>
                    <div class="d-block" style="padding-left: 7px;">
                        <input type="text" id="username" name="username" size="35" value="{{ isset($user->name) ? $user->name : "" }}" placeholder="E.g: HngPi" class="@error('username') is-invalid @enderror">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-userinfo hiddenInfo">
                    <label for="email">Email</label>
                    <div class="d-block">
                        <div class="d-flex">
                            <div class="convertInfo">{{ isset($user->email) ? $convertEmail : "" }}</div>
                            <a href="javascript:" id="a-email">Thay đổi</a>
                        </div>
                        <div class="d-none show-email">
                            <input type="email" id="email" name="email" value="{{ isset($user->email) ? $user->email : "" }}" data-id="{{ empty(Session::get("error")) ? 0 : 1 }}" size="35" placeholdedr="E.g: vudanhhungphi@gmail.com" class="@error('email') is-invalid @enderror" id="email">
                        </div>
                        @error('email')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="alertError">
                            @if(!empty(Session::get("error")))
                                @foreach (Session::get("error") as $key => $item)
                                    @if ($key == "email")
                                        <strong>{{ $item }}</strong>
                                    @endif
                                @endforeach
                            @else {{ "" }}
                            @endif
                        </span>
                    </div>
                </div>
                <div class="form-userinfo hiddenInfo">
                    <label for="phoneNumber">Phone number</label>
                    <div class="d-block">
                        <div class="d-flex">
                            <div class="convertInfo">{{ isset($user->phoneNumber) ? $convertPhoneNumber : "" }}</div>
                            <a href="javascript:" id="a-phoneNumber">Thay đổi</a>
                        </div>
                        <div class="d-none show-phoneNumber">
                            <input type="text" id="phoneNumber" name="phoneNumber" value="{{ isset($user->phoneNumber) ? $user->phoneNumber : "" }}" placeholder="E.g: 0398391694" size="35" class="@error('phoneNumber') is-invalid @enderror">
                            
                        </div>
                        @error('phoneNumber')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-userinfo">
                    <label for="password">Gender</label>
                    <input type="radio" id="male" name="gender" class="form-radio gender" value="Male" {{ isset($user->gender) && $user->gender == "Male" ? "checked" : "" }}>
                        <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" class="form-radio gender" value="Female" {{ isset($user->gender) && $user->gender == "Female"  ? "checked" : "" }}>
                        <label for="female">Female</label>
                </div>
                <div class="form-userinfo">
                    <label for=""></label>
                    <input type="checkbox" class="form-checkbox" id="checkboxPass">
                    <label for="checkboxPass">Change password</label>
                </div>
                <div class="form-userinfo relate_pass">
                    <label for="password">Password</label>
                    <input type="password" id="password" size="35" name="password" placeholder="Enter old password" class="@error('password') is-invalid @enderror">
                    @error('password')
                        <span class="invalid-feedback valiFormError" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="alertError m-l-155">
                        @if(!empty(Session::get("error")))
                            @foreach (Session::get("error") as $key => $item)
                                @if ($key == "password")
                                    <strong>{{ $item }}</strong>
                                @endif
                            @endforeach
                        @else {{ "" }}
                        @endif
                    </span>
                </div>
                <div class="form-userinfo relate_pass">
                    <label for="new_password">New password</label>
                    <input type="password" id="new_password" size="35" name="new_password" placeholder="Password from 6 to 32 characters" class="@error('new_password') is-invalid @enderror">
                    @error('new_password')
                        <span class="invalid-feedback valiFormError" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-userinfo relate_pass">
                    <label for="new_password_confirmation">Confirm password</label>
                    <input type="password" id="new_password_confirmation" size="35" name="new_password_confirmation" placeholder="Enter new password again" class="@error('password_confirmation') is-invalid @enderror">
                    @error('password_confirmation')
                        <span class="invalid-feedback valiFormError" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-userinfo">
                    <label for="password">Birthday</label>
                    <select name="day" id="">
                        @for ($i = 0; $i <= 31; $i++)
                            <option value="{{ $i }}" {{ isset($user->day) && $user->day == $i ? "selected" : ""}}>
                                {{ $i }}
                            </option>
                        @endfor
                    </select>
                    <select name="month" id="">
                        @for ($i = 0; $i <= 12; $i++)
                            <option value="{{ $i }}" {{ isset($user->month) && $user->month == $i ? "selected" : ""}}>
                                {{ $i }}
                            </option>
                        @endfor
                    </select>
                    <select name="year" id="">
                        @for ($i = 1989; $i <= 2021; $i++)
                            <option value="{{ $i }}" {{ isset($user->year) && $user->year == $i ? "selected" : ""}}>
                                {{ $i }}
                            </option>
                        @endfor
                    </select>
                </div>
                <div class="form-userinfo">
                    <label for=""></label>
                    <input type="submit" name="btnUpdate" value="Cập nhật" class="btn btn-warning btnUpdate">
                </div>
                <div class="form-avatar">
                    <div class="upload-avatar">
                        <div class="upload-circle-avatar" style="background-image: url({{ asset("/storage/images/users/".$user->img) }})"></div>
                        <div>
                            <input type="file" class="d-block" name="image" value="{{ asset("/storage/images/users/".$user->img) }}" class="@error('image') is-invalid @enderror">
                            @error('image')
                                <span class="invalid-feedback alertErrorImage" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
<script>
    $(function(){
        $("#checkboxPass").change(function(){
            $(".relate_pass").slideToggle(350).css("display", "block");
        });
        $("#a-email").click(function(){
            $(".show-email").slideToggle(350).removeClass("d-none");
        });
        $("#a-phoneNumber").click(function(){
            $(".show-phoneNumber").slideToggle(350).removeClass("d-none");
        });
    });
</script>
@endsection