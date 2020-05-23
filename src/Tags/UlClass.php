<?php
declare(strict_types=1);

namespace App\Tags;

use App\ListClass;
use App\Traits\ListAttributesTrait;

class UlClass extends ListClass
{

    public const TAG_NAME = 'ul';

    /**
     * @param string $inner
     * @param string $attributes
     * @return string
     */
    public function getView(string $inner = '', $attributes = ''): string
    {
        $attributes .= $this->getAttributes();

        $attributes .= $this->getListAttributes();

        return parent::getView($inner, $attributes);
    }

}