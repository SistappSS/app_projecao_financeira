<x-modal modalId="modalContractedService" formId="formContractedService" :input="$input">

    <div class="row mb-3">
        <x-input col="12" set="" id="name" name="name" type="text" label="Serviço contratado" placeholder="Canva, envato ..."></x-input>
        <x-input col="12 col-sm-6 mb-3 mb-sm-0" set="" id="price" name="price" type="text" label="Preço" placeholder="59,99"></x-input>
    </div>

    <div class="row mb-3">
        <x-textarea col="12" set="" row="4" id="description" name="description" label="Descrição do serviço" placeholder="Hospedagem da hostinger"></x-textarea>
    </div>

    <div class="row mb-3">
        <x-input col="12" set="" id="hiring_date" name="hiring_date" type="date" label="Data de contratação"></x-input>
        <x-input col="12" set="" id="renewal_date" name="renewal_date" type="date" label="Data de renovação"></x-input>
    </div>

    <div class="row mb-3 mx-1 d-flex flex-column">
        <label class="text-muted fw-bold p-0 mb-1">Pagamento</label>
            <x-radio-input col="3" id="monthly" name="type" type="radio" label="Mensal" check="1"></x-radio-input>
            <x-radio-input col="3" id="yearly" name="type" type="radio" label="Anual"></x-radio-input>
    </div>

    <div class="row mx-1">
        <x-check-input col="4" id="is_active" name="is_active" type="checkbox" label="Serviço ativo?" check="1"></x-check-input>
    </div>
</x-modal>

