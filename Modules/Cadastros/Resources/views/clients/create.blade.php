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
            {{-- <div class="row"> --}}
                <div class="block">
                    @formOpen('class'=>'form-horizontal','route'=>['client.store'],'onsubmit'=>'return true;')
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Informações iniciais</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-group row">
                            @select(['col'=>'2','label'=>'Pessoa','name'=>'person','arrayOptions'=>['Física', 'Jurídica'],'selected'=>null,
                                    'optionsAttributes'=>['placeholder'=>'Tipo pessoa','require'=>'require']])
                            @text(['col'=>'2','label'=>'CNPJ ou CPF','name'=>'cnpj_cpf','value'=>null,
                                    'attributes'=>['placeholder'=>'CNPJ ou CPF']])
                            @text(['col'=>'8','label'=>__('Nome'),'name'=>'name','value'=>null,
                                    'attributes'=>['placeholder'=>'Digite o nome completo','require'=>'require']])
                        </div>
                        <div class="form-group row">
                            @text(['col'=>'3','label'=>'RG ou Ins. Est','name'=>'rg_ie','value'=>null,
                                    'attributes'=>['placeholder'=>'Digite o rg_ie']])
                            @text(['col'=>'3','label'=>'Ins. Munc','name'=>'im','value'=>null,
                                    'attributes'=>['placeholder'=>'Digite Inscrição municipal']])
                            @tel(['col'=>'3','label'=>'Telefone','name'=>'phone','value'=>null,
                                    'attributes'=>['placeholder'=>'Telefone']])
                            @tel(['col'=>'3','label'=>'Celular','name'=>'celphone','value'=>null,
                                    'attributes'=>['placeholder'=>'Celular']])
                        </div>
                        <div class="form-group row">
                            @text(['col'=>'6','label'=>'Apelido','name'=>'nik_name','value'=>null,
                                    'attributes'=>['placeholder'=>'Digite o apelido']])
                            @text(['col'=>'6','label'=>'Contato','name'=>'contact','value'=>null,
                                    'attributes'=>['placeholder'=>'Digite o contato']])
                        </div>
                        <div class="form-group row">
                            @select(['col'=>'2','label'=>'Sexo','name'=>'gender','arrayOptions'=>['Masculino', 'Feminino', 'Transgenero'],'selected'=>null,
                                    'optionsAttributes'=>['placeholder'=>'Gênero','require'=>'require']])
                            @email(['col'=>'5','label'=>'E-mail','name'=>'email','value'=>null,
                                    'attributes'=>['placeholder'=>'seuemail@seusite.com']])
                            @url(['col'=>'5','label'=>'Site','name'=>'site','value'=>null,
                                    'attributes'=>['placeholder'=>'Endereço do Site']])
                        </div>
                        <div class="form-group row">
                            @textArea(['col'=>'12','label'=>'Observação','name'=>'notice','value'=>null,
                                    'attributes'=>['placeholder'=>'placeholder-text','id'=>'id','rows'=>4,'cols'=>54, 'require'=>'require']])
                        </div>
                    </div>
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Endereço</h3>
                    </div>
                    <div class="block-content">
                        @include('components.forms.formAddress')
                        <div class="form-group text-right ">
                            @button(['value'=>'Salvar','attributes'=>['class'=>'btn btn-success', 'type'=>'submit']])
                        </div>
                    </div>
                    @formClose()
                </div>
            {{-- </div> --}}
        
        </div>
        <!-- END Page Content -->
    </main>
@endsection

@push('scripts')
    
@endpush

@push('stylesheet')
    
@endpush