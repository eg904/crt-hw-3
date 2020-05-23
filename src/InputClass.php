<?php
declare(strict_types=1);

namespace App;

use App\Traits\UniversalAttributesTrait;

abstract class InputClass extends TagClass
{
    use UniversalAttributesTrait {
        UniversalAttributesTrait::__construct as private __uaConstruct;
    }

    public const TAG_NAME = 'input';

    /**
     * @var string
     * @link http://htmlbook.ru/html/input/name
     */
    protected string $name = '';

    /**
     * @var string
     * @link http://htmlbook.ru/html/input/value
     */
    protected string $value = '';

    /**
     * @var bool
     * @link http://htmlbook.ru/html/input/checked
     */
    protected bool $required = false;

    /**
     * @var bool
     * @link http://htmlbook.ru/html/input/disabled
     */
    protected bool $disabled = false;

    /**
     * @var int
     * @link http://htmlbook.ru/html/input/size
     */
    protected int $size = 20;

    public function __construct($name, $value = '', string $id = '', string $class = '', string $style = '', string $title = '')
    {
        $this->name = $name;
        $this->value = $value;

        $this->__uaConstruct($id, $class, $style, $title);
    }

    public function getView(string $inner = '', $attributes = ''): string
    {
        $attributes .= $this->name !== 1 ? sprintf('name="%s" ', $this->name) : '';

        $attributes .= $this->value !== 1 ? sprintf('value="%s" ', $this->value) : '';

        $attributes .= $this->required ? sprintf('required') : '';

        $attributes .= $this->disabled ? sprintf('required') : '';

        $attributes .= $this->getAttributes();

        return  \sprintf('<%s %s>', static::TAG_NAME, $attributes);

    }

    public function __toString()
    {
        return $this->getView();
    }

    /**
     * @param string $name
     * @return InputClass
     */
    public function setName(string $name): InputClass
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $value
     * @return InputClass
     */
    public function setValue(string $value): InputClass
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @param bool $required
     * @return InputClass
     */
    public function setRequired(bool $required): InputClass
    {
        $this->required = $required;
        return $this;
    }

    /**
     * @param int $size
     * @return InputClass
     */
    public function setSize(int $size): InputClass
    {
        $this->size = $size;
        return $this;
    }


}