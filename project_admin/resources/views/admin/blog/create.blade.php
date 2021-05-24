@extends('layouts.admin')
@section('content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Add Blog
            </div>
            <div class="card-body">
                <form action="{{ route("blog.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group d-block">
                        <label for="title">Blog Title</label>
                        <input class="form-control" type="text" name="title" id="title" class="@error('title') is-invalid @enderror">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group d-block">
                        <label for="image">Blog Image</label>
                        <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Blog Content</label>
                        <textarea class="form-control" name="content" id="content" cols="30" rows="5" class="@error('content') is-invalid @enderror"></textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <select class="form-control" name="category" id="" class="@error('category') is-invalid @enderror">
                            <option value=""></option>
                            @foreach ($blogCategory as $item)
                                <option value="{{ $item->id }}">{{ $item->title_category_blog }}</option>
                            @endforeach
                        </select>
                    </div>
                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <div class="form-group">
                        <label for="">Status</label>
                        @foreach ($status as $item)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="{{ $item->id }}" checked class="@error('status') is-invalid @enderror">
                                <label class="form-check-label" for="exampleRadios1">
                                    {{ $item->status }}
                                </label>
                            </div>
                        @endforeach
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input type="submit" value="Add Blog" name="btnAddBlog" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

{{-- Quản lý TinyMCE --}}
    <script src="https://cdn.tiny.cloud/1/bwy4xl6l6nsbuuvte9krlgudw8y7hrunxzanj90ilf4n3gia/tinymce/5/tinymce.min.js"></script>
    <script>
        var editor_config = {
          path_absolute : "http://localhost/project_websitebanhang/project_admin/",
          selector: 'textarea',
          relative_urls: false,
          plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table directionality",
            "emoticons template paste textpattern"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
          file_picker_callback : function(callback, value, meta) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
      
            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
            if (meta.filetype == 'image') {
              cmsURL = cmsURL + "&type=Images";
            } else {
              cmsURL = cmsURL + "&type=Files";
            }
      
            tinyMCE.activeEditor.windowManager.openUrl({
              url : cmsURL,
              title : 'Filemanager',
              width : x * 0.8,
              height : y * 0.8,
              resizable : "yes",
              close_previous : "no",
              onMessage: (api, message) => {
                callback(message.content);
              }
            });
          }
        };
      
        tinymce.init(editor_config);
    </script>
{{-- ======================= --}}
@endsection