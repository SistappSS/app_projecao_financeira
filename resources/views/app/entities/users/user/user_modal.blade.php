<x-modal modalId="modalUser" formId="formUser" :input="$input">
    <div class="row">
        <x-input col="12" set="" id="name" name="name" type="text" label="Nome do cliente" placeholder="Nome do cliente .."></x-input>
    </div>
    <div class="form-row">
        <x-input col="12 col-sm-6" set="" id="password" name="password" type="password" label="Senha de acesso" placeholder="Senha de acesso .."></x-input>
        <x-input col="12 col-sm-6" set="" id="password_confirmation" name="password_confirmation" type="password" label="Confirmar senha" placeholder="Confirmar senha .."></x-input>
    </div>
    <div class="row mx-1">
        <x-check-input col="4" id="is_active" name="is_active" type="checkbox" label="Usuário ativo?" check=""></x-check-input>
    </div>
    <div class="row mt-1 mb-3 mx-1 d-flex flex-column">
        <label class="text-muted fw-bold p-0 mb-1">Permissão</label>
        <x-radio-input col="12" id="admin" name="permission" type="radio" label="Administrador"></x-radio-input>
        <x-radio-input col="12" id="plan1" name="permission" type="radio" label="Plano 01" check="1"></x-radio-input>
        <x-radio-input col="12" id="plan2" name="permission" type="radio" label="Plano 02"></x-radio-input>
        <x-radio-input col="12" id="plan3" name="permission" type="radio" label="Plano 03"></x-radio-input>
        <x-radio-input col="12" id="plan4" name="permission" type="radio" label="Plano 04"></x-radio-input>
    </div>
</x-modal>
