<?php
class partial_Media_Rendering_Image_88dd49618d3406f8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'';
    }
    public function hasLayout() {
        return false;
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
  'ce' => 
  array (
    0 => 'TYPO3\\CMS\\FluidStyledContent\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'additionalConfig' => [],
'cropVariant' => 'default',
'fileExtension' => NULL,
'class' => 'image-embed-item',
'file' => $renderingContext->getVariableProvider()->getByPath('file'),
'width' => $renderingContext->getVariableProvider()->getByPath('dimensions.width'),
'height' => $renderingContext->getVariableProvider()->getByPath('dimensions.height'),
'alt' => $renderingContext->getVariableProvider()->getByPath('file.alternative'),
'title' => $renderingContext->getVariableProvider()->getByPath('file.title'),
'loading' => $renderingContext->getVariableProvider()->getByPath('settings.media.lazyLoading'),
'decoding' => $renderingContext->getVariableProvider()->getByPath('settings.media.imageDecoding'),
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

    return $output0;
}

}

#