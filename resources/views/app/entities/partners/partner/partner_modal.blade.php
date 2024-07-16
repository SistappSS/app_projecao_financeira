<x-modal modalId="modalPartner" formId="formPartner" :input="$input">
    <div class="row">
        <x-select col="12 mb-3" set="" id="user_id" name="user_id" label="Selecionar usuário"></x-select>
        <x-input col="12" set="" id="salary_percent" name="salary_percent" type="number" label="Porcentagem do salário" placeholder="15"></x-input>
    </div>
</x-modal>
