<li class="nav-item">
    <a class="nav-link {{ currentRoute() == $route.'-web.index' ? 'active' : '' }}" href="{{route($route.'-web.index')}}">
        <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid {{$icon}}"></i>
        </div>
        <span class="nav-link-text ms-1">{{$label}}</span>
    </a>
</li>
