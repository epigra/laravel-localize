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
