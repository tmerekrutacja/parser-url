<?php
declare(strict_types=1);

namespace TME\Recrutation;

interface UrlReaderInterface
{
    /**
     * Fetches urls collection from a specified source
     *
     * @return \TME\Recrutation\Entity\Url[]
     */
    public function read(): array;
}
