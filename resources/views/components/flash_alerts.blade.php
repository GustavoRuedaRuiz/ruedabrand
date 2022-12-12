@if (session('message'))
    @component( 'components.alert')
        @slot( 'class', 'success')
        @slot( 'name', 'Éxito')
        @slot( 'message', session('message') )
    @endcomponent
@endif

@if (session('info'))
    @component( 'components.alert' )
        @slot( 'class', 'info' )
        @slot( 'name', 'Información' )
        @slot( 'message', session('info') )
    @endcomponent
@endif

@if (session('warning'))
    @component( 'components.alert')
        @slot( 'class', 'warning')
        @slot( 'name', 'Advertencia' )
        @slot( 'message', session('warning') )
    @endcomponent
@endif

@if (session('danger'))
    @component( 'components.alert')
        @slot( 'class', 'danger')
        @slot( 'name', 'Error' )
        @slot( 'message', session('danger') )
    @endcomponent
@endif

@if (session('secondary'))
    @component( 'components.alert')
        @slot( 'class', 'secondary')
        @slot( 'name', 'Secondary' )
        @slot( 'message', session('secondary') )
    @endcomponent
@endif
