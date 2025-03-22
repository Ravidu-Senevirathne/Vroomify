@extends('layouts.clean', ['cssClass' => 'page-signup'])

@section('title', 'Signup')

@section('childContent')
    <main>
        <x-header-layout />
        <div class="container-small page-login">
            <div class="flex" style="gap: 5rem">
                <div class="auth-page-form">
                    <div class="text-center">
                        <a href="/">
                            <h2 class="logo">Vroomify</h2>
                        </a>
                    </div>
                    <h1 class="auth-page-title">Signup</h1>

                    <form action="" method="post">
                        <div class="form-group">
                            <input type="email" placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Your Password" />
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Confirm Password" />
                        </div>
                        <hr />
                        <div class="form-group">
                            <input type="text" placeholder="First Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Last Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Phone" />
                        </div>
                        <button class="btn btn-primary btn-login w-full">Register</button>

                        <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                            <button class="btn btn-default flex justify-center items-center gap-1">
                                <img src="/img/google.png" alt="" style="width: 20px" />
                                Google
                            </button>
                            <button class="btn btn-default flex justify-center items-center gap-1">
                                <img src="/img/facebook.png" alt="" style="width: 20px" />
                                Facebook
                            </button>
                        </div>
                        <div class="login-text-dont-have-account">
                            Already have an account? -
                            <a href="/login.html"> Click here to login </a>
                        </div>
                    </form>
                </div>
                <div class="auth-page-image">
                    <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
                </div>
            </div>
        </div>
    </main>
@endsection
