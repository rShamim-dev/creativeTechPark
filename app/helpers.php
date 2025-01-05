<?php

use App\Models\Page;
use App\Models\Option;
use App\Models\Category;

if (! function_exists('get_category')) {
    function get_category()
    {
        return Category::loadAll();
    }
}

if (!function_exists('get_options')) {
    /**
     * Summary of get_options
     * @param mixed $key
     * @param mixed $value
     * @return mixed
     */
    function get_options($key, $value = null)
    {
        return Option::get($key, $value);
    }
}

if (!function_exists('get_pages')) {
    /**
     * Summary of get_pages
     * @return Illuminate\Database\Eloquent\Collection
     */
    function get_pages()
    {
        return Page::select('name', 'slug')->latest()->get();
    }
}


if (!function_exists('menus')) {
    /**
     * Summary of menus
     * @return Illuminate\Database\Eloquent\Collection
     */
    function menus()
    {
        return Category::orderBy('is_menu', 'asc')->take(8)->active()->get();
    }
}
