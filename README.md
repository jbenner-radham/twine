# Twine
> A simple PHP string handling library.

[![License][img-license]](LICENSE.md)
~~[![Latest Version on Packagist][img-version]][link-packagist]~~

## Install

~~Via Composer...~~

Composer install support coming soon.

## Usage

``` php
// Prints a `PHP_EOL` appended "Hello"
\RadHam\Twine::factory('Hello World')->remove('World')->trim()->printLn();
```

## Testing

``` bash
$ composer test
```

## License

The MIT License (Expat). Please see the [license file](LICENSE.md) for details.

[img-license]: https://img.shields.io/github/license/jbenner-radham/twine.svg
[img-version]: https://img.shields.io/packagist/v/:vendor/:package_name.svg

[ico-travis]: https://img.shields.io/travis/:vendor/:package_name/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/:vendor/:package_name.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/:vendor/:package_name.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/:vendor/:package_name
[link-travis]: https://travis-ci.org/:vendor/:package_name
[link-scrutinizer]: https://scrutinizer-ci.com/g/:vendor/:package_name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/:vendor/:package_name
[link-author]: https://github.com/:author_username
