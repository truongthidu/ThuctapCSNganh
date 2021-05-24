@extends('layouts.admin')
@section('content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                UPDATE USER
            </div>
            <div class="card-body">
                <form action="{{ route("user.update", $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="form-group d-block">
                        <label for="title">USERNAME</label>
                        <input class="form-control col-3" type="text" name="name" value="{{ $user->name }}" id="name" class="@error('name') is-invalid @enderror">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group d-block">
                        <label for="image">IMAGE</label>
                        <input type="file" name="image" value="{{ $user->img }}" id="image" class="@error('image') is-invalid @enderror">{{ $user->img }}
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group d-block">
                        <label for="email">EMAIL</label>
                        <input class="form-control col-3" type="text" name="email" value="{{ $user->email }}" id="email" class="@error('email') is-invalid @enderror">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
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
                    <div class="form-group">
                        <label for="">BIRTHDAY</label><b> (Day/Month/Year)</b><br>
                       <div class="d-flex">
                            <select name="day" id="" class="form-control col-1">
                                @for ($i = 0; $i <= 31; $i++)
                                    <option value="{{ $i }}" {{ isset($user->day) && $user->day == $i ? "selected" : ""}}>
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                            <select name="month" id="" class="form-control col-1">
                                @for ($i = 0; $i <= 12; $i++)
                                    <option value="{{ $i }}" {{ isset($user->month) && $user->month == $i ? "selected" : ""}}>
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                            <select name="year" id="" class="form-control col-1">
                                @for ($i = 1989; $i <= 2021; $i++)
                                    <option value="{{ $i }}" {{ isset($user->year) && $user->year == $i ? "selected" : ""}}>
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                       </div>
                    </div>
                    <div class="form-userinfo col-3" style="padding: 5px 0px">
                        <label for="password">GENDER</label>
                        <div style="float: right">
                            <input type="radio" id="male" name="gender" class="form-radio gender" value="Male" {{ isset($user->gender) && $user->gender == "Male" ? "checked" : "" }}>
                                <label for="male" style="margin-right: 30px">MALE</label>
                            <input type="radio" id="female" name="gender" class="form-radio gender" value="Female" {{ isset($user->gender) && $user->gender == "Female"  ? "checked" : "" }}>
                                <label for="female">FEMALE</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">ROLE</label>
                        <select class="form-control col-3" name="role" id="" class="@error('role') is-invalid @enderror" data-id="{{ !empty(Session::get('error')) ? 1 : 0 }}">
                            @foreach ($role as $item)
                                @if ($user->role_id == $item->id)
                                    <option value="{{ $item->id }}" selected>{{ $item->role }}</option>
                                @else
                                    <option value="{{ $item->id }}">{{ $item->role }}</option>
                                @endif
                            @endforeach
                        </select>
                            <span class="alertError">
                                @if(!empty(Session::get("error")))
                                    @foreach (Session::get("error") as $key => $item)
                                        @if ($key == "role")
                                            <strong>{{ $item }}</strong>
                                        @endif
                                    @endforeach
                                @else {{ "" }}
                                @endif
                            </span>
                    </div>
                    @error('role')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="submit" value="Save" name="btnUpdateUser" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection