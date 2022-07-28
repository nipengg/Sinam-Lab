@extends('layouts.sidebar')

<script type="text/javascript">
    function check()
    {
        var old = document.getElementById("old").value;
        var newPass = document.getElementById("new").value;
        var con = document.getElementById("confirm").value;

        if (newPass == con && (newPass != '' || con != ''))
        {
            document.getElementById("Button").disabled = false;
        }
        else
        {
            document.getElementById("Button").disabled = true;
        }
    }
</script>

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Change Password</h3>
                            </div>
                            <div class="panel-body">
                                <form action="" method="POST">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Old Password:</strong>
                                                <input type="password" id="old" name="old" class="form-control"
                                                    placeholder="Old Password" required onkeyup="check()">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>New Password:</strong>
                                                <input type="password" id="new" name="new" class="form-control"
                                                    placeholder="New Password" required onkeyup="check()">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Confirm Password:</strong>
                                                <input type="password" id="confirm" name="confirm" class="form-control"
                                                    placeholder="Confirm Password" required onkeyup="check()">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button id="Button" type="submit" class="btn btn-success" disabled>Update Password</button>
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
