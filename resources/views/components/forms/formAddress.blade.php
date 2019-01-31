<div class="form-group row">
    @select(['col'=>'2','label'=>'Tipo','name'=>'type_address','arrayOptions'=>['Residencial', 'Comercial', 'Correspondência'],'selected'=>null,
            'optionsAttributes'=>['placeholder'=>'Selecione um','require'=>'require']])
    @text(['col'=>'3','label'=>'CEP','name'=>'zipcode','value'=>null,
            'attributes'=>['placeholder'=>'Digite o cep']])
    @text(['col'=>'7','label'=>'Endereço','name'=>'address','value'=>null,
            'attributes'=>['placeholder'=>'Digite o endereco']])
</div>
<div class="form-group row">
    @text(['col'=>'2','label'=>'Número','name'=>'number','value'=>null,
            'attributes'=>['placeholder'=>'Número']])
    @text(['col'=>'3','label'=>'Complemento','name'=>'complement','value'=>null,
            'attributes'=>['placeholder'=>'Ex: Apartamento 25 - Bl 18']])
    @text(['col'=>'7','label'=>'Bairro','name'=>'district','value'=>null,
            'attributes'=>['placeholder'=>'Digite o bairro']])
</div>
<div class="form-group row">
    @text(['col'=>'10','label'=>'Cidade','name'=>'city','value'=>null,
            'attributes'=>['placeholder'=>'Digite a cidade']])
    @text(['col'=>'2','label'=>'Estado','name'=>'state','value'=>null,
            'attributes'=>['placeholder'=>'UF']])
</div>