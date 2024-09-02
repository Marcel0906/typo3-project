<?php
return [
    'BE' => [
        'debug' => false,
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$MHM4dTNtbmx0Z2Uzei5KQg$yr7noqHkCz/Uh3OeXfquMBI4I36GLJdfvJUZDFanEE0',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => 'Typo3-project',
                'driver' => 'mysqli',
                'host' => '127.0.0.1',
                'password' => 'typo3',
                'port' => 3306,
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'root',
            ],
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'redirects' => [
            'showCheckIntegrityInfoInReports' => '1',
            'showCheckIntegrityInfoInReportsSeconds' => '86400',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
        ],
        'vhs' => [
            'disableAssetHandling' => '0',
        ],
    ],
    'FE' => [
        'cacheHash' => [
            'enforceValidation' => true,
        ],
        'debug' => false,
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_effects' => true,
        'processor_enabled' => true,
        'processor_path' => 'C:/Program Files/ImageMagick-7.1.1-Q16-HDRI/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'defaultMailFromAddress' => 'noreply@gmail.com',
        'defaultMailFromName' => 'test',
        'transport' => 'smtp',
        'transport_sendmail_command' => '',
        'transport_smtp_encrypt' => false,
        'transport_smtp_password' => 'dein-smtp-passwort',
        'transport_smtp_server' => 'smtp.gmail.com:587',
        'transport_smtp_username' => 'info@gmail.com',
    ],
    'SYS' => [
        'UTF8filesystem' => true,
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\FileBackend',
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\FileBackend',
                    'options' => [
                        'compression' => '__UNSET',
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\FileBackend',
                    'options' => [
                        'compression' => '__UNSET',
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => '667356a485f12e32892609079ae018e36ad5b75488920df48fe00a8ad3c99c237cb579598bd19f0fb73cce9112e8ab9b',
        'exceptionalErrors' => 4096,
        'sitename' => 'New TYPO3 site',
        'systemMaintainers' => [
            1,
        ],
    ],
];
