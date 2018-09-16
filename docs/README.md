<h6 align="center">
    <img src=""/>
</h6>

<h6 align="center">
    A PHP package to assist in retrieving a country's year bank holiday listings with name and date from Google Calendar API's.
</h6>

<p align="center">
<a href="https://travis-ci.org/stephenlake/php-google-holidays"><img src="https://img.shields.io/travis/stephenlake/php-google-holidays/master.svg?style=flat-square" alt="Build Status"></a>
<a href="https://github.styleci.io/repos/148940371"><img src="https://github.styleci.io/repos/148940371/shield?branch=master&style=flat-square" alt="StyleCI"></a>
<a href="https://github.com/stephenlake/php-google-holidays"><img src="https://img.shields.io/github/release/stephenlake/php-google-holidays.svg?style=flat-square" alt="Release"></a>
<a href="https://github.com/stephenlake/php-google-holidays/LICENSE.md"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="License"></a>
</p>

## Getting Started

Install the package via composer.

    composer require stephenlake/php-google-holidays

## Usage

### Instantiation

```php
$instance = new \Google\Holidays();
```

### Get Holiday's Name & Date
**Return only `name` and `date`**
```php
$holidays = $instance->withApiKey('<your-google-calendar-api-key>')
                     ->inCountry('US')
                     ->withMinimalOutput()
                     ->list();
```
**Sample Output**
```
[
  "name": "A holiday",
  "date": "2018-01-01"
],
[
  "name": "Another holiday",
  "date": "2018-02-01"
]
```

### Get Holiday's Dates Only
**Return only dates**
```php
$holidays = $instance->withApiKey('<your-google-calendar-api-key>')
                     ->inCountry('UK')
                     ->withDatesOnly()
                     ->list();
```

**Sample Output**
```
[
  "2018-01-01",
  "2018-02-01",
  "2018-03-15"
]
```
