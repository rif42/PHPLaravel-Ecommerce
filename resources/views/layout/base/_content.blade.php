{{-- Content --}}
@if (config('layout.content.extended'))
    @yield('content')
@else
    <div class="d-flex flex-column-fluid"  style="background-color:black;">
        <div class="{{ Metronic::printClasses('content-container', false) }}">
            @yield('content')
        </div>
    </div>
@endif
