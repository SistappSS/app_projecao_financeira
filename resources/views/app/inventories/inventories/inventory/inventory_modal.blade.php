<x-modal modalId="modalInventory" formId="formInventory" :input="$input">
    <div class="row">
        <x-select col="12" set="" name="product_id" id="product_id" label="Selecionar produto"></x-select>
    </div>

    <div class="row my-3 ">
        <x-textarea name="description" id="description" label="Descrição" col="12" set="" row="5" placeholder="Produto encaminhado para ..."></x-textarea>
    </div>


    <div class="row my-3 ">
        <x-input name="qty" id="qty" label="Quantidade" col="12" set="" type="number" placeholder="10"></x-input>
    </div>

    <div class="row mt-1 mx-1 d-flex flex-column">
        <label class="text-muted fw-bold p-0 mb-1">Movimentação</label>
        <x-radio-input col="12" id="stock_out" name="transaction_type" value="stock_out" type="radio" label="Saída" check="1"></x-radio-input>
        <x-radio-input col="12" id="stock_in" name="transaction_type" value="stock_in" type="radio" label="Entrada"></x-radio-input>
    </div>
</x-modal>

