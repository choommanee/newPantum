<li class="{{ $menu->hasSubMenus() ? 'dropdown' : '' }} {{ $menu->isFluid() ? 'fluid-menu' : '' }}" id="menu_{{$menu->menu_id()}}">


    @if ($menu->isFluid())
        @if($menu->menu_id() <>'7')
        <a href="{{ $menu->url() }}" class="{{ $menu->hasSubMenus() ? 'dropdown-toggle' : '' }}" target="{{ $menu->target() }}">
           {{ $menu->name() }}
        </a>
        @else
            <a href="#" class="{{ $menu->hasSubMenus() ? 'dropdown-toggle' : '' }}" >
                {{ $menu->name() }}
            </a>
            @endif
        @include('public.partials.mega_menu.fluid')
    @else
        @if($menu->menu_id() <>'7')
        <a href="{{ $menu->url() }}" class="{{ $menu->hasSubMenus() ? 'dropdown-toggle' : '' }}" target="{{ $menu->target() }}">
          {{ $menu->name() }}
        </a>
        @else
            <a href="#" class="{{ $menu->hasSubMenus() ? 'dropdown-toggle' : '' }}" target="{{ $menu->target() }}">
                {{ $menu->name() }}
            </a>
        @endif
        @include('public.partials.mega_menu.dropdown', ['subMenus' => $menu->subMenus(), 'class' => 'multi-level'])
    @endif
</li>
