<?php
class Default_action_Uploads_8a4bf8a1f5054b65 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
 * section Main
 */
public function section_b0000ec1c8d5f383(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('files'),
];

$expression3 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments1 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression3(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output4 = '';

$output4 .= '
        <ul class="ce-uploads">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
                <li>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array9 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.uploads_type'),
'1' => ' == 1',
];

$expression10 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};

$arguments8 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression10(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output11 = '';

$output11 .= '
                        <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};
$output14 = '';

$output14 .= 'EXT:frontend/Resources/Public/Icons/FileIcons/';

$output14 .= $renderingContext->getVariableProvider()->getByPath('file.extension');

$output14 .= '.gif';

$arguments12 = [
'extensionName' => NULL,
'absolute' => false,
'useCacheBusting' => true,
'path' => $output14,
];

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output11 .= '" alt="">
                    ';
return $output11;
},
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, static fn() => '', $renderingContext)
;

$output7 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array16 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.uploads_type'),
'1' => ' == 2',
];

$expression17 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};

$arguments15 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression17(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output18 = '';

$output18 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array20 = [
'0' => $renderingContext->getVariableProvider()->getByPath('file.type'),
'1' => ' > 1',
];

$expression21 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments19 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression21(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output22 = '';

$output22 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};
$output27 = '';

$output27 .= 'file:';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output29 = '';

$output29 .= 'file:';

$output29 .= $renderingContext->getVariableProvider()->getByPath('file.originalFile.uid');
$output30 = '';

$output30 .= 'file:';

$output30 .= $renderingContext->getVariableProvider()->getByPath('file.uid');

$array31 = [
'0' => $renderingContext->getVariableProvider()->getByPath('file.originalFile'),
];

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments28 = [
'then' => $output29,
'else' => $output30,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression32(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)),
    $renderingContext
),
];

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, static fn() => '', $renderingContext)
;

$arguments25 = [
'treatIdAsReference' => false,
'image' => NULL,
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'width' => NULL,
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => NULL,
'maxHeight' => NULL,
'absolute' => false,
'src' => $output27,
];

$array24 = [
'0' => TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext),
'1' => ' != \'/\'',
];

$expression33 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '/');};

$arguments23 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression33(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output34 = '';

$output34 .= '
                                    <a href="';

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.publicUrl')]);

$output34 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output36 = '';

$output36 .= ' target="';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.target')]);

$output36 .= '"';

$array37 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.target'),
];

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments35 = [
'then' => $output36,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression38(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)),
    $renderingContext
),
];

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output40 = '';

$output40 .= ' title="';

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.title')]);

$output40 .= '"';

$array41 = [
'0' => $renderingContext->getVariableProvider()->getByPath('file.title'),
];

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments39 = [
'then' => $output40,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression42(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)),
    $renderingContext
),
];

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, static fn() => '', $renderingContext)
;

$output34 .= '>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};

$arguments43 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'additionalConfig' => [],
'height' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'loading' => NULL,
'decoding' => NULL,
'file' => $renderingContext->getVariableProvider()->getByPath('file'),
'width' => 150,
'alt' => $renderingContext->getVariableProvider()->getByPath('file.properties.alternative'),
];

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output34 .= '
                                    </a>
                                ';
return $output34;
},
'__else' => function() use ($renderingContext) {
$output45 = '';

$output45 .= '
                                    <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};
$output48 = '';

$output48 .= 'EXT:frontend/Resources/Public/Icons/FileIcons/';

$output48 .= $renderingContext->getVariableProvider()->getByPath('file.extension');

$output48 .= '.gif';

$arguments46 = [
'extensionName' => NULL,
'absolute' => false,
'useCacheBusting' => true,
'path' => $output48,
];

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext)]);

$output45 .= '" alt="">
                                ';
return $output45;
},
];

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, static fn() => '', $renderingContext)
;

$output22 .= '
                        ';
return $output22;
},
];

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, static fn() => '', $renderingContext)
;

$output18 .= '
                    ';
return $output18;
},
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, static fn() => '', $renderingContext)
;

$output7 .= '
                    <div>
                        <a href="';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.publicUrl')]);

$output7 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output50 = '';

$output50 .= ' target="';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.target')]);

$output50 .= '"';

$array51 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.target'),
];

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments49 = [
'then' => $output50,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression52(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)),
    $renderingContext
),
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output54 = '';

$output54 .= ' title="';

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.title')]);

$output54 .= '"';

$array55 = [
'0' => $renderingContext->getVariableProvider()->getByPath('file.title'),
];

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments53 = [
'then' => $output54,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression56(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)),
    $renderingContext
),
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, static fn() => '', $renderingContext)
;

$output7 .= '>
                            <span class="ce-uploads-fileName">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array61 = [
'0' => $renderingContext->getVariableProvider()->getByPath('file.properties.title'),
];

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments60 = [
'then' => $renderingContext->getVariableProvider()->getByPath('file.properties.title'),
'else' => $renderingContext->getVariableProvider()->getByPath('file.name'),
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression62(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)),
    $renderingContext
),
];
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, static fn() => '', $renderingContext)
;
};

$arguments57 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];
$value59 = ($arguments57['value'] !== NULL ? $arguments57['value'] : $renderChildrenClosure58());

$output7 .= !is_string($value59) && !(is_object($value59) && method_exists($value59, '__toString')) ? $value59 : htmlspecialchars($value59, ($arguments57['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments57['encoding'], $arguments57['doubleEncode']);

$output7 .= '</span>
                        </a>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array64 = [
'0' => $renderingContext->getVariableProvider()->getByPath('file.properties.description'),
];

$expression65 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments63 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression65(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output66 = '';

$output66 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array68 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.uploads_description'),
];

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments67 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression69(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output70 = '';

$output70 .= '
                                <span class="ce-uploads-description">';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.description')]);

$output70 .= '</span>
                            ';
return $output70;
},
];

$output66 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, static fn() => '', $renderingContext)
;

$output66 .= '
                        ';
return $output66;
},
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, static fn() => '', $renderingContext)
;

$output7 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array72 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.filelink_size'),
];

$expression73 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments71 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression73(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output74 = '';

$output74 .= '
                            <span class="ce-uploads-filesize">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure76 = function() use ($renderingContext) {
return NULL;
};

$arguments75 = [
'decimals' => 0,
'decimalSeparator' => '.',
'thousandsSeparator' => ',',
'units' => NULL,
'value' => $renderingContext->getVariableProvider()->getByPath('file.properties.size'),
];
$renderChildrenClosure76 = ($arguments75['value'] !== null) ? function() use ($arguments75) { return $arguments75['value']; } : $renderChildrenClosure76;
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output74 .= '</span>
                        ';
return $output74;
},
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, static fn() => '', $renderingContext)
;

$output7 .= '
                    </div>
                </li>
            ';
return $output7;
};

$arguments5 = [
'key' => NULL,
'reverse' => false,
'each' => $renderingContext->getVariableProvider()->getByPath('files'),
'as' => 'file',
'iteration' => 'fileIterator',
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
        </ul>
    ';
return $output4;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output77 = '';

$output77 .= '
';

$output77 .= '';

$output77 .= '
';

$output77 .= '';

$output77 .= '

';

    return $output77;
}

}

#