<?php

namespace Modules\Drivers\Sidebar;

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
            $group->item(trans('drivers::drivers.drivers'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(27);
                $item->route('admin.drivers.index');
                $item->authorize(
                     /* append */
                    $this->auth->hasAccess('admin.drivers.index')
                );

            });
        });

        return $menu;
    }
}
