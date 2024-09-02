<?php
/**
 * Compiled ext_localconf.php cache file
 */
/**
 * Extension: core
 * File: C:/xampp/htdocs/typo3-project/my-project/typo3/sysext/core/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Core\Authentication\AuthenticationService;
use TYPO3\CMS\Core\Controller\FileDumpController;
use TYPO3\CMS\Core\Hooks\BackendUserGroupIntegrityCheck;
use TYPO3\CMS\Core\Hooks\BackendUserPasswordCheck;
use TYPO3\CMS\Core\Hooks\CreateSiteConfiguration;
use TYPO3\CMS\Core\Hooks\DestroySessionHook;
use TYPO3\CMS\Core\Hooks\PagesTsConfigGuard;
use TYPO3\CMS\Core\MetaTag\EdgeMetaTagManager;
use TYPO3\CMS\Core\MetaTag\Html5MetaTagManager;
use TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry;
use TYPO3\CMS\Core\Resource\Index\ExtractorRegistry;
use TYPO3\CMS\Core\Resource\OnlineMedia\Metadata\Extractor;
use TYPO3\CMS\Core\Resource\Rendering\AudioTagRenderer;
use TYPO3\CMS\Core\Resource\Rendering\RendererRegistry;
use TYPO3\CMS\Core\Resource\Rendering\VideoTagRenderer;
use TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer;
use TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer;
use TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect;
use TYPO3\CMS\Core\Resource\Security\FilePermissionAspect;
use TYPO3\CMS\Core\Resource\Security\SvgHookHandler;
use TYPO3\CMS\Core\Resource\TextExtraction\PlainTextExtractor;
use TYPO3\CMS\Core\Resource\TextExtraction\TextExtractorRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][GeneralUtility::class]['moveUploadedFile'][] = SvgHookHandler::class . '->processMoveUploadedFile';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = FileMetadataPermissionsAspect::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = BackendUserGroupIntegrityCheck::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = BackendUserPasswordCheck::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkModifyAccessList'][] = FileMetadataPermissionsAspect::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkModifyAccessList'][] = FilePermissionAspect::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = FilePermissionAspect::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = DestroySessionHook::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = PagesTsConfigGuard::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][CreateSiteConfiguration::class] = CreateSiteConfiguration::class;
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['dumpFile'] = FileDumpController::class . '::dumpAction';

$rendererRegistry = GeneralUtility::makeInstance(RendererRegistry::class);
$rendererRegistry->registerRendererClass(AudioTagRenderer::class);
$rendererRegistry->registerRendererClass(VideoTagRenderer::class);
$rendererRegistry->registerRendererClass(YouTubeRenderer::class);
$rendererRegistry->registerRendererClass(VimeoRenderer::class);
unset($rendererRegistry);

$textExtractorRegistry = GeneralUtility::makeInstance(TextExtractorRegistry::class);
$textExtractorRegistry->registerTextExtractor(PlainTextExtractor::class);
unset($textExtractorRegistry);

$extractorRegistry = GeneralUtility::makeInstance(ExtractorRegistry::class);
$extractorRegistry->registerExtractionService(Extractor::class);
unset($extractorRegistry);

// Register base authentication service
ExtensionManagementUtility::addService(
    'core',
    'auth',
    AuthenticationService::class,
    [
        'title' => 'User authentication',
        'description' => 'Authentication with username/password.',
        'subtype' => 'getUserBE,getUserFE,authUserBE,authUserFE,processLoginDataBE,processLoginDataFE',
        'available' => true,
        'priority' => 50,
        'quality' => 50,
        'os' => '',
        'exec' => '',
        'className' => TYPO3\CMS\Core\Authentication\AuthenticationService::class,
    ]
);

$metaTagManagerRegistry = GeneralUtility::makeInstance(MetaTagManagerRegistry::class);
$metaTagManagerRegistry->registerManager(
    'html5',
    Html5MetaTagManager::class
);
$metaTagManagerRegistry->registerManager(
    'edge',
    EdgeMetaTagManager::class
);
unset($metaTagManagerRegistry);

// Add module configuration
ExtensionManagementUtility::addTypoScriptSetup(
    'config.pageTitleProviders.record.provider = TYPO3\CMS\Core\PageTitle\RecordPageTitleProvider'
);

// Register preset for sys_news
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sys_news'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sys_news'] = 'EXT:core/Configuration/RTE/SysNews.yaml';
}
}


/**
 * Extension: scheduler
 * File: C:/xampp/htdocs/typo3-project/my-project/typo3/sysext/scheduler/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Scheduler\Task\CachingFrameworkGarbageCollectionAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\CachingFrameworkGarbageCollectionTask;
use TYPO3\CMS\Scheduler\Task\ExecuteSchedulableCommandAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\ExecuteSchedulableCommandTask;
use TYPO3\CMS\Scheduler\Task\FileStorageExtractionAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\FileStorageExtractionTask;
use TYPO3\CMS\Scheduler\Task\FileStorageIndexingAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\FileStorageIndexingTask;
use TYPO3\CMS\Scheduler\Task\IpAnonymizationAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\IpAnonymizationTask;
use TYPO3\CMS\Scheduler\Task\OptimizeDatabaseTableAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\OptimizeDatabaseTableTask;
use TYPO3\CMS\Scheduler\Task\RecyclerGarbageCollectionAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\RecyclerGarbageCollectionTask;
use TYPO3\CMS\Scheduler\Task\TableGarbageCollectionAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask;

defined('TYPO3') or die();

// Add caching framework garbage collection task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][CachingFrameworkGarbageCollectionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:cachingFrameworkGarbageCollection.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:cachingFrameworkGarbageCollection.description',
    'additionalFields' => CachingFrameworkGarbageCollectionAdditionalFieldProvider::class,
];

// Add task to index file in a storage
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][FileStorageIndexingTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageIndexing.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageIndexing.description',
    'additionalFields' => FileStorageIndexingAdditionalFieldProvider::class,
];

// Add task for extracting metadata from files in a storage
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][FileStorageExtractionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageExtraction.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageExtraction.description',
    'additionalFields' => FileStorageExtractionAdditionalFieldProvider::class,

];

// Add recycler directory cleanup task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][RecyclerGarbageCollectionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:recyclerGarbageCollection.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:recyclerGarbageCollection.description',
    'additionalFields' => RecyclerGarbageCollectionAdditionalFieldProvider::class,
];

// Add execute schedulable command task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][ExecuteSchedulableCommandTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:executeSchedulableCommandTask.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:executeSchedulableCommandTask.name',
    'additionalFields' => ExecuteSchedulableCommandAdditionalFieldProvider::class,
];

// Save any previous option array for table garbage collection task
// to temporary variable so it can be pre-populated by other
// extensions and LocalConfiguration/AdditionalConfiguration
$garbageCollectionTaskOptions = $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class]['options'] ?? [];
$garbageCollectionTaskOptions['tables'] = $garbageCollectionTaskOptions['tables'] ?? [];
// Add table garbage collection task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tableGarbageCollection.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tableGarbageCollection.description',
    'additionalFields' => TableGarbageCollectionAdditionalFieldProvider::class,
    'options' => $garbageCollectionTaskOptions,
];
unset($garbageCollectionTaskOptions);

// Register sys_log and sys_history table in table garbage collection task
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class]['options']['tables']['sys_log'] ?? false)) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class]['options']['tables']['sys_log'] = [
        'dateField' => 'tstamp',
        'expirePeriod' => 180,
    ];
}

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class]['options']['tables']['sys_history'] ?? false)) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class]['options']['tables']['sys_history'] = [
        'dateField' => 'tstamp',
        'expirePeriod' => 30,
    ];
}

// Save any previous option array for ip anonymization task
// to temporary variable so it can be pre-populated by other
// extensions and LocalConfiguration/AdditionalConfiguration
$ipAnonymizeCollectionTaskOptions = $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][IpAnonymizationTask::class]['options'] ?? [];
$ipAnonymizeCollectionTaskOptions['tables'] = $ipAnonymizeCollectionTaskOptions['tables'] ?? [];
// Add ip anonymization task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][IpAnonymizationTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:ipAnonymization.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:ipAnonymization.description',
    'additionalFields' => IpAnonymizationAdditionalFieldProvider::class,
    'options' => $ipAnonymizeCollectionTaskOptions,
];
unset($ipAnonymizeCollectionTaskOptions);

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][IpAnonymizationTask::class]['options']['tables']['sys_log'] ?? false)) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][IpAnonymizationTask::class]['options']['tables']['sys_log'] = [
        'dateField' => 'tstamp',
        'ipField' => 'IP',
    ];
}

// Add task for optimizing database tables
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][OptimizeDatabaseTableTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:optimizeDatabaseTable.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:optimizeDatabaseTable.description',
    'additionalFields' => OptimizeDatabaseTableAdditionalFieldProvider::class,

];

// Available frequency options
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['frequencyOptions'] = [
    '0 9,15 * * 1-5' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:command.example1',
    '0 */2 * * *' =>  'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:command.example2',
    '*/20 * * * *' =>  'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:command.example3',
    '0 7 * * 2' =>  'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:command.example4',
];
}


