<?php

namespace Modules\Serials\Sidebar;

use Maatwebsite\Sidebar\Menu;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Group;
use Modules\Admin\Sidebar\BaseSidebarExtender;

class SidebarExtender extends BaseSidebarExtender
{
   // use InstantiatesSidebarExtender;

    /**
     * @param \Maatwebsite\Sidebar\Menu $menu
     * @return \Maatwebsite\Sidebar\Menu
     */
    public function extend(Menu $menu)
    {
        $menu->group(trans('admin::sidebar.content'), function (Group $group) {
            $group->item(trans('serials::serials.serials'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(26);
                $item->route('admin.serials.index');
                $item->authorize(
                    $this->auth->hasAccess('admin.serials.index')
                );



            });
        });

        return $menu;
    }
}
