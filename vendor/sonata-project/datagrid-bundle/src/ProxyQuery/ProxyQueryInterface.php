<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\DatagridBundle\ProxyQuery;

/**
 * Interface used by the Datagrid to build the query.
 */
interface ProxyQueryInterface
{
    /**
     * @param string $name
     * @param array  $args
     *
     * @return mixed
     */
    public function __call($name, $args);

    /**
     * @param array $params
     * @param null  $hydrationMode
     *
     * @return mixed
     */
    public function execute(array $params = [], $hydrationMode = null);

    /**
     * @param array $sortBy
     *
     * @return ProxyQueryInterface
     */
    public function setSortBy($sortBy);

    /**
     * @return mixed
     */
    public function getSortBy();

    /**
     * @param mixed $sortOrder
     *
     * @return ProxyQueryInterface
     */
    public function setSortOrder($sortOrder);

    /**
     * @return mixed
     */
    public function getSortOrder();

    /**
     * @param int $firstResult
     *
     * @return ProxyQueryInterface
     */
    public function setFirstResult($firstResult);

    /**
     * @return mixed
     */
    public function getFirstResult();

    /**
     * @param int $maxResults
     *
     * @return ProxyQueryInterface
     */
    public function setMaxResults($maxResults);

    /**
     * @return mixed
     */
    public function getMaxResults();

    /**
     * Returns query results.
     *
     * @return array
     */
    public function getResults();
}
