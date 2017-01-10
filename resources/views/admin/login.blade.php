<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {!! Html::style("assets/global/plugins/font-awesome/css/font-awesome.min.css") !!}
    {!! Html::style("assets/global/plugins/simple-line-icons/simple-line-icons.min.css") !!}
    {!! Html::style("assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css") !!}
    <style type="text/css">

        /* Credit to bootsnipp.com for the css for the color graph */
        .colorgraph {
            height: 5px;
            border-top: 0;
            background: #c4e17f;
            border-radius: 5px;
            background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        }
    </style>
</head>

<div class="container">
    <div class="row">
        {{-- @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            @if (!App\admin::all()->count() > 0)
                {!! Form::open(['method' => 'POST', 'url' => 'saveInfoAdmin', 'class' => 'form-horizontal']) !!}
                <h2>Welcome To <small> Admin Panel .</small></h2>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-lg-12 col-sm-6 col-md-6">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::text('name', null, ['class' => 'form-control input-lg','placeholder'=>"First Name"]) !!}
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-sm-6 col-md-6">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {!! Form::text('email', null, ['class' => 'form-control input-lg','placeholder'=>"Email Address"]) !!}
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-sm-6 col-md-6">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {!! Form::password('password',['class' => 'form-control input-lg','placeholder'=>"password"]) !!}
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                        </div>
                    </div>
                </div>

                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-md-6 pull-right">
                        <button type="submit" class='btn btn-primary btn-block btn-lg '>
                            <i class="fa fa-registered" aria-hidden="true"></i>
                            Register
                        </button>
                    </div>
                </div>

                {!! Form::close() !!}
            @else
                <br /><div class="row">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <h2>Welcome To <small> Admin Panel .</small></h2>
                <hr class="colorgraph">
                {!! Form::open(['method' => 'POST', 'url' => 'admin/login', 'class' => 'form-horizontal']) !!}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    {!! Form::text('email', null, ['class' => 'form-control input-lg','placeholder'=>'Email Address']) !!}
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                    {!! Form::password('password', ['class' => 'form-control input-lg','placeholder'=>'Password']) !!}
                    <small class="text-danger">{{ $errors->first('password') }}</small>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-6 pull-right">
                        <button type="submit" class='btn btn-primary btn-block btn-lg'>
                            <i class="fa fa-sign-in" aria-hidden="true"></i> Login
                        </button>
                    </div>
                </div>
                {!! Form::close() !!}
                <hr class="colorgraph">
            @endif
        </div>
    </div>


</div>


</body>
</html>

