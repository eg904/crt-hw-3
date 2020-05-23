<?php
declare(strict_types=1);

namespace App;

use App\ViewInterface;

class TagClass implements ViewInterface
{
    protected string $id;

    protected string $class;

    protected string $style;

    protected string $title;

    public function getView(string $inner = '', $attributes = ''): string
    {
        return \sprintf('<%s %s>%s</%s>', static::TAG_NAME, $attributes, $inner, static::TAG_NAME);
    }
}