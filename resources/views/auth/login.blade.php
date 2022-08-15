@extends('layouts.start')

@section('content')


<div class="container-fluid">
        <div class="login-wrapper row">
            <div id="login" class="login loginpage col-lg-offset-4 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 col-xs-12 col-sm-6 col-lg-4">    
                <div class="login-form-header">
                     <img src="{{ asset('data/icons/padlock.png') }}" alt="login-icon" style="max-width:64px">
                     <div class="login-header">
                         <h4 class="bold color-white">Login Now!</h4>
                         <h4><small>Please enter your credentials to login.</small></h4>
                     </div>
                </div>
               
                <div class="box login">

                    <div class="content-body" style="padding-top:30px">

                        <form id="msg_validate" method="POST" action="{{ route('login') }}" novalidate="novalidate" class="no-mb no-mt">
                        @csrf    
                        <div class="row">
                                <div class="col-xs-12">

                                    <div class="form-group">
                                        <label class="form-label">Username</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="email" placeholder="Mr. Example">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <div class="controls">
                                            <input type="password" class="form-control" name="password" placeholder="password">
                                        </div>
                                    </div>

                                    <div class="pull-left">
                                        <button type="submit" class="btn btn-primary mt-10 btn-corner right-15">
                                            Log in
                                        </button>
                                        <a href="{{ route('register') }}" class="btn mt-10 btn-corner signup">Sign up</a>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <p id="nav">
                    <a class="pull-left" href="#" title="Password Lost and Found">Forgot password?</a>
                    <a class="pull-right" href="ui-register.html" title="Sign Up">Sign Up</a>
                </p>

            </div>
        </div>
    </div>

@endsection
