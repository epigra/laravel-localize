## Laravel-Localize

This package auto registers a web middleware that sets user locales on session properly.

And also registers web routes as `locale/{locale}` for all available locales to set app locale on session and redirect user back.

You can set your available locales on your projects by adding a locales key and an array to your `config/app.php`

```
    'locale' => 'en',
    'locales' => ['en','tr','es','de'],
```

If you visit any of the available locales from `locale/{locale}` it'll set the session variable and your app locale would be also initiated automatically.

You can check https://github.com/epigra/laravel-int if you need country, currency and languages.


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
