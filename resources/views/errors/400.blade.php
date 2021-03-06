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
                            <div class="display-3 text-warning">400</div>
                            <h1 class="h2 font-w700 mt-30 mb-10">Oops.. You just found an error page..</h1>
                            <h2 class="h3 font-w400 text-muted mb-50">We are sorry but your request contains bad syntax and cannot be fulfilled..</h2>
                            <a class="btn btn-hero btn-rounded btn-alt-secondary" href="be_pages_error_all.html">
                                <i class="fa fa-arrow-left mr-10"></i> Back to all Errors
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
@endsection