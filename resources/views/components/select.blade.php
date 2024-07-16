<div class="col-{{ $col }} offset-{{ $set }}">
    <label>{{$label}}</label>
    <select class="form-control select2-multiple" multiple="multiple" data-width="100%" name="{{ $name }}" id="{{ $id }}">
        {{$slot}}
    </select>
</div>
