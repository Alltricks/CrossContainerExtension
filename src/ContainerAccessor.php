<?php

/*
 * This file is part of the CrossContainerExtension package.
 *
 * (c) Kamil Kokot <kamil@kokot.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FriendsOfBehat\CrossContainerExtension;

interface ContainerAccessor
{
    /**
     * @param string $id
     *
     * @return object
     */
    public function getService($id);

    /**
     * @param string $id
     *
     * @return mixed
     */
    public function getParameter($id);
}
