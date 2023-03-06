<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'asm89/stack-cors' => 'v2.0.3@9cb795bf30988e8c96dd3c40623c48a877bc6714',
  'aws/aws-crt-php' => 'v1.0.2@3942776a8c99209908ee0b287746263725685732',
  'aws/aws-sdk-php' => '3.209.10@45082e9fac26bdbc5db504639373374084f616d3',
  'barryvdh/laravel-dompdf' => 'v1.0.0@e3f429e97087b2ef19b83e5ed313f080f2477685',
  'barryvdh/laravel-ide-helper' => 'v2.10.0@73b1012b927633a1b4cd623c2e6b1678e6faef08',
  'barryvdh/reflection-docblock' => 'v2.0.6@6b69015d83d3daf9004a71a89f26e27d27ef6a16',
  'beberlei/assert' => 'v3.3.2@cb70015c04be1baee6f5f5c953703347c0ac1655',
  'brick/math' => '0.9.2@dff976c2f3487d42c1db75a3b180e2b9f0e72ce0',
  'composer/ca-bundle' => '1.2.10@9fdb22c2e97a614657716178093cd1da90a64aa8',
  'composer/composer' => '2.1.3@fc5c4573aafce3a018eb7f1f8f91cea423970f2e',
  'composer/metadata-minifier' => '1.0.0@c549d23829536f0d0e984aaabbf02af91f443207',
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'composer/semver' => '3.2.5@31f3ea725711245195f62e54ffa402d8ef2fdba9',
  'composer/spdx-licenses' => '1.5.5@de30328a7af8680efdc03e396aad24befd513200',
  'composer/xdebug-handler' => '2.0.1@964adcdd3a28bf9ed5d9ac6450064e0d71ed7496',
  'defuse/php-encryption' => 'v2.3.1@77880488b9954b7884c25555c2a0ea9e7053f9d2',
  'doctrine/cache' => '2.0.3@c9622c6820d3ede1e2315a6a377ea1076e421d88',
  'doctrine/dbal' => '3.1.1@8e0fde2b90e3f61361013d1e928621beeea07bc0',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dompdf/dompdf' => 'v1.1.1@de4aad040737a89fae2129cdeb0f79c45513128d',
  'dragonmantank/cron-expression' => 'v3.1.0@7a8c6e56ab3ffcc538d05e8155bb42269abf1a0c',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'evenement/evenement' => 'v3.0.1@531bfb9d15f8aa57454f5f0285b18bec903b8fb7',
  'ezyang/htmlpurifier' => 'v4.14.0@12ab42bd6e742c70c0a52f7b82477fcd44e64b75',
  'fideloper/proxy' => '4.4.1@c073b2bd04d1c90e04dc1b787662b558dd65ade0',
  'firebase/php-jwt' => 'v5.4.0@d2113d9b2e0e349796e72d2a63cf9319100382d2',
  'flix-tech/avro-php' => '4.2.0@d56613999a042c26dad8d5f2d53012cd3db4b8f7',
  'flix-tech/avro-serde-php' => '1.7.1@fabd439f31b0d0fbd0f9bb70c13ad04efd16cd83',
  'flix-tech/confluent-schema-registry-api' => '7.5.1@300bf29d61ed50e91a11ef12aa51dd53800aab6e',
  'fruitcake/laravel-cors' => 'v2.0.4@a8ccedc7ca95189ead0e407c43b530dc17791d6a',
  'functional-php/fantasy-land' => '1.0.1@1e2366e68057bbc7a65d58dd663324eb9b299775',
  'graham-campbell/result-type' => 'v1.0.1@7e279d2cd5d7fbb156ce46daada972355cea27bb',
  'guzzlehttp/guzzle' => '7.4.1@ee0a041b1760e6a53d2a39c8c34115adc2af2c79',
  'guzzlehttp/promises' => '1.5.1@fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
  'guzzlehttp/psr7' => '1.8.3@1afdd860a2566ed3c2b0b4a3de6e23434a79ec85',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'jean85/pretty-package-versions' => '1.6.0@1e0104b46f045868f11942aea058cd7186d6c303',
  'jenssegers/mongodb' => '3.8.4@6aa6ad12b3b52eeab1d090f282c14123ffad1dc9',
  'justinrainbow/json-schema' => '5.2.10@2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
  'laravel/framework' => 'v8.49.2@d9b43ee080b4d51344b2e578aa667f85040471a2',
  'laravel/horizon' => 'v5.7.9@50dc53b105ec612cf1a87e89fffd21cc0a43003c',
  'laravel/passport' => 'v10.1.3@a5e4471dd99b7638ab5ca3ecab6cd87cf37eb410',
  'laravel/telescope' => 'v4.5.1@77373b6dccfc0c4372f1a09c9064cbe7b6d1bf76',
  'laravel/tinker' => 'v2.6.1@04ad32c1a3328081097a181875733fa51f402083',
  'laravel/ui' => 'v3.3.0@07d725813350c695c779382cbd6dac0ab8665537',
  'lcobucci/clock' => '2.0.0@353d83fe2e6ae95745b16b3d911813df6a05bfb3',
  'lcobucci/jwt' => '4.1.4@71cf170102c8371ccd933fa4df6252086d144de6',
  'league/commonmark' => '1.6.5@44ffd8d3c4a9133e4bd0548622b09c55af39db5f',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/flysystem' => '1.1.9@094defdb4a7001845300334e7c1ee2335925ef99',
  'league/flysystem-aws-s3-v3' => '1.0.29@4e25cc0582a36a786c31115e419c6e40498f6972',
  'league/mime-type-detection' => '1.9.0@aa70e813a6ad3d1558fc927863d47309b4c23e69',
  'league/oauth2-server' => '8.2.4@622eaa1f28eb4a2dea0cfc7e4f5280fac794e83c',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'markbaker/complex' => '3.0.1@ab8bc271e404909db09ff2d5ffa1e538085c0f22',
  'markbaker/matrix' => '3.0.0@c66aefcafb4f6c269510e9ac46b82619a904c576',
  'mateusjunges/laravel-kafka' => 'v1.7.0@504b27509e79c141974a8b99c20003885a6dbc7d',
  'mockery/mockery' => '1.4.3@d1339f64479af1bee0e82a0413813fe5345a54ea',
  'mongodb/mongodb' => '1.8.0@953dbc19443aa9314c44b7217a16873347e6840d',
  'monolog/monolog' => '2.3.0@df991fd88693ab703aa403413d83e15f688dae33',
  'mtdowling/jmespath.php' => '2.6.1@9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
  'myclabs/php-enum' => '1.8.3@b942d263c641ddb5190929ff840c68f78713e937',
  'nesbot/carbon' => '2.50.0@f47f17d17602b2243414a44ad53d9f8b9ada5fdb',
  'nikic/php-parser' => 'v4.11.0@fe14cf3672a149364fb66dfe11bf6549af899f94',
  'nyholm/psr7' => '1.4.1@2212385b47153ea71b1c1b1374f8cb5e4f7892ec',
  'opis/closure' => '3.6.2@06e2ebd25f2869e54a306dda991f7db58066f7f6',
  'paragonie/constant_time_encoding' => 'v2.4.0@f34c2b11eb9d2c9318e13540a1dbc2a3afbd939c',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'phenx/php-font-lib' => '0.5.2@ca6ad461f032145fff5971b5985e5af9e7fa88d8',
  'phenx/php-svg-lib' => '0.3.4@f627771eb854aa7f45f80add0f23c6c4d67ea0f2',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpoffice/phpspreadsheet' => '1.23.0@21e4cf62699eebf007db28775f7d1554e612ed9e',
  'phpoption/phpoption' => '1.7.5@994ecccd8f3283ecf5ac33254543eb0ac946d525',
  'phpseclib/phpseclib' => '3.0.9@a127a5133804ff2f47ae629dd529b129da616ad7',
  'predis/predis' => 'v1.1.7@b240daa106d4e02f0c5b7079b41e31ddf66fddf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.10.8@e4573f47750dd6c92dca5aee543fa77513cbd8d3',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.1.3@28a5c4ab2f5111db6a60b2b4ec84057e0f43b9c1',
  'ramsey/uuid' => '4.1.1@cd4032040a750077205918c86049aa0f43d22947',
  'react/cache' => 'v1.1.1@4bf736a2cccec7298bdf745db77585966fc2ca7e',
  'react/dns' => 'v1.7.0@a45784faebf8fbd59058fad2d8497f71a787d20c',
  'react/event-loop' => 'v1.1.1@6d24de090cd59cfc830263cfba965be77b563c13',
  'react/http' => 'v1.2.0@badb0a87890e14b9cdfa3aec3ba1aafd900401ac',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'react/promise-stream' => 'v1.2.0@6384d8b76cf7dcc44b0bf3343fb2b2928412d1fe',
  'react/promise-timer' => 'v1.6.0@daee9baf6ef30c43ea4c86399f828bb5f558f6e6',
  'react/socket' => 'v1.7.0@5d39e3fa56ea7cc443c86f2788a40867cdba1659',
  'react/stream' => 'v1.1.1@7c02b510ee3f582c810aeccd3a197b9c2f52ff1a',
  'ringcentral/psr7' => '1.3.0@360faaec4b563958b673fb52bbe94e37f14bc686',
  'sabberworm/php-css-parser' => '8.3.1@d217848e1396ef962fb1997cf3e2421acba7f796',
  'seld/jsonlint' => '1.8.3@9ad6ce79c342fbd44df10ea95511a1b24dee5b57',
  'seld/phar-utils' => '1.1.1@8674b1d84ffb47cc59a101f5d5a3b61e87d23796',
  'spatie/array-to-xml' => '2.16.0@db39308c5236b69b89cadc3f44f191704814eae2',
  'spatie/backtrace' => '1.2.0@9b4df807fb65aaa8006dcd7a7ccdef8fb4bb002e',
  'spatie/data-transfer-object' => '3.3.0@ad1547a1d35e81051520955c9f02f0eaafeb2ab9',
  'spatie/db-dumper' => '3.0.1@1364325f3f3c5b7cdafd46bca5e9d422227a34d2',
  'spatie/laravel-activitylog' => '4.0.0@f1e8e8ea2cb85945d5ac770e979b0381cc82da52',
  'spatie/laravel-backup' => '7.6.0@39dc00988cd28e7cd06237dae27bf463fa9420fd',
  'spatie/laravel-multitenancy' => '2.1.1@e7a30c546e1dacbeff7e89dd6f11dbdf3a36eadd',
  'spatie/laravel-package-tools' => '1.9.0@cf4c4cec220575e2864c6082842d76822421f1b1',
  'spatie/laravel-permission' => '4.2.0@a6e4122b65094baba7f98df153af0768ef910c85',
  'spatie/laravel-ray' => '1.23.0@2e49e83f3df25e4ef7a145cb0247d2038b8d3436',
  'spatie/laravel-responsecache' => '7.1.0@3bf314f2e6ed7644b9dc182817b48754c928008c',
  'spatie/laravel-settings' => '2.1.8@70d8391845590c72755609f3fbf249857d000828',
  'spatie/laravel-signal-aware-command' => '1.1.1@8c605808028943da9f6c0064d3fd16358526bcad',
  'spatie/macroable' => '2.0.0@ec2c320f932e730607aff8052c44183cf3ecb072',
  'spatie/ray' => '1.28.0@b800636fb022b93df53bd90fa52e5ed07221eb6a',
  'spatie/temporary-directory' => '2.0.0@06fe0f10d068fdf145c9b2235030e568c913bb61',
  'swiftmailer/swiftmailer' => 'v6.2.7@15f7faf8508e04471f666633addacf54c0ab5933',
  'symfony/console' => 'v5.3.2@649730483885ff2ca99ca0560ef0e5f6b03f2ac1',
  'symfony/css-selector' => 'v5.3.0@fcd0b29a7a0b1bb5bfbedc6231583d77fea04814',
  'symfony/deprecation-contracts' => 'v2.5.0@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/error-handler' => 'v5.3.3@43323e79c80719e8a4674e33484bca98270d223f',
  'symfony/event-dispatcher' => 'v5.3.0@67a5f354afa8e2f231081b3fa11a5912f933c3ce',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/filesystem' => 'v5.3.3@19b71c8f313b411172dd5f470fd61f24466d79a9',
  'symfony/finder' => 'v5.3.0@0ae3f047bed4edff6fd35b26a9a6bfdc92c953c6',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.3.3@0e45ab1574caa0460d9190871a8ce47539e40ccf',
  'symfony/http-kernel' => 'v5.3.3@90ad9f4b21ddcb8ebe9faadfcca54929ad23f9f8',
  'symfony/mime' => 'v5.3.2@47dd7912152b82d0d4c8d9040dbc93d6232d472a',
  'symfony/polyfill-ctype' => 'v1.23.0@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-iconv' => 'v1.23.0@63b5bb7db83e5673936d6e3b8b3e022ff6474933',
  'symfony/polyfill-intl-grapheme' => 'v1.23.0@24b72c6baa32c746a4d0840147c9715e42bb68ab',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.24.0@0abb51d2f102e00a4eefcf46ba7fec406d245825',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.0@eca0bf41ed421bed1b57c4958bab16aa86b757d0',
  'symfony/process' => 'v5.3.2@714b47f9196de61a196d86c4bad5f09201b307df',
  'symfony/psr-http-message-bridge' => 'v2.1.0@81db2d4ae86e9f0049828d9343a72b9523884e5d',
  'symfony/routing' => 'v5.3.0@368e81376a8e049c37cb80ae87dbfbf411279199',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => 'v5.3.0@313d02f59d6543311865007e5ff4ace05b35ee65',
  'symfony/string' => 'v5.3.3@bd53358e3eccec6a670b5f33ab680d8dbe1d4ae1',
  'symfony/translation' => 'v5.3.3@380b8c9e944d0e364b25f28e8e555241eb49c01c',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/var-dumper' => 'v5.3.3@46aa709affb9ad3355bd7a810f9662d71025c384',
  'symfony/yaml' => 'v5.3.3@485c83a2fb5893e2ff21bf4bfc7fdf48b4967229',
  'tijsverkoyen/css-to-inline-styles' => '2.2.3@b43b05cf43c1b6d849478965062b6ef73e223bb5',
  'vlucas/phpdotenv' => 'v5.3.0@b3eac5c7ac896e52deab4a99068e3f4ab12d9e56',
  'voku/portable-ascii' => '1.5.6@80953678b19901e5165c56752d087fc11526017c',
  'vyuldashev/xml-to-array' => 'v1.0.1@ae1713b167093716b8e8d56bfb318befac4a8c4b',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'widmogrod/php-functional' => '6.0.0@a1a4edc7f135c4b9364afadcb23d91629255b06c',
  'zbateson/mail-mime-parser' => '1.3.1@706964d904798b8c22d63f62f0ec5f5bc84e30d9',
  'zbateson/mb-wrapper' => '1.0.1@721b3dfbf7ab75fee5ac60a542d7923ffe59ef6d',
  'zbateson/stream-decorators' => '1.0.4@6f54738dfecc65e1d5bfb855035836748083a6dd',
  'brianium/paratest' => 'v6.3.0@268d5b2b4237c0abf76c4aa9633ad8580be01e1e',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'facade/flare-client-php' => '1.8.1@47b639dc02bcfdfc4ebb83de703856fa01e35f5f',
  'facade/ignition' => '2.10.2@43688227bbf27c43bc1ad83af224f135b6ef0ff4',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'fakerphp/faker' => 'v1.15.0@89c6201c74db25fa759ff16e78a4d8f32547770e',
  'filp/whoops' => '2.13.0@2edbc73a4687d9085c8f20f398eebade844e8424',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nunomaduro/collision' => 'v5.5.0@b5cb36122f1c142c3c3ee20a0ae778439ef0244b',
  'nunomaduro/larastan' => 'v0.7.10@d684efa6f79ff34f3a516efa9db532c861438718',
  'phar-io/manifest' => '2.0.1@85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpspec/prophecy' => '1.13.0@be1996ed8adc35c3fd795488a653f4b518be70ea',
  'phpstan/phpstan' => '0.12.91@8226701cd228a0d63c2df995de7ab6070c69ac6a',
  'phpunit/php-code-coverage' => '9.2.6@f6293e1b30a2354e8428e004689671b83871edde',
  'phpunit/php-file-iterator' => '3.0.5@aa4be8575f26070b100fccb67faabb28f21f66f8',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.6@fb9b8333f14e3dce976a60ef6a7e05c7c7ed8bfb',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.3@d89cc98761b8cb5a1a235a6b703ae50d34080e65',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'laravel/laravel' => 'dev-main@19c6c53e848cc36113e95b936418a9cc2597c6f9',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}