/**
 * Extension: frontend
 * File: C:/xampp/htdocs/typo3-project/my-project/typo3/sysext/frontend/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Frontend\Controller\ShowImageController;

defined('TYPO3') or die();

// Register eID provider for showpic
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['tx_cms_showpic'] = ShowImageController::class . '::processRequest';

ExtensionManagementUtility::addTypoScriptSetup(
    '
# Creates persistent ParseFunc setup for non-HTML content.
lib.parseFunc {
    tags {
        a = TEXT
        a {
            current = 1
            typolink {
                parameter.data = parameters:href
                title.data = parameters:title
                target.data = parameters:target
                ATagParams.data = parameters:allParams
            }
        }
    }
    nonTypoTagStdWrap {
        HTMLparser = 1
        HTMLparser {
            keepNonMatchedTags = 1
            htmlSpecialChars = 2
        }
    }
}

# Creates persistent ParseFunc setup for RTE content (which is mainly HTML) based on the "default" transformation.
lib.parseFunc_RTE < lib.parseFunc
lib.parseFunc_RTE {
    # Processing <ol>, <ul> and <table> blocks separately
    externalBlocks = article, aside, blockquote, div, dd, dl, footer, header, nav, ol, section, table, ul, pre, figure, figcaption
    externalBlocks {
        ol {
            stripNL = 1
            stdWrap.parseFunc = < lib.parseFunc
        }
        ul {
            stripNL = 1
            stdWrap.parseFunc = < lib.parseFunc
        }
        pre {
            stdWrap.parseFunc < lib.parseFunc
        }
        table {
            stripNL = 1
            stdWrap {
                HTMLparser = 1
                HTMLparser {
                    keepNonMatchedTags = 1
                }
            }
            HTMLtableCells = 1
            HTMLtableCells {
                # Recursive call to self but without wrapping non-wrapped cell content
                default.stdWrap {
                    parseFunc = < lib.parseFunc_RTE
                    parseFunc.nonTypoTagStdWrap.encapsLines {
                        nonWrappedTag =
                        innerStdWrap_all.ifBlank =
                    }
                }
            }
        }
        # ideally, "div" is not calling itself recursive, but instead uses a similar approach as ol/ul/pre
        # so it is a container with content, which does not need to be wrapping <p> tags in it.
        div {
            stripNL = 1
            callRecursive = 1
        }
        article < .div
        aside < .div
        figure < .div
        figcaption {
            stripNL = 1
        }
        blockquote < .div
        footer < .div
        header < .div
        nav < .div
        section < .div
        dl < .div
        dd < .div
    }
    nonTypoTagStdWrap {
        encapsLines {
            encapsTagList = p,pre,h1,h2,h3,h4,h5,h6,hr,dt
            nonWrappedTag = P
            innerStdWrap_all.ifBlank = &nbsp;
        }
    }
}

# Content selection
styles.content.get = CONTENT
styles.content.get {
    table = tt_content
    select {
        orderBy = sorting
        where = {#colPos}=0
    }
}


# Content element rendering
tt_content = CASE
tt_content {
    key {
        field = CType
    }
    default = TEXT
    default {
        field = CType
        htmlSpecialChars = 1
        wrap = <p style="background-color: yellow; padding: 0.5em 1em;"><strong>ERROR:</strong> Content Element with uid "{field:uid}" and type "|" has no rendering definition!</p>
        wrap.insertData = 1
    }
}
    '
);

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['content'] = 'tt_content';
}


/**
 * Extension: fluid_styled_content
 * File: C:/xampp/htdocs/typo3-project/my-project/typo3/sysext/fluid_styled_content/ext_localconf.php
 */
