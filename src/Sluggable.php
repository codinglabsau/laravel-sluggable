<?php

namespace Codinglabs\Sluggable;

use Illuminate\Support\Str;

trait Sluggable
{
    public static function findBySlug(string $slug): ?self
    {
        return self::where('slug', strtolower($slug))->first();
    }

    public function setNameAttribute(?string $value): void
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value) ?: null;
    }
}
