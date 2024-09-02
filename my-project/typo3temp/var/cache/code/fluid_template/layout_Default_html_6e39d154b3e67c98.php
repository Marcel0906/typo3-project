<?php
class layout_Default_html_6e39d154b3e67c98 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
    <!-- TODO: Add Header Navigation from Bootstrap with Dataprocessor of TYPO3-->
     <!-- TODO: Navigation Bauen ohne Datenschutz / Impressum -->
      <header>
     <nav class="navbar fixed-top bg-info">
        <div class="container-fluid">
          <a class="navbar-brand" href="/typo3-project/my-project">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/typo3-project/my-project/ueber-mich">Über mich</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/typo3-project/my-project/projekte">Projekte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/typo3-project/my-project/lebenslauf">Lebenslauf</a>
              </li>
              <div class="nav-item">
                <a class="nav-link" href="/typo3-project/my-project/datenschutz">Datenschutz</a>
              </div>
              <div class="nav-item">
                <a class="nav-link" href="/typo3-project/my-project/impressum">Impressum</a>
              </div>
            </div>
              <!-- <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li> -->
            </ul>
          </div>
        
      </nav>
    </header>
    <div>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'body',
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    </div>
    <footer>
        <div class="row g-4">
            <div class="col-12 col-md-6">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.colContentSlide',
'data' => 1,
];
$renderChildrenClosure4 = ($arguments3['data'] !== null) ? function() use ($arguments3) { return $arguments3['data']; } : $renderChildrenClosure4;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
            </div>
            <div class="col-12 col-md-6">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.colContentSlide',
'data' => 2,
];
$renderChildrenClosure6 = ($arguments5['data'] !== null) ? function() use ($arguments5) { return $arguments5['data']; } : $renderChildrenClosure6;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
            </div>
        </div>
        <!-- <div class="footer-links"> -->
        <!-- <div class="nav-item">
            <a class="nav-link" href="/typo3-project/my-project/kontakt">Kontakt</a>
        </div> -->
      <!-- </div> -->
        <!-- TODO: Footer Navigation einfügen -->
         <!-- TODO: Footer nav bauen nur mit DATENSCHUTZ / IMpressum -->
    </footer>
';

    return $output0;
}

}

#