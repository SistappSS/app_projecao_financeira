<div class="modal fade modal-right" id="{{$modalId}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalRight" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="modal-content" id="{{$formId}}" enctype="multipart/form-data">
            @csrf

            @if ($input)
                <input type="hidden" name="{{ $input['name'] }}" value=""/>
                @isset($input['name2'])
                    <input type="hidden" name="{{ $input['name2'] }}" value=""/>
                @endisset
            @endif

            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

            <x-alert id="alert-error"/>
                {{ $slot }}
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary"></button>
            </div>
        </form>
    </div>
</div>
