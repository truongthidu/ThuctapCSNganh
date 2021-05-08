@extends('layouts.user')
@section("content")
    @if (session("success"))
        <div class="alert alert-success alertMessage">
            <i class="fas fa-check-circle"></i>{{ session("success") }}
        </div>
    @elseif(session("error"))
        <div class="alert alert-danger alertMessage">
            <i class="fas fa-exclamation-circle"></i>{{ session("error") }}
        </div>
    @else
        <div class="alertMessage">
        </div>
    @endif
    <div class="userinfo">
        <form action="{{ url("user/info") }}" method="POST">
            {{-- enctype="multipart/form-data" --}}
            @csrf
            <div class="title-userinfo">
                <h4>User information</h4>
                <h6>Manage profile information for account security</h6>
            </div>
            <div style="position: relative;">
                <div class="form-userinfo">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" size="35" value="{{ isset(Auth::user()->name) ? Auth::user()->name : "" }}">
                </div>
                <div class="form-userinfo">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" size="30" class="border-none" value="{{ isset(Auth::user()->email) ? $convertEmail : "" }}"><a href="#">Thay đổi</a>
                </div>
                <div class="form-userinfo">
                    <label for="phoneNumber">Phone number</label>
                    <input type="text" id="number" name="phoneNumber" size="30" class="border-none" value="{{ isset(Auth::user()->phoneNumber) ? $convertPhoneNumber : "" }}" class="@error('phoneNumber') is-invalid @enderror"><a href="#">Thay đổi</a>
                    @error('phoneNumber')
                        <span class="invalid-feedback validateForm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br><span class="addPhoneNumber">(You should add phone number for added security)</span>
                </div>
                <div class="form-userinfo">
                    <label for="password">Gender</label>
                    <input type="radio" id="male" name="gender" class="form-radio gender" value="Male" {{ isset(Auth::user()->gender) && Auth::user()->gender == "Male" ? "checked" : "" }}>
                        <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" class="form-radio gender" value="Female" {{ isset(Auth::user()->gender) && Auth::user()->gender == "Female"  ? "checked" : "" }}>
                        <label for="female">Female</label>
                </div>
                <div class="form-userinfo">
                    <label for=""></label>
                    <input type="checkbox" class="form-checkbox" id="checkboxPass">
                    <label for="checkboxPass">Change password</label>
                </div>
                <div class="form-userinfo relate_pass">
                    <label for="password">Password</label>
                    <input type="password" id="password" size="35" name="password" placeholder="Enter old password">
                    {{-- <span class="validateForm alertPass">
                        @if (isset($error))
                            @foreach ($error as $item)
                                <strong>{{ $item }}</strong>
                            @endforeach
                        @endif
                    </span> --}}
                </div>
                <div class="form-userinfo relate_pass">
                    <label for="new_password">New password</label>
                    <input type="password" id="new_password" size="35" name="new_password" placeholder="Password from 6 to 32 characters" class="@error('new_password') is-invalid @enderror">
                    @error('new_password')
                        <span class="invalid-feedback validateForm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-userinfo relate_pass">
                    <label for="new_password_confirmation">Confirm password</label>
                    <input type="password" id="new_password_confirmation" size="35" name="new_password_confirmation" placeholder="Enter new password again" class="@error('password_confirmation') is-invalid @enderror">
                    @error('password_confirmation')
                        <span class="invalid-feedback validateForm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-userinfo">
                    <label for="password">Birthday</label>
                        <select name="day" id="">
                            @for ($i = 0; $i <= 31; $i++)
                                <option value="{{ $i }}" {{ isset(Auth::user()->day) && Auth::user()->day == $i ? "selected" : ""}}>
                                    {{ $i }}
                                </option>
                            @endfor
                        </select>
                        <select name="month" id="">
                            @for ($i = 0; $i <= 12; $i++)
                                <option value="{{ $i }}" {{ isset(Auth::user()->month) && Auth::user()->month == $i ? "selected" : ""}}>
                                    {{ $i }}
                                </option>
                            @endfor
                        </select>
                        <select name="year" id="">
                            @for ($i = 1989; $i <= 2021; $i++)
                                <option value="{{ $i }}" {{ isset(Auth::user()->year) && Auth::user()->year == $i ? "selected" : ""}}>
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
                        <div class="upload-cirle-avatar"><br></div>
                        <div>
                            <input type="file" name="uploadCircleAvatar" id="" value="Choose file">
                            <button type="button" class="btnUploadImage" name="btnUploadImage">Choose file</button>
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

        // $(".btnUpdate").click(function(){
        //     var data = "Thành công";
        //     $.ajax({
        //         data: data,
        //         url: "user/info/update",
        //         method: "POST",
        //         dataType: "JSON",
        //         success: function(data){
        //             console.log(data);
        //         },
        //         error: function(xhr, thrownError){
        //             console.log(xhr.responseText); console.log(xhr.status); console.log(thrownError);
        //         },
        //     });
        // });
    });
</script>
@endsection