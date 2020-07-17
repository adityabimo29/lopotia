@extends("layouts.global")
@section("title") Create User @endsection
@section("breadcumb") Create User @endsection
@section("content")
<div class="container-fluid">
    <div class="col-md-8 offset-md-2 card card-default">
        <div class="card-header">
            <h3 class="card-title">User</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <form enctype="multipart/form-data" class="p-3" action="{{ route('users.store') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" placeholder="Full Name" type="text" name="name" id="name" />
                    </div>
                    
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" placeholder="username" type="text" name="username" id="username" />
                    </div>
                    
                    <div class="form-group">
                        <label for="">Roles</label>
                        <select name="roles[]" class="form-control">
                            <option value="ADMIN">Admin</option>
                            <option value="STAFF">Staff</option>
                            <option value="CUSTOMER">Customer</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone number</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputFile">Avatar</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" placeholder="user@mail.com" type="text" name="email" id="email" />
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" placeholder="password" type="password" name="password" id="password" />
                    </div>
                    
                    <div class="form-group">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input class="form-control" placeholder="password confirmation" type="password" name="password_confirmation" id="password_confirmation" />
                    </div>
                    
                    <input class="btn btn-primary" type="submit" value="Save" />
            </form>
        </div>
    </div>
</div>
@endsection