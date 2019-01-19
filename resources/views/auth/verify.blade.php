@extends('layouts.default.app')

@section('container')
    <div id="page-container" class="main-content-boxed">
        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="hero bg-white">
                <div class="hero-inner">
                    <div class="content content-full">
                        <div class="py-30 text-center">
                            <div class="display-3 text-warning">
                                    <a class="link-effect font-w700" href="{{ url('/') }}">
                                        @include('layouts.default.logo')
                                    </a>
                                @if (session('resent'))
                                    <h1 class="h2 font-w700 mt-30 mb-10">{{ __('Reenvio de confirmação de E-mail!') }}</h1>
                                    <h2 class="h3 font-w400 text-muted mb-50">{{ __('Um e-mail de verificação foi reenviado para: '. Auth::user()->email) }}</h2>
                            </div>                                
                                @else
                                    <h1 class="h2 font-w700 mt-30 mb-10">{{ __('Cadastro efetuado com sucesso!') }}</h1>
                                    <h3 class="h4 font-w400 text-muted mb-10">{{ __('Abra seu e-mail e clique no botão de  confirmação.') }}</h3>
                                    <h3 class="h4 font-w400 text-muted mb-30">{{ __('Caso você não tenha recebido o e-mail clique no botão abaixo para enviarmos novamente') }}.</h3>
                            </div>
                            <a class="btn btn-hero btn-rounded btn-alt-secondary" href="{{ route('verification.resend') }}">
                                <i class="fa fa-plus mr-10"></i> {{ __('Reenviar e-mail de verificação') }}
                            </a>
                                @endif
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
