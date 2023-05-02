<div class="menu-header">
    <a href="#" data-toggle-theme class="border-right-0"><i class="fa font-12 color-yellow-dark fa-moon"></i></a>
    <a href="#" data-menu="menu-share" class="border-right-0"><i class="fa font-12 color-red-dark fa-share-alt"></i></a>
    <a href="{{url('conf')}}" class="border-right-0"><i class="fa font-12 color-blue-dark fa-cog"></i></a>
    <a href="#" class="close-menu border-right-0"><i class="fa font-12 color-red-dark fa-times"></i></a>
</div>

<div class="menu-logo text-center">
    <a href="#"><img class="rounded-circle bg-highlight" width="80" src="{{URL::asset('assets/images/avatars/5s.png')}}"></a>
    <h1 class="pt-3 font-800 font-28 text-uppercase">Fiwiii</h1>
    <p class="font-11 mt-n2">Bienvenido al <span class="color-highlight">Futuro.</span></p>
</div>

<div class="menu-items mb-4">
    <h5 class="text-uppercase opacity-20 font-12 pl-3">Menu</h5>
    <a id="nav-welcome" href="{{url('profile')}}">
        <i class="bi bi-person"></i>
        <span>Perfil</span>
        <i class="fa fa-circle"></i>
        <!-----
        <em class="badge bg-highlight color-white">EJEMPLO</em>
        !------>
    </a>
    <a id="nav-starters" href="#">
        <i class="bi bi-list-nested"></i>
        <span>Gestión</span>
        <i class="fa fa-circle"></i>
    </a>
    <a id="nav-features" href="#">
        <i class="bi bi-upc-scan"></i>
         <span>QR</span>
        <i class="fa fa-circle"></i>
    </a>
    <a href="#" class="close-menu">
        <i class="bi bi-x"></i>
        <span>Close</span>
        <i class="fa fa-circle"></i>
    </a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="close-menu">
        <i class="bi bi-x"></i>
        <span>Cerrar Sesión</span>
        <i class="fa fa-circle"></i>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </a>
</div>

<div class="text-center">
    <a href="#" class="icon icon-xs mr-1 rounded-s bg-facebook"><i class="fab fa-facebook"></i></a>
    <a href="#" class="icon icon-xs mr-1 rounded-s bg-twitter"><i class="fab fa-twitter"></i></a>
    <a href="#" class="icon icon-xs mr-1 rounded-s bg-instagram"><i class="fab fa-instagram"></i></a>
    <a href="#" class="icon icon-xs mr-1 rounded-s bg-linkedin"><i class="fab fa-linkedin-in"></i></a>
    <a href="#" class="icon icon-xs rounded-s bg-whatsapp"><i class="fab fa-whatsapp"></i></a>
    <p class="mb-0 pt-3 font-10 opacity-30">Copyright@2023 <span class="copyright-year"></span> Ilerna Daw Team</p>
</div>
