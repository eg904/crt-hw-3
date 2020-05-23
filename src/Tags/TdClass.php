<?php
declare(strict_types=1);

namespace App\Tags;

use App\TagClass;
use App\Traits\TableAttributesTrait;
use App\Traits\TableInnerAttributesTrait;
use App\Traits\UniversalAttributesTrait;

class TdClass extends TagClass
{
    use TableAttributesTrait, TableInnerAttributesTrait, UniversalAttributesTrait;

    public const TAG_NAME = 'td';

    /**
     * @var string
     * @link http://htmlbook.ru/html/td/abbr
     */
    private string $abbr = '';

    /**
     * @var string
     * @link http://htmlbook.ru/html/td/axis
     */
    private string $axis = '';

    /**
     * @var int
     * @link http://htmlbook.ru/html/td/charoff
     */
    private int $colspan = 1;

    /**
     * @var string
     * @link http://htmlbook.ru/html/td/headers
     */
    private string $headers = '';

    /**
     * @var string
     * @link http://htmlbook.ru/html/td/height
     */
    private string $height = '';

    /**
     * @var string
     * @link http://htmlbook.ru/html/td/width
     */
    private string $width = '';

    /**
     * @var bool
     * @link http://htmlbook.ru/html/td/nowrap
     */
    private bool $nowrap = false;

    /**
     * @var int
     * @link http://htmlbook.ru/html/td/charoff
     */
    private int $rowspan = 1;

    /**
     * @var array
     */
    private static array $scopeValues = ['col', 'colgroup', 'row', 'rowgroup'];

    /**
     * @var string
     * @link http://htmlbook.ru/html/td/scope
     */
    private string $scope = '';

    public function getView(string $inner = '', $attributes = ''): string
    {
        $attributes .= $this->getAttributes();

        $attributes .= $this->getTableAttributes();

        $attributes .= $this->getTableInnerAttributes();

        $attributes .= $this->abbr ? sprintf('abbr="%s" ', $this->abbr) : '';

        $attributes .= $this->axis ? sprintf('axis="%s" ', $this->axis) : '';

        $attributes .= $this->colspan !== 1 ? sprintf('colspan="%s" ', $this->colspan) : '';

        $attributes .= $this->headers ? sprintf('headers="%s" ', $this->headers) : '';

        $attributes .= $this->height ? sprintf('height="%s" ', $this->height) : '';

        $attributes .= $this->width ? sprintf('width="%s" ', $this->width) : '';

        $attributes .= $this->nowrap ? sprintf('nowrap') : '';

        $attributes .= $this->rowspan !== 1 ? sprintf('rowspan="%s" ', $this->rowspan) : '';

        $attributes .= $this->scope ? sprintf('scope="%s" ', $this->scope) : '';

        return parent::getView($inner, $attributes);

    }

    /**
     * @param string $abbr
     * @return TdClass
     */
    public function setAbbr(string $abbr): TdClass
    {
        $this->abbr = $abbr;
        return $this;
    }

    /**
     * @param string $axis
     * @return TdClass
     */
    public function setAxis(string $axis): TdClass
    {
        $this->axis = $axis;
        return $this;
    }

    /**
     * @param int $colspan
     * @return TdClass
     */
    public function setColspan(int $colspan): TdClass
    {
        $this->colspan = $colspan;
        return $this;
    }

    /**
     * @param string $headers
     * @return TdClass
     */
    public function setHeaders(string $headers): TdClass
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * @param string $height
     * @return TdClass
     */
    public function setHeight(string $height): TdClass
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @param string $width
     * @return TdClass
     */
    public function setWidth(string $width): TdClass
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @param bool $nowrap
     * @return TdClass
     */
    public function setNowrap(bool $nowrap): TdClass
    {
        $this->nowrap = $nowrap;
        return $this;
    }

    /**
     * @param int $rowspan
     * @return TdClass
     */
    public function setRowspan(int $rowspan): TdClass
    {
        $this->rowspan = $rowspan;
        return $this;
    }

    /**
     * @param string $scope
     * @return TdClass
     */
    public function setScope(string $scope): TdClass
    {
        if (!in_array($scope, static::$scopeValues)) {
            throw new \InvalidArgumentException('Значение вне диапазона');
        }
        $this->scope = $scope;
        return $this;
    }

}