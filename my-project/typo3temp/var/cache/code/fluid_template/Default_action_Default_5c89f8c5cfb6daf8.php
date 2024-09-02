<?php
class Default_action_Default_5c89f8c5cfb6daf8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Default';
    }
    public function hasLayout() {
        return true;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'v' => 
  array (
    0 => 'FluidTYPO3\\Vhs\\ViewHelpers',
  ),
));
    }
    /**
 * section body
 */
public function section_84f2c8ee187fe1fa(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
    <!-- Subpages-->
     
<div class="row">
    <div class="col-md-4">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'data' => NULL,
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.content',
];
$renderChildrenClosure2 = ($arguments1['data'] !== null) ? function() use ($arguments1) { return $arguments1['data']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    </div>
    <div class="col-md-8">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.colContent',
'data' => 30,
];
$renderChildrenClosure4 = ($arguments3['data'] !== null) ? function() use ($arguments3) { return $arguments3['data']; } : $renderChildrenClosure4;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
    </div>
</div> 
        
';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output5 = '';

$output5 .= '';

$output5 .= '

';

$output5 .= '';

    return $output5;
}

}

#