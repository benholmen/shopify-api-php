<?php

declare(strict_types=1);

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service\Access;

use Slince\Shopify\Resource\Access\AccessScope;

interface AccessScopeManagerInterface
{
    /**
     * Finds access scopes.
     *
     * @param array $query
     *
     * @return AccessScope[]
     */
    public function findAll(array $query = []);
}