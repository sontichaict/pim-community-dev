<?php

namespace Pim\Bundle\CatalogBundle\Doctrine\Query;

use Pim\Bundle\CatalogBundle\Model\AbstractAttribute;

/**
 * Aims to customize a query builder to add useful shortcuts which allow to easily select, filter or sort a product
 * values
 *
 * @author    Nicolas Dupont <nicolas@akeneo.com>
 * @copyright 2013 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
interface ProductQueryBuilderInterface
{
    /**
     * Add a filter condition on a field
     *
     * @param string $field    the field
     * @param string $operator the used operator
     * @param string $value    the value to filter
     *
     * @throws \LogicException
     *
     * @return ProductQueryBuilderInterface
     */
    public function addFilter($field, $operator, $value);

    /**
     * Sort by attribute value
     *
     * @param AbstractAttribute $attribute the attribute to sort on
     * @param string            $direction the direction to use
     *
     * @return ProductQueryBuilderInterface
     */
    public function addAttributeSorter(AbstractAttribute $attribute, $direction);

    /**
     * Sort by field
     *
     * @param string $field     the field to sort on
     * @param string $direction the direction to use
     *
     * @return ProductQueryBuilderInterface
     */
    public function addFieldSorter($field, $direction);
}
