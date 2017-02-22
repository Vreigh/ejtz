<div class="form-group">
    <label for="color">Color</label>
    <input type="color"  id="color" name="color" @if(isset($instance)) value="{{$instance->color}}" @endif class="form-control">
</div>


