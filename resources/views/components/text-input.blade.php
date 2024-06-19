@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'py-3 px-4 rounded-sm border border-coolGray-200 bg-white outline-none focus:ring-1 ring-indigo-400']) !!}>
