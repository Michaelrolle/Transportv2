<div>
    @include('sweetalert::alert')
    @if (session('succes'))
    <div class="alert alert-succes">
        {{session('succes')}}
    </div>
    @endif
</div>