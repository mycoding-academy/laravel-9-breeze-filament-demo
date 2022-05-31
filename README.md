[![tests](https://github.com/mycoding-academy/laravel-9-breeze-filament-demo/actions/workflows/run_tests.yml/badge.svg?branch=main)](https://github.com/mycoding-academy/laravel-9-breeze-filament-demo/actions/workflows/run_tests.yml)

## About this application
This is a demo application based on Laravel/Breeze and Filament package.

- Split user 's name into first and last name
- Override make:filament-user artisan command to support adding first name and last name.

## Packages mainly used in this application
- Laravel breeze
- Filament admin panel
- Spatie's Laravel permission

## Testing
I will try to keep update test cases with new feature added. You can use artisan command or call vendor\bin\phpunit to test for all cases. Please see phpunit.xml.dist for detail configuration. SQLite memory database is used for testing. Feel free to change to MySQL or PosgreSQL.

```
php artisan test
```

```
vendor\bin\phpunit
```

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Prasit Gebsaap via [prasit.gebsaap@gmail.com](mailto:prasit.gebsaap@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The application is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
