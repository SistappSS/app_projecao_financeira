<x-modal modalId="modalProduct" formId="formProduct" :input="$input">
    <div class="row">
        <x-select col="12" set="" name="category_id" id="category_id" label="Categoria do produto"></x-select>
        <x-select col="12 my-3" set="" name="sub_category_id" id="sub_category_id" label="Sub Categoria do produto"></x-select>
    </div>

    <div class="row">
        <x-input col="12" set="" id="name" name="name" type="text" label="Produto" placeholder="Notebook g15"></x-input>
        <x-input col="12 col-sm-8" set="" id="price" name="price" type="text" label="Valor produto" placeholder="499,99"></x-input>
    </div>

    <div class="row">
        <x-input col="12" set="" id="image" name="image" type="file" label="Imagem do produto" enctype="1"></x-input>
    </div>

    <div class="row">
        <x-input col="12 col-sm-6" set="" id="qty" name="qty" type="number" label="Quantidade em estoque" placeholder="15"></x-input>
        <x-textarea col="12" set="" row="5" name="description" id="description" label="Descrição" placeholder="O produto possui ..."></x-textarea>
    </div>

    <div class="row mx-1">
        <x-check-input col="4" id="is_active" name="is_active" type="checkbox" label="Produto ativo?" check=""></x-check-input>
    </div>
</x-modal>
