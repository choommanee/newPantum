<li class="{{ $menu->hasSubMenus() ? 'dropdown' : '' }} {{ $menu->isFluid() ? 'fluid-menu' : '' }}" id="menu_{{$menu->menu_id()}}">


    @if ($menu->isFluid())
        <a href="{{ $menu->url() }}" class="{{ $menu->hasSubMenus() ? 'dropdown-toggle' : '' }}" target="{{ $menu->target() }}">
            {{ $menu->name() }}
        </a>
        @include('public.partials.mega_menu.fluid')
    @else
        <a href="{{ $menu->url() }}" class="{{ $menu->hasSubMenus() ? 'dropdown-toggle' : '' }}" target="{{ $menu->target() }}">
            {{ $menu->name() }}
        </a>
        @include('public.partials.mega_menu.dropdown', ['subMenus' => $menu->subMenus(), 'class' => 'multi-level'])
    @endif
</li>
