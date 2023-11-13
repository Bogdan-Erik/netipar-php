<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'overtrue/phplint' => array(
            'pretty_version' => '9.0.4',
            'version' => '9.0.4.0',
            'reference' => 'da8aa332372fbbf9aed174ed45ad190aed848b9a',
            'type' => 'library',
            'install_path' => __DIR__ . '/../overtrue/phplint',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/cache' => array(
            'pretty_version' => '3.0.0',
            'version' => '3.0.0.0',
            'reference' => 'aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/cache',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/cache-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '2.0|3.0',
            ),
        ),
        'psr/container' => array(
            'pretty_version' => '2.0.2',
            'version' => '2.0.2.0',
            'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/container',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/event-dispatcher' => array(
            'pretty_version' => '1.0.0',
            'version' => '1.0.0.0',
            'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/event-dispatcher',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/event-dispatcher-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'psr/log' => array(
            'pretty_version' => '3.0.0',
            'version' => '3.0.0.0',
            'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0|2.0|3.0',
            ),
        ),
        'psr/simple-cache-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0|2.0|3.0',
            ),
        ),
        'symfony/cache' => array(
            'pretty_version' => 'v6.3.8',
            'version' => '6.3.8.0',
            'reference' => 'ba33517043c22c94c7ab04b056476f6f86816cf8',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/cache',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/cache-contracts' => array(
            'pretty_version' => 'v3.3.0',
            'version' => '3.3.0.0',
            'reference' => 'ad945640ccc0ae6e208bcea7d7de4b39b569896b',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/cache-contracts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/cache-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.1|2.0|3.0',
            ),
        ),
        'symfony/console' => array(
            'pretty_version' => 'v6.3.8',
            'version' => '6.3.8.0',
            'reference' => '0d14a9f6d04d4ac38a8cea1171f4554e325dae92',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/console',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/deprecation-contracts' => array(
            'pretty_version' => 'v3.3.0',
            'version' => '3.3.0.0',
            'reference' => '7c3aff79d10325257a001fcf92d991f24fc967cf',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/deprecation-contracts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/event-dispatcher' => array(
            'pretty_version' => 'v6.3.2',
            'version' => '6.3.2.0',
            'reference' => 'adb01fe097a4ee930db9258a3cc906b5beb5cf2e',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/event-dispatcher',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/event-dispatcher-contracts' => array(
            'pretty_version' => 'v3.3.0',
            'version' => '3.3.0.0',
            'reference' => 'a76aed96a42d2b521153fb382d418e30d18b59df',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/event-dispatcher-contracts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/event-dispatcher-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '2.0|3.0',
            ),
        ),
        'symfony/finder' => array(
            'pretty_version' => 'v6.3.5',
            'version' => '6.3.5.0',
            'reference' => 'a1b31d88c0e998168ca7792f222cbecee47428c4',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/finder',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/options-resolver' => array(
            'pretty_version' => 'v6.3.0',
            'version' => '6.3.0.0',
            'reference' => 'a10f19f5198d589d5c33333cffe98dc9820332dd',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/options-resolver',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-ctype' => array(
            'pretty_version' => 'v1.28.0',
            'version' => '1.28.0.0',
            'reference' => 'ea208ce43cbb04af6867b4fdddb1bdbf84cc28cb',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-ctype',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-grapheme' => array(
            'pretty_version' => 'v1.28.0',
            'version' => '1.28.0.0',
            'reference' => '875e90aeea2777b6f135677f618529449334a612',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-grapheme',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-normalizer' => array(
            'pretty_version' => 'v1.28.0',
            'version' => '1.28.0.0',
            'reference' => '8c4ad05dd0120b6a53c1ca374dca2ad0a1c4ed92',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-normalizer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-mbstring' => array(
            'pretty_version' => 'v1.28.0',
            'version' => '1.28.0.0',
            'reference' => '42292d99c55abe617799667f454222c54c60e229',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-mbstring',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/process' => array(
            'pretty_version' => 'v6.3.4',
            'version' => '6.3.4.0',
            'reference' => '0b5c29118f2e980d455d2e34a5659f4579847c54',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/process',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/service-contracts' => array(
            'pretty_version' => 'v3.3.0',
            'version' => '3.3.0.0',
            'reference' => '40da9cc13ec349d9e4966ce18b5fbcd724ab10a4',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/service-contracts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/string' => array(
            'pretty_version' => 'v6.3.8',
            'version' => '6.3.8.0',
            'reference' => '13880a87790c76ef994c91e87efb96134522577a',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/string',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/var-exporter' => array(
            'pretty_version' => 'v6.3.6',
            'version' => '6.3.6.0',
            'reference' => '374d289c13cb989027274c86206ddc63b16a2441',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/var-exporter',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/yaml' => array(
            'pretty_version' => 'v6.3.8',
            'version' => '6.3.8.0',
            'reference' => '3493af8a8dad7fa91c77fa473ba23ecd95334a92',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/yaml',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);
