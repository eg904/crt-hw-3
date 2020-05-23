<?php


namespace App\Tags;


use App\InputClass;
use App\Traits\UniversalAttributesTrait;

class SubmitInputClass extends InputClass
{

    public const INPUT_TYPE = 'submit';

    public function getView(string $inner = '', $attributes = ''): string
    {
        $attributes .= sprintf('type="%s" ',static::INPUT_TYPE);

        $attributes .= $this->getAttributes();

        return parent::getView($inner, $attributes);

    }


}