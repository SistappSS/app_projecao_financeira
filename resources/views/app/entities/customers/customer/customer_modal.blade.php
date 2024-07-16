<x-modal modalId="modalCustomer" formId="formCustomer" :input="$input">
    <div class="row">
        <x-input col="12" set="" id="name" name="name" type="text" label="Nome do cliente" placeholder="Sistapp Soluções e Sistemas"></x-input>
        <x-input col="12" set="" id="document" name="document" type="text" label="CNPJ/CPF" placeholder="CNPJ/CPF"></x-input>
    </div>

    <div class="row">
        <x-input col="12 col-sm-8" set="" id="phone" name="phone" type="text" label="Telefone" placeholder="(11) 99999-9999"></x-input>
    </div>

    <div class="row">
        <x-input col="12" set="" id="address" name="address" type="text" label="Endereço" placeholder="Rua sistapp, n° 130"></x-input>
        <x-input col="12 col-sm-8" set="" id="postal_code" name="postal_code" type="text" label="CEP" placeholder="00000-000"></x-input>
    </div>

    <div class="row">
        <x-input col="12 col-sm-8" set="" id="city" name="city" type="text" label="Cidade" placeholder="São Paulo" disable="1"></x-input>
        <x-select col="12 col-sm-8" set="" id="state_id" name="state_id" label="Selecione o estado"></x-select>
    </div>

    <div class="row mx-1">
        <x-check-input col="6" id="is_active" name="is_active" type="checkbox" label="Cliente ativo?" check=""></x-check-input>
    </div>
</x-modal>
