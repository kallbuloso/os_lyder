@extends('layouts.default.app')

@section('container')
    <div id="page-container" class="main-content-boxed">
        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="bg-body-dark bg-pattern" style="background-image: url('/assets/img/various/bg-pattern-inverse.png');">
                <div class="row mx-0 justify-content-center">
                    <div class="hero-static col-lg-7 col-xl-5">
                        <div class="content content-full overflow-hidden">
                            <!-- Header -->
                            <div class="text-center">
                                <a class="link-effect font-w700" href="{{ url('/') }}">
                                    @include('layouts.default.logo')
                                </a>
                                <h1 class="h4 font-w700 mt-10 mb-15">{{ __('Não se preocupe, nós podemos ajudar') }}</h1>
                                <h2 class="h5 font-w400 text-muted mb-20">{{ __('Você receberá um e-mail com um link de recuperação.') }}</h2>
                            </div>
                            @if (session('status'))
                                <div class="px-10 py-10">
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                </div>
                            @endif
                            <!-- END Header -->

                            <!-- Forgot Password Form -->
                            <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            @formOpen('class'=>'form-horizontal','route'=>'password.email')
                                <div class="block block-themed block-rounded block-shadow">
                                    <div class="block-header bg-gd-dusk">
                                        <h3 class="block-title">{{ __('Por favor, digite seu e-mail') }}</h3>
                                    </div>
                                    <div class="block-content">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="email">{{ __('Seu email') }}</label>
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" 
                                                placeholder="Digite seu email aqui" value="{{ old('email') }}" autofocus>
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-sm-12 text-right">                                                
                                                <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                                    <i class="fa fa-asterisk mr-10"></i> {{ __('Enviar email recuperador de senha') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content bg-body-light">
                                        <div class="form-group text-center">
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('login') }}">
                                                <i class="fa fa-user text-muted mr-5"></i> {{ __('Lembrei a senha') }}
                                            </a>
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('register') }}">
                                                <i class="fa fa-email mr-5"></i> {{ __('Criar uma conta') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @formClose()
                            <!-- END Sign In Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
@endsection
@push('scripts')
@asset('assets/js/core/jquery.appear.min.js')
@endpush