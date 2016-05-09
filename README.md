# GetCake PHP Client

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Install

Via Composer

``` bash
$ composer require apivore/getcake
```

## Usage

``` php
$client = new Apivore\GetCake\Client('http://f5mlogin.com/', 'AFFILIATE_ID', 'API_KEY');

$response = $client->api('Offers')->offerFeed([
    'campaign_name' => '',
    'media_type_category_id' => 0,
    'vertical_category_id' => 0,
    'vertical_id' => 0,
    'offer_status_id' => 0,
    'tag_id' => 0,
    'start_at_row' => 1,
    'row_limit' => 25,
]);

foreach ($response['offers'] as $offer) {
    var_dump(offer);
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hello@draperstudio.tech instead of using the issue tracker.

## Credits

- [Apivore][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/Apivore/getcake-php-client.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/Apivore/GetCake-PHP-Client/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/Apivore/getcake-php-client.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/Apivore/getcake-php-client.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/Apivore/getcake-php-client.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/Apivore/getcake-php-client
[link-travis]: https://travis-ci.org/Apivore/GetCake-PHP-Client
[link-scrutinizer]: https://scrutinizer-ci.com/g/Apivore/getcake-php-client/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/Apivore/getcake-php-client
[link-downloads]: https://packagist.org/packages/Apivore/getcake-php-client
[link-author]: https://github.com/Apivore
[link-contributors]: ../../contributors
