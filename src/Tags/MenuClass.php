<?php
declare(strict_types=1);

namespace App\Tags;

use App\ListClass;

class MenuClass extends ListClass
{
    public const TAG_NAME = 'menu';
    /**
     * @var array
     */
    protected static array $typeValues = ['context', 'toolbar', 'list'];

    /**
     * @var string
     */
    private string $type = '';

    /**
     * @var string
     * @link http://htmlbook.ru/html/menu/label
     */
    private string $label = '';

    /**
     * @param string $inner
     * @param string $attributes
     * @return string
     */
    public function getView(string $inner = '', $attributes = ''): string
    {
        $attributes .= $this->getAttributes();

        $attributes .= $this->getListAttributes();

        $attributes .= $this->label ? sprintf('label="%s" ', $this->label) : '';

        return parent::getView($inner, $attributes);
    }

    /**
     * @param string $label
     * @return MenuClass
     */
    public function setLabel(string $label): MenuClass
    {
        $this->label = $label;
        return $this;
    }


}