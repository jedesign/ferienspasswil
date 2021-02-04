@props([
    'autocomplete' => '',
    'autofocus'    => false,
    'label'        => '',
    'placeholder'     => '',
    'required'     => false,
    'type'         => 'text',
])
@php $id = $attributes->wire('model')->value @endphp
@php $class = $attributes->get('class') @endphp
<div @if($class) class="{{ $class }}" @endif>
    <label for="{{ $id }}">{{ $label }}</label>
    <input
        id="{{ $id }}"
        type="{{ $type }}"
        {{$attributes->wire('model')}}
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        @if($required) required @endif
        @if($autofocus) autofocus @endif
        @if($autocomplete) autocomplete="{{ $autocomplete }}" @endif
    />
    @error($id)<p class="text-red-800">{{ $message }}</p>@enderror
</div>
