<div class="col-{{ $col }} offset-{{ $set }}">
    <div class="form-group">
        <label class="text-muted fw-bold" for="{{$id}}">{{$label}}</label>
        <select name="{{ $name }}"  id="{{ $id }}" multiple>{{$slot}}</select>
    </div>
</div>
