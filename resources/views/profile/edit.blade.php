@extends('layouts.sidebar')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit Profile</h3>
                                <h4 class="panel-title">Joined in {{ $user->created_at }}</h3>
                            </div>
                            <div class="panel-body">
                                <form action="" method="POST">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Username :</strong>
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Username" value="{{ $user->name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Email :</strong>
                                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
