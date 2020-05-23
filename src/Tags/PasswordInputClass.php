<?php


namespace App\Tags;


use App\InputClass;
use App\Traits\UniversalAttributesTrait;

class PasswordInputClass extends InputClass
{

    public const INPUT_TYPE = 'password';

    public function getView(string $inner = '', $attributes = ''): string
    {
        $attributes .= sprintf('type="%s" ',static::INPUT_TYPE);

        $attributes .= $this->getAttributes();

        $attributes .= $this->size !== 20 ? sprintf('size="%s" ', $this->size) : '';

        return parent::getView($inner, $attributes);

    }


}