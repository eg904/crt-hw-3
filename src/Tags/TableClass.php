<?php
declare(strict_types=1);

namespace App\Tags;

use App\TagClass;
use App\Traits\TableAttributesTrait;
use App\Traits\UniversalAttributesTrait;


class TableClass extends TagClass
{
    use TableAttributesTrait, UniversalAttributesTrait;

    public const TAG_NAME = 'table';

    /**
     * @var integer
     */
    private int $border = 0;

    /**
     * @var string
     */
    private string $background = '';

    /**
     * @var integer
     */
    private int $cellpadding = 0;

    /**
     * @var integer
     */
    private int $cellspacing = 0;

    /**
     * @var integer
     */
    private int $cols = 0;

    /**
     * @var array
     */
    private static array $frameValues = ['void', 'border', 'above', 'below', 'hsides', 'vsides', 'rhs', 'lhs', ''];

    /**
     * @var string
     */
    private string $frame = '';

    /**
     * @var string
     */
    private string $height = '';

    /**
     * @var string
     */
    private string $width = '';

    /**
     * @var array
     */
    private static array $rulesValues = ['all', 'groups', 'cols', 'none', 'rows', ''];

    /**
     * @var string
     */
    private string $rules = '';

    /**
     * @var string
     */
    private string $summary = '';

    /**
     * @param string $inner
     * @return string
     */

    public function getView(string $inner = '', $attributes = ''): string
    {

        $attributes .= $this->getAttributes();

        $attributes .= $this->getTableAttributes();

        $attributes .= $this->background ? sprintf('background="%s" ', $this->background) : '';

        $attributes .= $this->border ? sprintf('border="%u" ', $this->border) : '';

        $attributes .= $this->cellpadding ? sprintf('cellpadding="%u" ', $this->cellpadding) : '';

        $attributes .= $this->cellspacing ? sprintf('cellspacing="%u" ', $this->cellspacing) : '';

        $attributes .= $this->cols ? sprintf('cols="%u" ', $this->cols) : '';

        $attributes .= $this->frame ? sprintf('frame="%s" ', $this->frame) : '';

        $attributes .= $this->height ? sprintf('height="%s" ', $this->height) : '';

        $attributes .= $this->width ? sprintf('width="%s" ', $this->width) : '';

        $attributes .= $this->rules ? sprintf('width="%s" ', $this->rules) : '';

        $attributes .= $this->summary ? sprintf('width="%s" ', $this->summary) : '';

        return parent::getView($inner, $attributes);
    }

    public function setBorder(int $border)
    {
        $this->border = $border;
        return $this;
    }

    /**
     * @param string $background
     * @return TableAttributesTrait
     */
    public function setBackground(string $background)
    {
        $this->background = $background;
        return $this;
    }

    /**
     * @param int $cellpadding
     * @return TableClass
     */
    public function setCellpadding(int $cellpadding): TableClass
    {
        $this->cellpadding = $cellpadding;
        return $this;
    }

    /**
     * @param int $cellspacing
     * @return TableClass
     */
    public function setCellspacing(int $cellspacing): TableClass
    {
        $this->cellspacing = $cellspacing;
        return $this;
    }

    /**
     * @param int $cols
     * @return TableClass
     */
    public function setCols(int $cols): TableClass
    {
        $this->cols = $cols;
        return $this;
    }

    /**
     * @param string $frame
     * @return TableClass
     */
    public function setFrame(string $frame): TableClass
    {
        if (!in_array($frame, static::$alignValues)) {
            throw new \InvalidArgumentException('Значение вне диапазона');
        }
        $this->frame = $frame;
        return $this;
    }

    /**
     * @param string $height
     * @return TableClass
     */
    public function setHeight(string $height): TableClass
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @param string $width
     * @return TableClass
     */
    public function setWidth(string $width): TableClass
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @param string $rules
     */
    public function setRules(string $rules): TableClass
    {
        if (!in_array($rules, static::$rulesValues, true)) {
            throw new \InvalidArgumentException('Значение вне диапазона');
        }
        $this->rules = $rules;
        return $this;
    }

    /**
     * @param string $summary
     * @return TableClass
     */
    public function setSummary(string $summary): TableClass
    {
        $this->summary = $summary;
        return $this;
    }
}