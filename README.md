# GetCake PHP Client

## Installation

```js
composer require draperstudio/getcake-php-client:1.0.*@dev
```

## Example

```php
$client = new DraperStudio\GetCake\Client('http://f5mlogin.com/', 'AFFILIATE_ID', 'API_KEY');

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