namespace {




defined('TYPO3') or die();

// Define TypoScript as content rendering template
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'fluidstyledcontent/Configuration/TypoScript/';
}


/**
 * Extension: recycler
 * File: C:/xampp/htdocs/typo3-project/my-project/typo3/sysext/recycler/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Recycler\Task\CleanerFieldProvider;
use TYPO3\CMS\Recycler\Task\CleanerTask;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][CleanerTask::class] = [
    'extension' => 'recycler',
    'title' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskTitle',
    'description' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskDescription',
    'additionalFields' => CleanerFieldProvider::class,
];
}


/**
 * Extension: redirects
 * File: C:/xampp/htdocs/typo3-project/my-project/typo3/sysext/redirects/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Backend\Form\FormDataProvider\TcaInputPlaceholders;
use TYPO3\CMS\Redirects\Evaluation\SourceHost;
use TYPO3\CMS\Redirects\FormDataProvider\ValuePickerItemDataProvider;
use TYPO3\CMS\Redirects\Hooks\DataHandlerCacheFlushingHook;
use TYPO3\CMS\Redirects\Hooks\DataHandlerSlugUpdateHook;
use TYPO3\CMS\Redirects\Hooks\DispatchNotificationHook;

defined('TYPO3') or die();

// Rebuild cache in DataHandler on changing / inserting / adding redirect records
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['redirects'] = DataHandlerCacheFlushingHook::class . '->rebuildRedirectCacheIfNecessary';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['redirects'] = DataHandlerSlugUpdateHook::class;

// Inject sys_domains into valuepicker form
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord']
[ValuePickerItemDataProvider::class] = [
    'depends' => [
        TcaInputPlaceholders::class,
    ],
];

// Add validation call for form field source_host and source_path
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][SourceHost::class] = '';

// Register update signal to send delayed notifications
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['updateSignalHook']['redirects:slugChanged'] = DispatchNotificationHook::class . '->dispatchNotification';
}


/**
 * Extension: rte_ckeditor
 * File: C:/xampp/htdocs/typo3-project/my-project/typo3/sysext/rte_ckeditor/ext_localconf.php
 */
namespace {




use TYPO3\CMS\RteCKEditor\Form\Resolver\RichTextNodeResolver;

defined('TYPO3') or die();

// Register FormEngine node type resolver hook to render RTE in FormEngine if enabled
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeResolver'][1480314091] = [
    'nodeName' => 'text',
    'priority' => 50,
    'class' => RichTextNodeResolver::class,
];

// Register the presets
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:rte_ckeditor/Configuration/RTE/Default.yaml';
}
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['minimal'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['minimal'] = 'EXT:rte_ckeditor/Configuration/RTE/Minimal.yaml';
}
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['full'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['full'] = 'EXT:rte_ckeditor/Configuration/RTE/Full.yaml';
}
}


/**
 * Extension: adminpanel
 * File: C:/xampp/htdocs/typo3-project/my-project/typo3/sysext/adminpanel/ext_localconf.php
 */
namespace {




use Psr\Log\LogLevel;
use TYPO3\CMS\Adminpanel\Controller\AjaxController;
use TYPO3\CMS\Adminpanel\Log\InMemoryLogWriter;
use TYPO3\CMS\Adminpanel\Modules\CacheModule;
use TYPO3\CMS\Adminpanel\Modules\Debug\Events;
use TYPO3\CMS\Adminpanel\Modules\Debug\Log;
use TYPO3\CMS\Adminpanel\Modules\Debug\PageTitle;
use TYPO3\CMS\Adminpanel\Modules\Debug\QueryInformation;
use TYPO3\CMS\Adminpanel\Modules\DebugModule;
use TYPO3\CMS\Adminpanel\Modules\Info\GeneralInformation;
use TYPO3\CMS\Adminpanel\Modules\Info\PhpInformation;
use TYPO3\CMS\Adminpanel\Modules\Info\RequestInformation;
use TYPO3\CMS\Adminpanel\Modules\Info\UserIntInformation;
use TYPO3\CMS\Adminpanel\Modules\InfoModule;
use TYPO3\CMS\Adminpanel\Modules\PreviewModule;
use TYPO3\CMS\Adminpanel\Modules\TsDebug\TypoScriptWaterfall;
use TYPO3\CMS\Adminpanel\Modules\TsDebugModule;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['adminpanel']['modules'] = [
    'preview' => [
        'module' => PreviewModule::class,
        'before' => ['cache'],
    ],
    'cache' => [
        'module' => CacheModule::class,
        'after' => ['preview'],
    ],
    'tsdebug' => [
        'module' => TsDebugModule::class,
        'after' => ['edit'],
        'submodules' => [
            'ts-waterfall' => [
                'module' => TypoScriptWaterfall::class,
            ],
        ],
    ],
    'info' => [
        'module' => InfoModule::class,
        'after' => ['tsdebug'],
        'submodules' => [
            'general' => [
                'module' => GeneralInformation::class,
            ],
            'request' => [
                'module' => RequestInformation::class,
            ],
            'phpinfo' => [
                'module' => PhpInformation::class,
            ],
            'userint' => [
                'module' => UserIntInformation::class,
            ],
        ],
    ],
    'debug' => [
        'module' => DebugModule::class,
        'after' => ['info'],
        'submodules' => [
            'log' => [
                'module' => Log::class,
            ],
            'queryInformation' => [
                'module' => QueryInformation::class,
            ],
            'pageTitle' => [
                'module' => PageTitle::class,
            ],
            'events' => [
                'module' => Events::class,
            ],
        ],
    ],
];

$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['adminPanel_save']
    = AjaxController::class . '::saveDataAction';

// The admin panel has a module to show log messages. Register a debug logger to gather those.
$GLOBALS['TYPO3_CONF_VARS']['LOG']['writerConfiguration'][LogLevel::DEBUG][InMemoryLogWriter::class] = [];

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['adminpanel_requestcache'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['adminpanel_requestcache'] = [];
}

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['driverMiddlewares'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['DB']['Connections']['Default']['driverMiddlewares'] = [];
}

$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['driverMiddlewares']['adminpanel_loggingmiddleware'] = [
    'target' => \TYPO3\CMS\Adminpanel\Log\DoctrineSqlLoggingMiddleware::class,
    'after' => [
        'typo3/core/custom-platform-driver-middleware',
    ],
];
}


/**
 * Extension: backend
 * File: C:/xampp/htdocs/typo3-project/my-project/typo3/sysext/backend/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Backend\Backend\Avatar\DefaultAvatarProvider;
use TYPO3\CMS\Backend\LoginProvider\UsernamePasswordLoginProvider;
use TYPO3\CMS\Backend\View\BackendLayout\PageTsBackendLayoutDataProvider;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['loginProviders'][1433416747] = [
    'provider' => UsernamePasswordLoginProvider::class,
    'sorting' => 50,
    'iconIdentifier' => 'actions-key',
    'label' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.link',
];

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['avatarProviders']['defaultAvatarProvider'] = [
    'provider' => DefaultAvatarProvider::class,
];

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['page'] = 'pages';

// Register BackendLayoutDataProvider for PageTs
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider']['pagets'] = PageTsBackendLayoutDataProvider::class;
}


/**
 * Extension: dashboard
 * File: C:/xampp/htdocs/typo3-project/my-project/typo3/sysext/dashboard/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Core\Cache\Backend\FileBackend;
use TYPO3\CMS\Core\Cache\Frontend\VariableFrontend;
use TYPO3\CMS\Dashboard\Persistence\DashboardCreationEnricher;

defined('TYPO3') or die();

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['dashboard_rss'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['dashboard_rss'] = [
        'frontend' => VariableFrontend::class,
        'backend' => FileBackend::class,
        'options' => [
            'defaultLifetime' => 900,
        ],
    ];
}

// Fill the "owner" field of a dashboard with the user who created it
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = DashboardCreationEnricher::class;
}


/**
 * Extension: extensionmanager
 * File: C:/xampp/htdocs/typo3-project/my-project/typo3/sysext/extensionmanager/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extensionmanager\Task\UpdateExtensionListTask;

defined('TYPO3') or die();

// Register extension list update task
if (!(bool)GeneralUtility::makeInstance(
    ExtensionConfiguration::class
)->get('extensionmanager', 'offlineMode')) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][UpdateExtensionListTask::class] = [
        'extension' => 'extensionmanager',
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.name',
        'description' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.description',
        'additionalFields' => '',
    ];
}
}


/**
 * Extension: seo
 * File: C:/xampp/htdocs/typo3-project/my-project/typo3/sysext/seo/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Seo\Canonical\CanonicalGenerator;
use TYPO3\CMS\Seo\MetaTag\MetaTagGenerator;
use TYPO3\CMS\Seo\MetaTag\OpenGraphMetaTagManager;
use TYPO3\CMS\Seo\MetaTag\TwitterCardMetaTagManager;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\CMS\Frontend\Page\PageGenerator']['generateMetaTags']['metatag'] =
    MetaTagGenerator::class . '->generate';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\CMS\Frontend\Page\PageGenerator']['generateMetaTags']['canonical'] =
    CanonicalGenerator::class . '->generate';

$metaTagManagerRegistry = GeneralUtility::makeInstance(MetaTagManagerRegistry::class);
$metaTagManagerRegistry->registerManager(
    'opengraph',
    OpenGraphMetaTagManager::class
);
$metaTagManagerRegistry->registerManager(
    'twitter',
    TwitterCardMetaTagManager::class
);
unset($metaTagManagerRegistry);

// Add module configuration
ExtensionManagementUtility::addTypoScriptSetup(trim('
    config.pageTitleProviders {
        seo {
            provider = TYPO3\CMS\Seo\PageTitle\SeoTitlePageTitleProvider
            before = record
        }
    }
'));
}


/**
 * Extension: tstemplate
 * File: C:/xampp/htdocs/typo3-project/my-project/typo3/sysext/tstemplate/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Tstemplate\Hooks\DataHandlerClearCachePostProcHook;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['tstemplate'] = DataHandlerClearCachePostProcHook::class . '->clearPageCacheIfNecessary';
}


/**
 * Extension: vhs
 * File: C:/xampp/htdocs/typo3-project/my-project/typo3conf/ext/vhs/ext_localconf.php
 */
