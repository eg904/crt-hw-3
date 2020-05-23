<?php
declare(strict_types=1);

namespace App\Traits;

use App\Tags\TableClass;

trait TableAttributesTrait
{
    /**
     * @var array
     */
    protected static array $alignValues = ['left', 'center', 'right', '',];

    /**
     * @var string
     */
    private string $align = '';


    /**
     * @var string
     */
    private string $bordercolor = '';

    /**
     * @var string
     */
    private string $bgcolor = '';


    /**
     * @param string $align
     * @return TableAttributesTrait
     */
    public function setAlign(string $align)
    {
        if (!in_array($align, static::$alignValues)) {
            throw new \InvalidArgumentException('Значение вне диапазона');
        }
        $this->align = $align;
        return $this;
    }


    /**
     * @param string $bordercolor
     *
     */
    public function setBordercolor(string $bordercolor)
    {
        $this->bordercolor = $bordercolor;
        return $this;
    }

    /**
     * @param string $bgcolor
     *
     */
    public function setBgcolor(string $bgcolor)
    {
        $this->bgcolor = $bgcolor;
        return $this;
    }

    protected function getTableAttributes(): string
    {
        $attributes = $this->align ? sprintf('align="%s" ', $this->align) : '';

        $attributes .= $this->bordercolor ? sprintf('bordercolor="%s" ', $this->bordercolor) : '';

        $attributes .= $this->bgcolor ? sprintf('bgcolor="%s" ', $this->bgcolor) : '';

        return $attributes;
    }


}