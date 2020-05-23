<?php

namespace App\Tags;

use App\InputClass;

class ImageInputClass extends InputClass
{
    public const INPUT_TYPE = 'image';

    /**
     * @var array
     */
    protected static array $alignValues = ['bottom', 'left', 'middle', 'right', 'top',];

    /**
     * @var string
     * @link http://htmlbook.ru/html/input/align
     */
    private string $align = '';

    /**
     * @var string
     * @link http://htmlbook.ru/html/input/src
     */
    private string $src = '';

    /**
     * @var string
     * @link http://htmlbook.ru/html/input/alt
     */
    private string $alt = '';

    /**
     * @var int
     * @link http://htmlbook.ru/html/input/border
     */
    private int $border = 0;

    public function getView(string $inner = '', $attributes = ''): string
    {
        $attributes .= sprintf('type="%s" ', static::INPUT_TYPE);

        $attributes .= $this->getAttributes();

        $attributes .= $this->align ? sprintf('align="%s" ', $this->align) : '';

        $attributes .= $this->src ? sprintf('src="%s" ', $this->src) : '';

        $attributes .= $this->alt ? sprintf('alt="%s" ', $this->alt) : '';

        $attributes .= $this->border ? sprintf('alt="%u" ', $this->border) : '';

        return parent::getView($inner, $attributes);

    }

    /**
     * @param string $align
     * @return ImageInputClass
     */
    public function setAlign(string $align): ImageInputClass
    {
        if (!in_array($align, static::$alignValues)) {
            throw new \InvalidArgumentException('Значение вне диапазона');
        }
        $this->align = $align;
        return $this;
    }

    /**
     * @param string $src
     * @return ImageInputClass
     */
    public function setSrc(string $src): ImageInputClass
    {
        $this->src = $src;
        return $this;
    }

    /**
     * @param string $alt
     * @return ImageInputClass
     */
    public function setAlt(string $alt): ImageInputClass
    {
        $this->alt = $alt;
        return $this;
    }


}