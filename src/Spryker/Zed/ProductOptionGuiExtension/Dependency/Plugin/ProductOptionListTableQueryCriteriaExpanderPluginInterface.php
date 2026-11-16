<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductOptionGuiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\QueryCriteriaTransfer;

/**
 * Allows to expand query criteria for expanding default query running in ProductOptionListTable.
 */
interface ProductOptionListTableQueryCriteriaExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands `QueryCriteriaTransfer` with additional criteria for expanding default query running in `ProductOptionListTable`.
     * - `QueryJoin.relation`, `QueryJoin.condition`, `QueryJoin.left`, `QueryJoin.right` and `QueryWhereCondition.column` are written to SQL as is, so they MUST NOT contain caller input.
     * - `QueryWhereCondition.column` MUST be a fully qualified column name (e.g. `SpyMerchantTableMap::COL_ID_MERCHANT`) or use a registered table alias; SQL expressions are not supported.
     * - `QueryWhereCondition.value` is cast to an integer and bound as a parameter.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\QueryCriteriaTransfer $queryCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\QueryCriteriaTransfer
     */
    public function expandQueryCriteria(QueryCriteriaTransfer $queryCriteriaTransfer): QueryCriteriaTransfer;
}
