<?php

namespace Modules\Menu\MegaMenu;

use Illuminate\Support\Facades\DB;
use Modules\Category\Entities\Category;
use Modules\Product\Entities\Product;

class SubMenu
{
    private $subMenu;
    private $subMenuItems;

    public function __construct($subMenu)
    {
        $this->subMenu = $subMenu;
    }

    public function url()
    {
        return $this->subMenu->url();
    }

    public function slug()
    {
        return $this->subMenu->slug;
    }

    public function target()
    {
        if ($this->subMenu instanceof Category) {
            return '_self';
        }

        return $this->subMenu->target;
    }

    public function name()
    {
        return $this->subMenu->name;
    }
    public function id()
    {
        return $this->subMenu->id;
    }

    public function getProduct(){
      //  echo $cat = $this->slug();
      // $product = Product::leftJoin();
       // $product = DB::table('products')

    }

    public function hasItems()
    {
        return $this->items()->isNotEmpty();
    }

    public function items()
    {
        if (! is_null($this->subMenuItems)) {
            return $this->subMenuItems;
        }

        return $this->subMenuItems = $this->subMenu->items->map(function ($item) {
            return new SubMenu($item);
        });
    }
}
