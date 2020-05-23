<?php
declare(strict_types=1);

namespace App\Tags;

use App\TagClass;
use App\Traits\ListAttributesTrait;
use App\Traits\UniversalAttributesTrait;

class LiClass extends TagClass
{
    use ListAttributesTrait, UniversalAttributesTrait;

    public const TAG_NAME = 'li';

    /**
     * @var int
     * @link http://htmlbook.ru/html/li/value
     */
    private int $value = 1;

    /**
     * @param string $inner
     * @param string $attributes
     * @return string
     */
    public function getView(string $inner = '', $attributes = ''): string
    {
        $attributes .= $this->getAttributes();

        $attributes .= $this->getListAttributes();

        $attributes .= $this->value !== 1 ? sprintf('value="%s" ', $this->value) : '';

        return parent::getView($inner, $attributes);
    }

    /**
     * @param int $value
     * @return LiClass
     */
    public function setValue(int $value): LiClass
    {
        $this->value = $value;
        return $this;
    }
}