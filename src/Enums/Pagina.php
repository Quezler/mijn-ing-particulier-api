<?php

namespace Quezler\MijnIngParticulierApi\Enums;

class Pagina extends \SplEnum
{
    const base = 'https://bankieren.mijn.ing.nl';

    const betalen = self::base . '/particulier/betalen/index';
}
