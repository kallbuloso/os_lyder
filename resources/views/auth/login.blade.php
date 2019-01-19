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
                                <h1 class="h4 font-w700 mt-10 mb-15">{{ __('Acessar o sistema') }}</h1>
                                <h2 class="h5 font-w400 text-muted mb-20">{{ __('Estamos felizes em ter você conosco!') }}</h2>
                            </div>
                            <!-- END Header -->

                            <!-- Sign In Form -->
                            <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            @formOpen('class'=>'form-horizontal','route'=>'login')
                                <div class="block block-themed block-rounded block-shadow">
                                    <div class="block-header bg-gd-dusk">
                                        <h3 class="block-title">{{ __('Por favor, entre com seus dados') }}</h3>
                                    </div>
                                    <div class="block-content">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="cnpj_cpf">{{ __('CNPJ ou CPF *') }}</label>
                                                <input id="cnpj_cpf" type="text" class="form-control{{ $errors->has('cnpj_cpf') ? ' is-invalid' : '' }}" name="cnpj_cpf" 
                                                placeholder="CNPJ da empresa ou seu CPF" value="{{ old('cnpj_cpf') }}" autofocus>
                                                @if ($errors->has('cnpj_cpf'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('cnpj_cpf') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="login-password">{{ __('Senha') }}</label>        
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                                placeholder="******" name="password" >
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-sm-6 d-sm-flex align-items-center push">
                                                <div class="custom-control custom-checkbox mr-auto ml-0 mb-0">
                                                    <input type="checkbox" class="custom-control-input" id="login-remember-me" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="login-remember-me">{{ __('Remember Me') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-sm-right push">
                                                <button type="submit" class="btn btn-alt-primary">
                                                    <i class="si si-login mr-10"></i> {{ __('Entrar') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content bg-body-light">
                                        <div class="form-group text-center">
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('register') }}">
                                                <i class="fa fa-plus mr-5"></i> {{ __('Criar uma conta') }}
                                            </a>
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('password.request') }}">
                                                <i class="fa fa-warning mr-5"></i> {{ __('Esqueci a senha') }}
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
