@extends('layouts.admin')
@section('content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                ADD USER
            </div>
            <div class="card-body">
                <form action="{{ route("user.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group d-block">
                        <label for="title">USERNAME</label>
                        <input class="form-control col-3" type="text" name="name" id="name" class="@error('name') is-invalid @enderror">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group d-block">
                        <label for="image">IMAGE</label>
                        <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group d-block">
                        <label for="email">EMAIL</label>
                        <input class="form-control col-3" type="text" name="email" d="email" class="@error('email') is-invalid @enderror">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="alertError">
                            @if(!empty($error))
                                @foreach ($error as $key => $item)
                                    @if ($key == "email")
                                        <strong>{{ $item }}</strong>
                                    @endif
                                @endforeach
                            @else {{ "" }}
                            @endif
                        </span>
                    </div>
                    <div class="form-group d-block">
                        <label for="phoneNumber">PHONE NUMBER</label>
                        <input class="form-control col-3" type="text" name="phoneNumber" d="phoneNumber" class="@error('phoneNumber') is-invalid @enderror">
                        @error('phoneNumber')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">BIRTHDAY</label><b> (Day/Month/Year)</b><br>
                       <div class="d-flex">
                            <select name="day" id="" class="form-control col-1">
                                @for ($i = 0; $i <= 31; $i++)
                                    <option value="{{ $i }}">
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                            <select name="month" id="" class="form-control col-1">
                                @for ($i = 0; $i <= 12; $i++)
                                    <option value="{{ $i }}">
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                            <select name="year" id="" class="form-control col-1">
                                @for ($i = 1989; $i <= 2021; $i++)
                                    <option value="{{ $i }}">
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                       </div>
                    </div>
                    <div class="form-userinfo col-3" style="padding: 5px 0px">
                        <label for="password">GENDER</label>
                        <div style="float: right">
                            <input type="radio" id="male" name="gender" class="form-radio gender" value="Male">
                                <label for="male" style="margin-right: 30px">MALE</label>
                            <input type="radio" id="female" name="gender" class="form-radio gender" value="Female">
                                <label for="female">FEMALE</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">ROLE</label>
                        <select class="form-control col-3" name="role" id="" class="@error('role') is-invalid @enderror">
                            @foreach ($role as $item)
                                <option value="{{ $item->id }}">{{ $item->role }}</option>
                            @endforeach
                        </select>
                    </div>
                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="alertError">
                            @if(!empty($error))
                                @foreach ($error as $key => $item)
                                    @if ($key == "role")
                                        <strong>{{ $item }}</strong>
                                    @endif
                                @endforeach
                            @else {{ "" }}
                            @endif
                        </span>
                    <input type="submit" value="ADD" name="btnAddUser" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection