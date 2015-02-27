# gaps

Stop minding the gap. Extend php with these polyfills and missing functionality.


#### Filled

- [`array_splice_preserve_keys()`](src/gaps.php#L7): an `array_splice` which does preverse the keys of the replacement array


#### Polyfilled

- [`empty_expression()`](src/poyfills.php#L9): an `empty` which works on expressions (when below PHP 5.5.0)


## Installation

[Use Composer](http://getcomposer.org/). Add `alsvanzelf/gaps` to your project's `composer.json`:

```json
{
	"require": {
		"alsvanzelf/gaps": "dev-master"
	}
}
```

Start your file with

```php
use alsvanzelf\gaps\gaps;
use alsvanzelf\gaps\polyfills;
```

And use the methods where you need:

```php
gaps::method_name();
polyfills::method_name();
```


## Contributing

Pull Requests or issues are welcome!


## Licence

MIT
