<x-modal modalId="modalService" formId="formService" :input="$input">

    <div class="row mb-3">
        <x-input col="12" set="" id="name" name="name" type="text" label="Serviço" placeholder="Landing Page"></x-input>
        <x-input col="12 col-sm-6 mb-3 mb-sm-0" set="" id="price" name="price" type="text" label="Valor do serviço" placeholder="499,00"></x-input>
    </div>

    <div class="row mb-3">
        <x-textarea col="12" set="" row="4" id="description" name="description" label="Descrição" placeholder="Desenvolvimento de landing page"></x-textarea>
    </div>

    <div class="row mb-3 mx-1 d-flex flex-column">
        <label class="text-muted fw-bold p-0 mb-1">Pagamento</label>
        <x-radio-input col="12" id="payment_unique" name="type" type="radio" label="Pagamento único" check="1"></x-radio-input>
        <x-radio-input col="12" id="monthly" name="type" type="radio" label="Mensal"></x-radio-input>
        <x-radio-input col="12" id="yearly" name="type" type="radio" label="Anual"></x-radio-input>
    </div>

</x-modal>
