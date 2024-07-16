<label class="col-12 col-form-label" style="padding: 10px 5px;">{{$label}}</label>
<div class="custom-switch custom-switch-primary col-{{$col}} offset-{{$set}}">
    <input class="custom-switch-input" type="{{$type}}" id="{{$id}}" name="{{$name}}" {{$check == null ? "" : "checked"}}>
    <label class="custom-switch-btn" for="{{$id}}"></label>
</div>
