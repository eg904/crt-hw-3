<?php
declare(strict_types=1);

namespace App\Traits;


trait ListAttributesTrait
{
    /**
     * @var array
     */
    protected static array $typeValues = ['A', 'a', 'I', 'i', '1'];

    /**
     * @var string
     */
    private string $type = '';

    /**
     * @param string $type
     *
     */
    public function setType(string $type)
    {
        if (!in_array($type, static::$typeValues)) {
            throw new \InvalidArgumentException('Значение вне диапазона');
        }
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    protected function getListAttributes(): string
    {
        return $this->type ? sprintf('type="%s" ', $this->type) : ' ';
    }


}