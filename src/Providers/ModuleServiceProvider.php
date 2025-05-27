<?php

namespace QBitsStudio\BlogBagisto\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \QBitsStudio\BlogBagisto\Models\Blog::class,
        \QBitsStudio\BlogBagisto\Models\Category::class,
        \QBitsStudio\BlogBagisto\Models\Tag::class,
        \QBitsStudio\BlogBagisto\Models\Comment::class,
    ];
}