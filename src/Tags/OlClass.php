<?php
declare(strict_types=1);

namespace App\Tags;

use App\ListClass;

class OlClass extends ListClass
{

    public const TAG_NAME = 'ol';
    /**
     * @var bool
     * @link http://htmlbook.ru/html/ol/reversed
     */
    private bool $reversed = false;

    /**
     * @var int
     * @link http://htmlbook.ru/html/ol/start
     */
    private int $start = 0;

    /**
     * @param string $inner
     * @param string $attributes
     * @return string
     */
    public function getView(string $inner = '', $attributes = ''): string
    {
        $attributes .= $this->getAttributes();

        $attributes .= $this->getListAttributes();

        $attributes .= $this->reversed ? sprintf('reversed ') : '';

        $attributes .= $this->start ? sprintf('start="%u" ', $this->start) : '';

        return parent::getView($inner, $attributes);
    }

    /**
     * @param bool $reversed
     * @return OlClass
     */
    public function setReversed(bool $reversed): OlClass
    {
        $this->reversed = $reversed;
        return $this;
    }

    /**
     * @param int $start
     * @return OlClass
     */
    public function setStart(int $start): OlClass
    {
        $this->start = $start;
        return $this;
    }

}