<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Option extends Model
{
    protected $guarded  = [];
    const CACHE_KEY = 'site_settings';

    protected static function booted()
    {
        static::saved(fn() => self::refreshCache());
    }

    /**
     * Summary of loadAll
     * @return mixed
     */
    public static function loadAll()
    {
        return Cache::rememberForever(self::CACHE_KEY, fn() => static::pluck('value', 'key')->toArray());
    }

    /**
     * Summary of get
     * @param mixed $key
     * @param mixed $default
     * @return mixed
     */
    public static function get($key, $default = null)
    {
        return self::loadAll()[$key] ?? $default;
    }

    /**
     * Summary of set
     * @param string|array $key
     * @param mixed $value
     * @return Option
     */
    public static function set(string|array $key, $value = null)
    {
        if (!is_array($key)) {
            return self::query()->updateOrCreate(['key' => $key], ['value' => $value]);
        }

        foreach ($key as $k => $v) {
            self::set($k, $v);
        }
    }

    /**
     * Summary of refreshCache
     * @return void
     */
    protected static function refreshCache()
    {
        Cache::forget(self::CACHE_KEY);
        self::loadAll();
    }
}
