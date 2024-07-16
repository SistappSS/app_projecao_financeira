<x-modal modalId="modalProductCategory" formId="formProductCategory" :input="$input">
    <div class="row">
        <x-input col="12" set="" id="name" name="name" type="text" label="Categoria de produto" placeholder="Eletrônico, notebook .."></x-input>
    </div>
    <div class="row mx-1">
        <x-check-input col="6" id="is_active" name="is_active" type="checkbox" label="Categoria ativa?" check=""></x-check-input>
    </div>
</x-modal>
