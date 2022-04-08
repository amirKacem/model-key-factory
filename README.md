# A simple package to generate Eloquent Model Keys


You can publish the config file with:
```bash
php artisan vendor:publish --provider="Eloquent\KeyFactory\KeyFactoryServiceProvider" --tag="key-factory-config"
```

This is the contents of the published config file:

```php
return [
    'key' => [
        'length' => 20,
    ]
];
```

## Usage

This is a very simple to use package. There are two available methods to generate the key:

### Using the Key Factory

```php
$key = \Eloquent\KeyFactory\KeyFactory::generate(
    prefix: 'tests', // what you want to prefix your keys with.
    length: 20, // optional - the default of 20 is set in the config.
);
```

### Using the Str helper

```php
$key = \Illuminate\Support\Str::key(
    prefix: 'tests', // what you want to prefix your keys with.
    length: 20, // optional - the default of 20 is set in the config.
);
```

### Test
```bash
vendor/bin/phpunit
```


## Eloquent Integration

There is an eloquent model trait available to use called `HasKey` which will:

> When you are creating an eloquent model, the trait will be booted.
> It will get the first 3 characters of the Model name, force them to lowercase and append a "_" and use this as the prefix for the Key Factory
