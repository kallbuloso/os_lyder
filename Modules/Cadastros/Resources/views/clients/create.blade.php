@extends('cadastros::layouts.app')

@section('main-container')
    <main id="main-container">
        <!-- Page Content -->
        <!-- Hero -->
        <div class="bg-image bg-image-bottom" style="background-image: url('/assets/img/photos/photo34@2x.jpg');">
            <div class="bg-primary-dark-op">
                <div class="content content-top text-center overflow-hidden">
                    {{--  <div class="pt-50 pb-20">  --}}
                        <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Cadastrar novo Cliente</h1>
                        <h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear" data-class="animated fadeInUp">Welcome to your custom panel!</h2>
                    {{--  </div>  --}}
                </div>
            </div>
        </div>
        <!-- END Hero -->
        <div class="content">

            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Informações iniciais</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        
                    </div>
                </div>
                <div class="block-header block-header-default">
                    <h3 class="block-title">Endereço</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-md-3">
                            <button type="button" class="js-swal-success btn btn-alt-secondary">
                                <i class="fa fa-check text-success mr-5"></i> Success
                            </button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="js-swal-info btn btn-alt-secondary">
                                <i class="fa fa-info text-info mr-5"></i> Info
                            </button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="js-swal-warning btn btn-alt-secondary">
                                <i class="fa fa-warning text-warning mr-5"></i> Warning
                            </button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="js-swal-error btn btn-alt-secondary">
                                <i class="fa fa-times text-danger mr-5"></i> Error
                            </button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="js-swal-alert btn btn-alt-secondary">Simple</button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="js-swal-question btn btn-alt-secondary">
                                <i class="fa fa-question mr-5"></i> Question
                            </button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="js-swal-confirm btn btn-alt-secondary">
                                <i class="fa fa-check"></i> Confirm
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        
        </div>
        <!-- END Page Content -->
    </main>
@endsection

@push('scripts')
    
@endpush

@push('stylesheet')
    
@endpush