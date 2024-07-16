<div class="form-group col-{{ $col }} offset-{{ $set }}">
    <label for="{{$id}}">{{$label}}</label>
    <input type="{{ $type }}" class="form-control" id="{{ $id }}" name="{{ $name }}" placeholder="{{ $placeholder }}" {{ $disable == null ? "" : "disabled"}} max="{{$max}}" min="{{$min}}" {{ $read == null ? "" : "readonly"}} value="{{$value}}">
</div>

