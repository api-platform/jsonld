<?php

/*
 * This file is part of the API Platform Builder package.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ApiPlatform\Builder\JsonLd;

use ApiPlatform\Builder\Api\UrlGeneratorInterface;

/**
 * API entrypoint builder interface.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface EntrypointBuilderInterface
{
    /**
     * Gets the entrypoint content of the API.
     *
     * @return array
     */
    public function getEntrypoint(string $referenceType = UrlGeneratorInterface::ABS_PATH) : array;
}
