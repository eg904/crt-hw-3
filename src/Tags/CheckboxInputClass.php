<?php


namespace App\Tags;


use App\InputClass;
use App\Traits\UniversalAttributesTrait;

class CheckboxInputClass extends InputClass
{

    public const INPUT_TYPE = 'checkbox';

    /**
     * @var bool
     * @link http://htmlbook.ru/html/input/checked
     */
    private bool $checked = false;

    public function getView(string $inner = '', $attributes = ''): string
    {
        $attributes .= sprintf('type="%s" ',static::INPUT_TYPE);

        $attributes .= $this->getAttributes();

        $attributes .= $this->checked ? sprintf('checked') : '';

        return parent::getView($inner, $attributes);

    }

    /**
     * @param bool $checked
     * @return CheckboxInputClass
     */
    public function setChecked(bool $checked): CheckboxInputClass
    {
        $this->checked = $checked;
        return $this;
    }


}