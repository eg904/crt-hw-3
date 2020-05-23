<?php
declare(strict_types=1);

namespace App;

use App\Traits\ListAttributesTrait;
use App\Traits\UniversalAttributesTrait;

class ListClass extends TagClass
{
    use ListAttributesTrait, UniversalAttributesTrait;

}