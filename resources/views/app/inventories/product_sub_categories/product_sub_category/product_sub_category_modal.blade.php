<x-modal modalId="modalProductSubCategory" formId="formProductSubCategory" :input="$input">
    <div class="row">
        <x-select col="12 mb-3" set="" id="category_id" name="category_id" label="Selecionar categoria"></x-select>
    </div>
    <div class="row">
        <x-input col="12" set="" id="name" name="name" type="text" label="Categoria de produto" placeholder="Eletrônico, notebook .."></x-input>
    </div>
    <div class="row mx-1">
        <x-check-input col="6" id="is_active" name="is_active" type="checkbox" label="Sub Categoria ativa?" check=""></x-check-input>
    </div>
</x-modal>
