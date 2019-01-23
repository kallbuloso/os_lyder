@extends('cadastros::layouts.app')

@section('main-container')
    <main id="main-container">
        <!-- Page Content -->
        <!-- Hero -->
        <div class="bg-image bg-image-bottom" style="background-image: url('/assets/img/photos/photo34@2x.jpg');">
            <div class="bg-primary-dark-op">
                <div class="content content-top text-center overflow-hidden">
                    {{--  <div class="pt-50 pb-20">  --}}
                        <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Clientes</h1>
                        <h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear" data-class="animated fadeInUp">Welcome to your custom panel!</h2>
                    {{--  </div>  --}}
                </div>
            </div>
        </div>
        <!-- END Hero -->
        <div class="content">

            <div class="row">
                <!-- Row #1 -->
                <div class="col-md-6 col-xl-3">
                    <a class="block block-bordered block-rounded block-link-shadow text-left" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <div class="float-right mt-10">
                                <i class="si si-bag fa-3x text-elegance-lighter"></i>
                            </div>
                            <div class="font-size-h3 font-w600">34</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-bordered block-rounded block-link-shadow text-left" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <div class="float-right mt-10">
                                <i class="si si-wallet fa-3x text-flat-lighter"></i>
                            </div>
                            <div class="font-size-h3 font-w600">$780</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-bordered block-rounded block-link-shadow text-left" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <div class="float-right mt-10">
                                <i class="si si-globe fa-3x text-earth-lighter"></i>
                            </div>
                            <div class="font-size-h3 font-w600">65</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Online</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-bordered block-rounded block-link-shadow text-left" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <div class="float-right mt-10">
                                <i class="si si-briefcase fa-3x text-pulse-lighter"></i>
                            </div>
                            <div class="font-size-h3 font-w600">7</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Projects</div>
                        </div>
                    </a>
                </div>
                <!-- END Row #1 -->
            </div>
            <!-- SweetAlert2 (demo functionality is initialized in js/pages/be_ui_activity.js) -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Clientes') }}</h3>
                    <div class="block-options">
                        <a href="{{ route('client.create') }}">
                            <button class="btn btn-primary">
                                <span class="sidebar-mini-hide">
                                    <i class="si si-wallet mr-5"></i>
                                    {{ __('Adicionar Novo Cliente') }}
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="row items-push">
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                    <table class="table table-striped table-vcenter js-dataTable-custom">
                        <thead>
                            <tr>
                                <th class="text-center">{{ __('ID') }}</th>
                                <th>{{ __('Nome') }}</th>
                                <th>{{ __('Pessoa') }}</th>
                                <th>{{ __('Documento') }}</th>
                                <th >{{ __('Email') }}</th>
                                <th >{{ __('Status') }}</th>
                                <th class="text-center"  style="width: 100px;">Profile</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)                                
                            <tr>
                                <td class="text-center">{{ $client->id }}</td>
                                <td class="font-w600">{{ $client->name }}</td>
                                <td class="d-none d-sm-table-cell">{{ $client->type == 0 ? 'Física' : 'Jurídica' }}</td>
                                <td class="d-none d-sm-table-cell">{{ $client->cnpj_cpf }}</td>
                                <td class="d-none d-sm-table-cell">{{ $client->email }}</td>
                                <td class="d-none d-sm-table-cell">
                                    {!! $client->status == 1 ? 
                                        '<span class="badge badge-success">Ativo</span>' : 
                                        '<span class="badge badge-danger">Bloqueado</span>' !!}
                                    </td>
                                <td class="text-center">                                    
                                    <div class="btn-group">
                                            <a class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Ver" href="{{ route('client.show',$client) }}" target="_blank">
                                                <i class="fa fa-eye"></i>
                                            </a>   
                                            <a class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Editar" href="{{ route('client.edit',$client) }}">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form action="{{ route('client.destroy', $client) }}" method="POST" >
                                                @csrf {{ method_field('DELETE') }}
                                                <button class="btn btn-sm btn-danger" type="submit" data-toggle="tooltip" title="Excluir"
                                                    onclick="return confirm('Deseja realmente excluir o artigo {{ $client->title }}?')">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach                     
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <!-- END SweetAlert2 -->

        
        </div>
        <!-- END Page Content -->
    </main>
@endsection

@push('scripts')
<!-- Page JS Plugins -->
@asset('assets/js/plugins/datatables/jquery.dataTables.min.js')
@asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')
<!-- Page JS Code -->
@asset('assets/js/pages/be_tables_datatables.js')

@endpush

@push('stylesheet')
@asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.css')

@endpush