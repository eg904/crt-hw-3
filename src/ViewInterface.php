<?php

namespace App;

/**
 * Interface ViewInterface
 */
interface ViewInterface
{
    /**
     * Выводит html сущность объекта
     *
     * @param string $inner
     * @return string
     */
    public function getView(string $inner = ''): string;
}
