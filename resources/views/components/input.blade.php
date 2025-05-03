
<div class="form-group">
    <label for="exampleInputPassword1">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" class="form-control" id="exampleInputName" placeholder="Name" value="{{ old('name') }}">
    <span class="text-danger">
      <!-- @error('name')
      {{ $message }}
      @enderror -->
    </span>
  </div>