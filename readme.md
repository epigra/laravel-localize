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
{{ Date::parse('-1 day')->diffForHumans() }} <br>
{{ country('US') }} <br>
{{ currency('GBP') }} <br>
{{ language('es') }} <br>
{{ Date::now()->format('l j F Y H:i:s') }}
```

Locale: tr

```
1 gün önce 
Amerika Birleşik Devletleri 
İngiliz Sterlini 
İspanyolca 
Salı 15 Ocak 2019 22:27:34
```

Locale: en

```
1 day ago 
United States 
British Pound 
Spanish 
Tuesday 15 January 2019 22:27:34
```

Locale: es

```
hace 1 día 
Estados Unidos 
libra esterlina 
español 
martes 15 enero 2019 22:27:34
```

Locale: de

```
vor 1 Tag 
Vereinigte Staaten 
Britisches Pfund 
Spanisch 
Dienstag 15 Januar 22:27:34
```

Locale: ru

```
1 день назад 
Соединенные Штаты 
британский фунт стерлингов 
испанский 
вторник 15 января 2019 22:27:34
```

## Opting Out Of Package Discovery

If you would like to disable package discovery for a this package, and want to use your own Service Provider you may list the package name in the extra section of your application's composer.json file:

```
"extra": {
    "laravel": {
        "dont-discover": [
            "epigra/laravel-localize"
        ]
    }
},
```
