<?php

namespace Modules\News\Admin;

use Modules\Admin\Ui\Tab;
use Modules\Admin\Ui\Tabs;

class NewsTabs extends Tabs
{
    public function make()
    {
        $this->group('news_information', trans('news::news.tabs.group.news_information'))
            ->active()
            ->add($this->general())
            ->add($this->images())
            ->add($this->seo());
    }

    private function general()
    {
        return tap(new Tab('general', trans('news::news.tabs.general')), function (Tab $tab) {
            $tab->active();
            $tab->weight(5);
            $tab->fields(['title', 'body', 'is_active', 'slug']);
            $tab->view('news::admin.news.tabs.general');
        });
    }

    private function seo()
    {
        return tap(new Tab('seo', trans('news::news.tabs.seo')), function (Tab $tab) {
            $tab->weight(10);
            $tab->view('news::admin.news.tabs.seo');
        });
    }

    private function images()
    {
        if (! auth()->user()->hasAccess('admin.media.index')) {
            return;
        }

        return tap(new Tab('images', trans('product::products.tabs.images')), function (Tab $tab) {
            $tab->weight(20);
            $tab->view('news::admin.news.tabs.images');
        });
    }
}
