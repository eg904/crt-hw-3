<?php
declare(strict_types=1);

namespace App\Traits;


trait TableInnerAttributesTrait
{

    /**
     * @var string
     * @link http://htmlbook.ru/html/td/char
     */
    private string $char = '';

    /**
     * @var string
     * @link http://htmlbook.ru/html/td/charoff
     */
    private string $charoff = '';

    /**
     * @var array
     */
    private static array $valignValues = ['top', 'middle', 'bottom', 'baseline'];


    /**
     * @var string
     */
    private string $valign = '';

    protected function getTableInnerAttributes(): string
    {

        $attributes = $this->char ? sprintf('char="%s" ', $this->char) : '';

        $attributes .= $this->charoff ? sprintf('charoff="%s" ', $this->charoff) : '';

        $attributes .= $this->valign ? sprintf('valign="%s" ', $this->valign) : '';


        return $attributes;
    }

    /**
     * @param string $char
     * @return TableInnerAttributesTrait
     */
    public function setChar(string $char)
    {
        $this->char = $char;
        return $this;
    }

    /**
     * @param string $charoff
     * @return TableInnerAttributesTrait
     */
    public function setCharoff(string $charoff)
    {
        $this->charoff = $charoff;
        return $this;
    }
    /**
     * @param string $valign
     * @return TableInnerAttributesTrait
     */
    public function setValign(string $valign)
    {
        if (!in_array($valign, static::$valignValues)) {
            throw new \InvalidArgumentException('Значение вне диапазона');
        }
        $this->valign = $valign;
        return $this;
    }
}