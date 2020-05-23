<?php
declare(strict_types=1);

namespace App\Tags;


use App\TagClass;
use App\Traits\TableAttributesTrait;
use App\Traits\TableInnerAttributesTrait;
use App\Traits\UniversalAttributesTrait;

class TrClass extends TagClass
{
    use TableAttributesTrait, TableInnerAttributesTrait, UniversalAttributesTrait;

    public const TAG_NAME = 'tr';

    public function getView(string $inner = '', $attributes = ''): string
    {
        $attributes .= $this->getAttributes();

        $attributes .= $this->getTableAttributes();

        $attributes .= $this->getTableInnerAttributes();

        return parent::getView($inner, $attributes);

    }

}