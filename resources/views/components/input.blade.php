@props(['type' => 'text', 'name', 'label', 'value' => ''])

<div class="form-group">
  <label for="{{ $name }}">{{ $label }}</label>
  <input
      type="{{ $type }}"
      name="{{ $name }}"
      class="form-control"
      id="{{ $name }}"
      placeholder="{{ $label }}"
      value="{{ old($name, $value) }}"
  >
  <span class="text-danger">
      {{-- @error($name)
          {{ $message }}
      @enderror --}}
  </span>
</div>
