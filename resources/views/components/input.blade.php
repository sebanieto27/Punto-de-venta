@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'intro-x login__input form-control py-3 px-4 border-gray-300 block']) !!}>
