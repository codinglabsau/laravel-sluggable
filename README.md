# Laravel Sluggable

[![Build Status](https://travis-ci.org/codinglabsau/laravel-sluggable.svg?branch=master)](https://travis-ci.org/codinglabsau/laravel-sluggable)
[![Latest Stable Version](https://poser.pugx.org/codinglabsau/laravel-sluggable/v/stable)](https://packagist.org/packages/codinglabsau/laravel-sluggable)
[![Total Downloads](https://poser.pugx.org/codinglabsau/laravel-sluggable/downloads)](https://packagist.org/packages/codinglabsau/laravel-sluggable)
[![License](https://poser.pugx.org/codinglabsau/laravel-sluggable/license)](https://packagist.org/packages/codinglabsau/laravel-sluggable)

A super simple, opinionated trait to add slugs to models in Laravel. 

## Installation
Via Composer

``` bash
$ composer require codinglabsau/laravel-sluggable
```

## Usage
### Add `name` and `slug` columns to your model
This package watches for changes on the `name` attribute, and automatically slugifies the slug column.

### Add the trait
Add the `Sluggable` trait to your user model:

```php
use Codinglabs\Sluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;
}
```

## Contributing
Feel free to create a PR with tests!

## Security
If you discover any security related issues, create an issue on GitHub.

## Credits
- [Steve Thomas](https://github.com/stevethomas)
- [All Contributors](../../contributors)

## License
MIT. Please see the [license file](LICENSE.md) for more information.

## About Coding Labs
Coding Labs is a web app development agency based on the Gold Coast, Australia. See our open source projects [on our website](https://codinglabs.com.au/open-source).
