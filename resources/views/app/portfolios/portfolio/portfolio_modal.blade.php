<x-modal modalId="modalPortfolio" formId="formPortfolio" :input="$input">
    <div class="row mb-3">
        <x-input col="12 col-sm-6 mb-3 mb-sm-0" set="" id="title" name="title" type="text" label="Título" placeholder="Hanna for Kids"></x-input>
        <x-input col="12 col-sm-6 mb-3 mb-sm-0" set="" id="name" name="name" type="text" label="Nome" placeholder="Loja virtual"></x-input>
    </div>

    <div class="row mb-3">
        <x-input col="12 col-sm-6 mb-3 mb-sm-0" set="" id="image" name="image" type="file" label="Vídeo" enctype="1"></x-input>
    </div>

    <div class="row mb-3">
        <x-input col="12 col-sm-6 mb-3 mb-sm-0" set="" id="customer" name="customer" type="text" label="Cliente" placeholder="Hanna for Kids"></x-input>
        <x-input col="12 col-sm-6 mb-3 mb-sm-0" set="" id="access_link" name="access_link" type="text" label="Link de acesso" placeholder="https://sistapp.com.br/"></x-input>
    </div>

    <div class="row">
        <x-input col="12 col-sm-6 mb-3 mb-sm-0" set="" id="framework" name="framework" type="text" label="Ferramentas utilizadas" placeholder="Wordpress, PHP .."></x-input>
        <x-input col="12 col-sm-6 mb-3 mb-sm-0" set="" id="duration" name="duration" type="number" label="Tempo gasto (dias)"></x-input>
    </div>

    <div class="row my-3">
        <x-check-input col="5 ms-2" id="is_active" name="is_active" type="checkbox" label="Projeto ativo?" check=""></x-check-input>
    </div>
</x-modal>
