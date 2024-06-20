@include('layouts.header')

@include('layouts.navigation')

<div class="">
    {{ $slot }}
</div>

@include('layouts.footer')

