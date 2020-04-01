## Laravel-Localize

This package requires `propaganistas/laravel-intl` and auto registers a web middleware that sets user locales on session properly.

And also registers web routes as /locale/*key* for all available locales.

You can set your available locales on your projects by adding a locales key and an array to your `config/app.php`

```
    'locale' => 'en',
    'locales' => ['en','tr','es','de'],
```

And later on; if you visit any of the available locales from locale/en ; you'll it'll be saved to your session and all supported libraries (like jenssegers/date) will be responding as expected.


You can get more detailed information about supported packages from https://github.com/Propaganistas/Laravel-Intl

## Sample Output After Proper Installation

```
{{ country('US') }} <br>
{{ currency('GBP') }} <br>
{{ language('es') }} <br>
```

Locale: tr

```
Amerika Birleşik Devletleri 
İngiliz Sterlini 
İspanyolca 
```

Locale: en

```
United States 
British Pound 
Spanish 
```

Locale: es

```
Estados Unidos 
libra esterlina 
español 
```

Locale: de

```
Vereinigte Staaten 
Britisches Pfund 
Spanisch 
```

Locale: ru

```
Соединенные Штаты 
британский фунт стерлингов 
испанский 
```

## Opting Out Of Package Discovery

If you would like to disable auto-discovery for this package or want to use your customized Service Provider instead of package’s, you may add this package to the extra section in applications composer file:

```
"extra": {
    "laravel": {
        "dont-discover": [
            "epigra/laravel-localize"
        ]
    }
},
```
