<div class="container-fluid " style="background-color: navy; display: flex;justify-content: space-between; align-items: center;z-index: 4;position: fixed">
    <div>
        <input type="checkbox" id="btn-menu" class="checar">
        <label for="btn-menu" class="lbl-menu" id="sidebarButton">
            <span id="spn1"></span>
            <span id="spn2"></span>
            <span id="spn3"></span>
        </label>
        <a class="navbar-brand" href="{{ url('/') }}">
            <svg style="padding-bottom: 1.5%;padding-top: 1.5%" id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" width="75" height="99" viewBox="0 0 631.97 527.74">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #fff;
                        }
                    </style>
                </defs>
                <path class="cls-1" d="M209.77,229.86,632,527.74,521.75,310.45l-181-104.52,153.07-76.78L479.43,2.77,51.29,0H0L48.39,19.71l4.51,1.82,89.76,49.84,72.78,40.13L310.49,104l-88.9,44.09L209.2,172.58l56.45-.79Zm10.34-70.3L364,89.47,217.71,101l-70-38.6-60-33.68,150-5.74L48.39,10.37,470.21,13.1l12.48,110.09L319,205.35l195,112.53,90,177.46L220.11,224.53l70.33-63.36-31.53.46Z"/>
                <path class="cls-1" d="M290.4,161.13l-64.3.87L258,99.1l-40.42,3.18L158.36,69.51,62.11,198.12,154.44,182,88.89,368.67ZM86,183.49,161.3,82.94l54,29.92,25.17-2L209.2,172.62l56.45-.78-151.42,156,55.83-158.94Z"/>
            </svg>
        </a>
    </div>
        <div style="display: flex;padding-right: 12px;align-items: center;">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <a class="nav-link" href="{{ route('login') }}" style="color: white;margin-right: 12px;font-size: 15px" >{{ __('Login') }}</a>
                @endif

                <a href="{{ route('login') }}" class="nav-link text-light pl-4" style="font-size: 15px">Carrito</a>
            @else
                <li class="nav-item dropdown" style="list-style: none;font-size: 11px;padding-right: 16px;">
                    <a style="color: white;" class="nav-link" href="{{route('cuenta')}}">{{ Auth::user()->name }}</a>
                </li>

                <a href="{{route('cart')}}" class="nav-link text-light pl-4" style="font-size: 15px;">Carrito</a>
            @endguest
        </div>
    </div>