namespace {


(function() {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['vhs'] = $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['vhs']['setup'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
    )->get('vhs');

    if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['vhs']['setup']['disableAssetHandling']) || !$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['vhs']['setup']['disableAssetHandling']) {
        if (version_compare(\TYPO3\CMS\Core\Utility\VersionNumberUtility::getCurrentTypo3Version(), '12.0', '<')) {
            $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['usePageCache'][] =  \FluidTYPO3\Vhs\Service\AssetService::class;
        }

        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc'][] = \FluidTYPO3\Vhs\Service\AssetService::class . '->clearCacheCommand';
    }

    if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['vhs_main'] ?? null)) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['vhs_main'] = [
            'frontend' => \TYPO3\CMS\Core\Cache\Frontend\VariableFrontend::class,
            'options' => [
                'defaultLifetime' => 804600
            ],
            'groups' => ['pages', 'all']
        ];
    }

    if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['vhs_markdown'] ?? null)) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['vhs_markdown'] = [
            'frontend' => \TYPO3\CMS\Core\Cache\Frontend\VariableFrontend::class,
            'options' => [
                'defaultLifetime' => 804600
            ],
            'groups' => ['pages', 'all']
        ];
    }

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['v'] = ['FluidTYPO3\\Vhs\\ViewHelpers'];

    // add navigtion hide to fix menu viewHelpers (e.g. breadcrumb)
    $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= (empty($GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields']) ? '' : ',') . 'nav_hide,shortcut,shortcut_mode';

    // add and urltype to fix the rendering of external url doktypes
    if (isset($GLOBALS['TCA']['pages']['columns']['urltype'])) {
        $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',url,urltype';
    }
})();
}


/**
 * Extension: ws_scss
 * File: C:/xampp/htdocs/typo3-project/my-project/typo3conf/ext/ws_scss/ext_localconf.php
 */
namespace {


defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess']['wsscss'] = \WapplerSystems\WsScss\Hooks\RenderPreProcessorHook::class . '->renderPreProcessorProc';


// Caching the pages - default expire 3600 seconds
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['ws_scss'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['ws_scss'] = [
        'frontend' => \TYPO3\CMS\Core\Cache\Frontend\VariableFrontend::class,
        'backend' => \TYPO3\CMS\Core\Cache\Backend\FileBackend::class,
        'options' => [
            'defaultLifetime' => 0,
        ]
    ];
}
}


#