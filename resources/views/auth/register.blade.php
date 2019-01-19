@extends('layouts.default.app')

@section('container')
    <!-- Page Container -->
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
                                <h1 class="h4 font-w700 mt-10 mb-15">{{ __('Criar nova conta') }}</h1>
                                <h2 class="h5 font-w400 text-muted mb-20">{{ __('Estamos felizes em ter você conosco!') }}</h2>
                            </div>
                            <!-- END Header -->

                            <!-- Sign In Form -->
                            <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            {{-- <form class="js-validation-signup" action="be_pages_auth_all.html" method="POST">
                                    @csrf --}}
                            @formOpen('class'=>'form-horizontal','route'=>['register'],'onsubmit'=>'return true;')
                                <div class="block block-themed block-rounded block-shadow">
                                    <div class="block-header bg-gd-emerald">
                                        <h3 class="block-title">{{ __('Por favor, adicione seus dados') }}</h3>
                                    </div>
                                    <div class="block-content">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="name">{{ __('Nome *') }}</label>
                                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                                placeholder="Seu nome ou nome da empresa" value="{{ old('name') }}" autofocus>
                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="cnpj_cpf">{{ __('CNPJ ou CPF *') }}</label>
                                                <input id="cnpj_cpf" type="text" class="form-control{{ $errors->has('cnpj_cpf') ? ' is-invalid' : '' }}" name="cnpj_cpf" 
                                                placeholder="CNPJ da empresa ou seu CPF" value="{{ old('cnpj_cpf') }}" >
                                                @if ($errors->has('cnpj_cpf'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('cnpj_cpf') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="email">{{ __('E-mail*') }}</label>        
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}"
                                                placeholder="Insira um e-mail válido" name="email" >
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="email-confirm">{{ __('Confirmação do seu E-mail*') }}</label>        
                                                <input id="email-confirm" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                placeholder="Confirme seu e-mail" name="email_confirmation">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="password">{{ __('Digite uma senha*') }}</label>        
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{ old('password') }}"
                                                placeholder="******" name="password" >
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="login-password">{{ __('Repita a mesma senha*') }}</label> 
                                                <input id="password-confirm" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                                placeholder="******" name="password_confirmation" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-8 push">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input {{ $errors->has('signup-terms') ? ' is-invalid' : '' }}" id="signup-terms" name="signup-terms" checked {{ old('signup-terms') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="signup-terms">{{ __('Aceito os termos e condições de uso *') }}</label>
                                                    @if ($errors->has('signup-terms'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('signup-terms') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-sm-4 text-sm-right push">
                                                <button type="submit" class="btn btn-alt-success">
                                                    <i class="fa fa-plus mr-10"></i> {{ __('Criar Conta') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content bg-body-light">
                                        <div class="form-group text-center">
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#" data-toggle="modal" data-target="#modal-terms">
                                                <i class="fa fa-book text-muted mr-5"></i> {{ __('Ler os termos de uso') }}
                                            </a>
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('login') }}">
                                                <i class="fa fa-user text-muted mr-5"></i> {{ __('Tenho Cadastro') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @formClose()
                            <!-- END Sign Up Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
@endsection

@push('scripts')
    
@endpush