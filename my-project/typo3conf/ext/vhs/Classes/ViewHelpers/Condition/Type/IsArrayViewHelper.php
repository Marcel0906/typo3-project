<?php
namespace FluidTYPO3\Vhs\ViewHelpers\Condition\Type;

/*
 * This file is part of the FluidTYPO3/Vhs project under GPLv2 or later.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractConditionViewHelper;

/**
 * ### Condition: Type of value is array
 *
 * Condition ViewHelper which renders the `then` child if type of
 * provided value is array.
 */
class IsArrayViewHelper extends AbstractConditionViewHelper
{
    public function initializeArguments(): void
    {
        parent::initializeArguments();
        $this->registerArgument('value', 'mixed', 'value to check', true);
    }

    /**
     * @param array $arguments
     * @return bool
     */
    protected static function evaluateCondition($arguments = null)
    {
        return is_array($arguments['value'] ?? null);
    }
}
