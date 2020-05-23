<?php

namespace App\Traits;

trait UniversalAttributesTrait
{
    protected string $id;

    protected string $class;

    protected string $style;

    protected string $title;

    public function __construct(string $id = '', string $class = '', string $style = '', string $title = '')
    {

        $this->setId($id);
        $this->class = $class;
        $this->style = $style;
        $this->setTitle($title);
    }

    protected function getAttributes(): string
    {
        $attributes = $this->id ? sprintf('id="%s" ', $this->id) : '';

        $attributes .= $this->class ? sprintf('class="%s" ', $this->class) : '';

        $attributes .= $this->style ? sprintf('style="%s" ', $this->style) : '';

        $attributes .= $this->title ? sprintf('title="%s" ', $this->title) : '';

        return $attributes;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $id
     * @return UniversalAttributesTrait
     */
    public function setId(string $id)
    {
        $this->id = $id;
        return $this;
    }
}