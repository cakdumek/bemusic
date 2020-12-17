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
  'asm89/stack-cors' => '1.3.0@b9c31def6a83f84b4d4a40d35996d375755f0e08',
  'aws/aws-sdk-php' => '3.154.3@0001c05c03f2bd354f6b38f6b81b60f45c2514f8',
  'brick/math' => '0.9.1@283a40c901101e66de7061bd359252c013dcc43c',
  'clue/stream-filter' => 'v1.4.1@5a58cc30a8bd6a4eb8f856adf61dd3e013f53f71',
  'composer/package-versions-deprecated' => '1.11.99@c8c9aa8a14cc3d3bec86d0a8c3fa52ea79936855',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/dbal' => '2.10.4@47433196b6390d14409a33885ee42b6208160643',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dragonmantank/cron-expression' => 'v2.3.0@72b6fbf76adb3cf5bc0db68559b33d41219aba27',
  'egulias/email-validator' => '2.1.20@f46887bc48db66c7f38f668eb7d6ae54583617ff',
  'fideloper/proxy' => '4.4.0@9beebf48a1c344ed67c1d36bb1b8709db7c3c1a8',
  'firebase/php-jwt' => 'v5.2.0@feb0e820b8436873675fd3aca04f3728eb2185cb',
  'fruitcake/laravel-cors' => 'v1.0.6@1d127dbec313e2e227d65e0c483765d8d7559bf6',
  'gliterd/backblaze-b2' => '1.4.0@f7b07b2b03af469717b6bb37b1a47c6a85091904',
  'google/apiclient' => 'v2.7.1@e748d1d5a51166754f13809d35f1fa162cbec530',
  'google/apiclient-services' => 'v0.146@029e20e81508cee6dc652529514eeeb1cf56ce54',
  'google/auth' => 'v1.12.0@74cad289014f7ef747618480f6b59f6303357f34',
  'graham-campbell/guzzle-factory' => 'v3.0.4@618cf7220b177c6d9939a36331df937739ffc596',
  'guzzle/guzzle' => 'v3.8.1@4de0618a01b34aa1c8c33a3f13f396dcd3882eba',
  'guzzlehttp/guzzle' => '6.5.5@9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'http-interop/http-factory-guzzle' => '1.0.0@34861658efb9899a6618cef03de46e2a52c80fc0',
  'intervention/image' => '2.5.1@abbf18d5ab8367f96b3205ca3c89fb2fa598c69e',
  'james-heinrich/getid3' => 'v1.9.20@3c15e353b9bb1252201c73394bb8390b573a751d',
  'jaybizzle/crawler-detect' => 'v1.2.99@0ffea34489b258a2709bfe93a9553e1efa5d1904',
  'jean85/pretty-package-versions' => '1.5.1@a917488320c20057da87f67d0d40543dd9427f7a',
  'jenssegers/agent' => 'v2.6.4@daa11c43729510b3700bc34d414664966b03bffe',
  'laravel/framework' => 'v7.28.2@0956b0688d96565044074b77f521a653d9fce5fb',
  'laravel/scout' => 'v8.3.1@e168e5cf3e26372bcfe770e01577903a6fa05077',
  'laravel/slack-notification-channel' => 'v2.2.0@98e0fe5c8dda645e6af914285af7b742e167462a',
  'laravel/socialite' => 'v4.4.1@80951df0d93435b773aa00efe1fad6d5015fac75',
  'laravel/tinker' => 'v2.4.2@58424c24e8aec31c3a3ac54eb3adb15e8a0a067b',
  'laravel/ui' => 'v2.4.0@f5398544a9cd4804a42d09ce51735e37cd51ea2d',
  'league/color-extractor' => '0.3.2@837086ec60f50c84c611c613963e4ad2e2aec806',
  'league/commonmark' => '1.5.5@45832dfed6007b984c0d40addfac48d403dc6432',
  'league/flysystem' => '1.1.3@9be3b16c877d477357c015cec057548cf9b2a14a',
  'league/flysystem-aws-s3-v3' => '1.0.28@af7384a12f7cd7d08183390d930c9d0ec629c990',
  'league/flysystem-rackspace' => '1.0.5@ba877e837f5dce60e78a0555de37eb9bfc7dd6b9',
  'league/mime-type-detection' => '1.4.0@fda190b62b962d96a069fcc414d781db66d65b69',
  'league/oauth1-client' => 'v1.8.1@3a68155c3f27a91f4b66a2dc03996cd6f3281c9f',
  'league/omnipay' => 'v3.0.2@9e10d91cbf84744207e13d4483e79de39b133368',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'mhetreramesh/flysystem-backblaze' => '1.5.2@42549be7b3e6f372c824896ccd1d901052cb6d8c',
  'mikemccabe/json-patch-php' => '0.1.0@b3af30a6aec7f6467c773cd49b2d974a70f7c0d4',
  'mikey179/vfsstream' => 'v1.6.8@231c73783ebb7dd9ec77916c10037eff5a2b6efe',
  'mobiledetect/mobiledetectlib' => '2.8.34@6f8113f57a508494ca36acbcfa2dc2d923c7ed5b',
  'moneyphp/money' => 'v3.3.1@122664c2621a95180a13c1ac81fea1d2ef20781e',
  'monolog/monolog' => '2.1.1@f9eee5cec93dfb313a38b6b288741e84e53f02d5',
  'mtdowling/jmespath.php' => '2.6.0@42dae2cbd13154083ca6d70099692fef8ca84bfb',
  'myclabs/php-enum' => '1.7.6@5f36467c7a87e20fbdc51e524fd8f9d1de80187c',
  'nesbot/carbon' => '2.40.0@6c7646154181013ecd55e80c201b9fd873c6ee5d',
  'nikic/php-parser' => 'v4.9.1@88e519766fc58bd46b8265561fb79b54e2e00b28',
  'omnipay/common' => 'v3.0.4@d6a1bed63cae270da32b2171fe31f820d334d452',
  'omnipay/paypal' => 'v3.0.2@519db61b32ff0c1e56cbec94762b970ee9674f65',
  'omnipay/stripe' => 'v3.1.0@37df2a791e8feab45543125f4c5f22d5d305096d',
  'opis/closure' => '3.5.7@4531e53afe2fc660403e76fb7644e95998bff7bf',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'paragonie/sodium_compat' => 'v1.13.0@bbade402cbe84c69b718120911506a3aa2bae653',
  'pda/pheanstalk' => 'v4.0.2@7fe4547fe62c2fff37e47cc469905dec04d7d352',
  'php-http/client-common' => '2.3.0@e37e46c610c87519753135fb893111798c69076a',
  'php-http/discovery' => '1.10.0@88ff14cad4a0db68b343260fa7ac3f1599703660',
  'php-http/guzzle6-adapter' => 'v2.0.1@6074a4b1f4d5c21061b70bab3b8ad484282fe31f',
  'php-http/httplug' => '2.2.0@191a0a1b41ed026b717421931f8d3bd2514ffbf9',
  'php-http/message' => '1.9.0@2c7256e3c1aba0bfca70f099810f1c7712e00945',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => '1.1.0@4c4c1f9b7289a2ec57cde7f1e9762a5789506f88',
  'phpoption/phpoption' => '1.7.5@994ecccd8f3283ecf5ac33254543eb0ac946d525',
  'phpseclib/phpseclib' => '2.0.29@497856a8d997f640b4a516062f84228a772a48a8',
  'predis/predis' => 'v1.1.6@9930e933c67446962997b05201c69c2319bf26de',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.10.4@a8aec1b2981ab66882a01cce36a49b6317dc3560',
  'pusher/pusher-php-server' => 'v4.1.4@e75e5715e3b651ec20dee5844095aadefab81acb',
  'rackspace/php-opencloud' => 'v1.16.0@d6b71feed7f9e7a4b52e0240a79f06473ba69c8c',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.1.1@24d93aefb2cd786b7edd9f45b554aea20b28b9b1',
  'ramsey/uuid' => '4.1.1@cd4032040a750077205918c86049aa0f43d22947',
  'sentry/sdk' => '2.2.0@089858b1b27d3705a5fd1c32d8d10beb55980190',
  'sentry/sentry' => '2.5.0@bab5b73dbaf5f0ff62317e1611d952764d5514a9',
  'sentry/sentry-laravel' => '1.9.0@8567e70d03081cbc04e35eb3fa7389d06816196e',
  'spatie/dropbox-api' => '1.15.0@0cac9d3b613514cba2fef7b8f00b41a7b9d2b2a3',
  'spatie/flysystem-dropbox' => '1.2.2@512e8d59b3f9b8a6710f932c421032cb490e9869',
  'spatie/laravel-analytics' => '3.10.1@61eb3a00b799a38f355dc24e378e92f98e71ed6b',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/cache' => 'v5.1.5@c31bdd71f30435baff03693e684469c7ecb3ca1a',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/console' => 'v5.1.5@186f395b256065ba9b890c0a4e48a91d598fa2cf',
  'symfony/css-selector' => 'v5.1.5@e544e24472d4c97b2d11ade7caacd446727c6bf9',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/dom-crawler' => 'v5.1.5@3ac31ffbc596e41ca081037b7d78fc7a853c0315',
  'symfony/error-handler' => 'v5.1.5@525636d4b84e06c6ca72d96b6856b5b169416e6a',
  'symfony/event-dispatcher' => 'v5.1.5@94871fc0a69c3c5da57764187724cdce0755899c',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/finder' => 'v5.1.5@2b765f0cf6612b3636e738c0689b29aa63088d5d',
  'symfony/http-client' => 'v5.1.5@21c4372e9cd2305313f4d4792d7b9fa7c25ade53',
  'symfony/http-client-contracts' => 'v2.2.0@3a5d0fe7908daaa23e3dbf4cee3ba4bfbb19fdd3',
  'symfony/http-foundation' => 'v5.1.5@41a4647f12870e9d41d9a7d72ff0614a27208558',
  'symfony/http-kernel' => 'v5.1.5@3e32676e6cb5d2081c91a56783471ff8a7f7110b',
  'symfony/mime' => 'v5.1.5@89a2c9b4cb7b5aa516cf55f5194c384f444c81dc',
  'symfony/options-resolver' => 'v5.1.5@9ff59517938f88d90b6e65311fef08faa640f681',
  'symfony/polyfill-ctype' => 'v1.18.1@1c302646f6efc070cd46856e600e5e0684d6b454',
  'symfony/polyfill-iconv' => 'v1.18.1@6c2f78eb8f5ab8eaea98f6d414a5915f2e0fce36',
  'symfony/polyfill-intl-grapheme' => 'v1.18.1@b740103edbdcc39602239ee8860f0f45a8eb9aa5',
  'symfony/polyfill-intl-idn' => 'v1.18.1@5dcab1bc7146cf8c1beaa4502a3d9be344334251',
  'symfony/polyfill-intl-normalizer' => 'v1.18.1@37078a8dd4a2a1e9ab0231af7c6cb671b2ed5a7e',
  'symfony/polyfill-mbstring' => 'v1.18.1@a6977d63bf9a0ad4c65cd352709e230876f9904a',
  'symfony/polyfill-php70' => 'v1.18.1@0dd93f2c578bdc9c72697eaa5f1dd25644e618d3',
  'symfony/polyfill-php72' => 'v1.18.1@639447d008615574653fb3bc60d1986d7172eaae',
  'symfony/polyfill-php73' => 'v1.18.1@fffa1a52a023e782cdcc221d781fe1ec8f87fcca',
  'symfony/polyfill-php80' => 'v1.18.1@d87d5766cbf48d72388a9f6b85f280c8ad51f981',
  'symfony/polyfill-uuid' => 'v1.18.1@da48e2cccd323e48c16c26481bf5800f6ab1c49d',
  'symfony/process' => 'v5.1.5@1864216226af21eb76d9477f691e7cbf198e0402',
  'symfony/routing' => 'v5.1.5@47b0218344cb6af25c93ca8ee1137fafbee5005d',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/string' => 'v5.1.5@0de4cc1e18bb596226c06a82e2e7e9bc6001a63a',
  'symfony/translation' => 'v5.1.5@917b02cdc5f33e0309b8e9d33ee1480b20687413',
  'symfony/translation-contracts' => 'v2.2.0@77ce1c3627c9f39643acd9af086631f842c50c4d',
  'symfony/var-dumper' => 'v5.1.5@b43a3905262bcf97b2510f0621f859ca4f5287be',
  'symfony/var-exporter' => 'v5.1.5@eabaabfe1485ca955c5b53307eade15ccda57a15',
  'teamtnt/laravel-scout-tntsearch-driver' => 'v8.3.0@a13b7cfe78a70feaf061071a4b681d449b59d875',
  'teamtnt/tntsearch' => 'v2.3.0@01bb54c35a0c47eb41b145f76c384ef83b5a5852',
  'tijsverkoyen/css-to-inline-styles' => '2.2.3@b43b05cf43c1b6d849478965062b6ef73e223bb5',
  'torann/geoip' => '1.2.2@72ebbe4202679e73953fa03d0c3d3c276c79179e',
  'vlucas/phpdotenv' => 'v4.1.8@572af79d913627a9d70374d27a6f5d689a35de32',
  'voku/portable-ascii' => '1.5.3@25bcbf01678930251fd572891447d9e318a6e2b8',
  'willdurand/email-reply-parser' => '2.9.0@642bec19af70c2bf2f2611301349107fe2e6dd08',
  'zbateson/mail-mime-parser' => '1.2.2@638a5deeafe6fb78c05d509ac92ddb23a7480cfa',
  'zbateson/mb-wrapper' => '1.0.0@723f25a1ab0e4e662efa8d89f38da751c799134a',
  'zbateson/stream-decorators' => '1.0.4@6f54738dfecc65e1d5bfb855035836748083a6dd',
  'barryvdh/laravel-ide-helper' => 'v2.8.1@affa55122f83575888d4ebf1728992686e8223de',
  'barryvdh/reflection-docblock' => 'v2.0.6@6b69015d83d3daf9004a71a89f26e27d27ef6a16',
  'composer/ca-bundle' => '1.2.8@8a7ecad675253e4654ea05505233285377405215',
  'composer/composer' => '1.10.13@47c841ba3b2d3fc0b4b13282cf029ea18b66d78b',
  'composer/semver' => '1.7.0@114f819054a2ea7db03287f5efb757e2af6e4079',
  'composer/spdx-licenses' => '1.5.4@6946f785871e2314c60b4524851f3702ea4f2223',
  'composer/xdebug-handler' => '1.4.3@ebd27a9866ae8254e873866f795491f02418c5a5',
  'facade/flare-client-php' => '1.3.5@25907a113bfc212a38d458ae365bfb902b4e7fb8',
  'facade/ignition' => '2.3.7@b364db8860a63c1fb58b72b9718863c21df08762',
  'facade/ignition-contracts' => '1.0.1@aeab1ce8b68b188a43e81758e750151ad7da796b',
  'filp/whoops' => '2.7.3@5d5fe9bb3d656b514d455645b3addc5f7ba7714d',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'itsgoingd/clockwork' => 'v4.1.7@49c28d7c43f6021eca4c290f620f13ee7d15f668',
  'justinrainbow/json-schema' => '5.2.10@2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
  'nunomaduro/collision' => 'v4.2.0@d50490417eded97be300a92cd7df7badc37a9018',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/type-resolver' => '1.3.0@e878a14a65245fbe78f8080eba03b47c3b705651',
  'scrivo/highlight.php' => 'v9.18.1.2@efb6e445494a9458aa59b0af5edfa4bdcc6809d9',
  'seld/jsonlint' => '1.8.2@590cfec960b77fd55e39b7d9246659e95dd6d337',
  'seld/phar-utils' => '1.1.1@8674b1d84ffb47cc59a101f5d5a3b61e87d23796',
  'symfony/filesystem' => 'v5.1.5@f7b9ed6142a34252d219801d9767dedbd711da1a',
  'laravel/laravel' => 'dev-master@d60d1bc15f04d7b5008807d9d36eabe6e1cfb2a0',
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
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
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
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
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
