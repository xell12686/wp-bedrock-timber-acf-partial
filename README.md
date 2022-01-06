# Mura Technology

Main features/requirements:

* PHP >= 7.4
* MySQL >= 8.0
* [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx) as a dependency manager
* [Roots Bedrock](https://roots.io/bedrock/) as a modern WordPress boilerplate
* [WordPress Packagist](https://wpackagist.org/) for composer based plugin management
* [Timber](https://github.com/timber/timber) for Twig based WordPress templating
* [Timber Library](https://wordpress.org/plugins/timber-library/) and [ACF](https://en-gb.wordpress.org/plugins/advanced-custom-fields/) plugins (installed by composer out the box)
* [Laravel Mix](https://laravel-mix.com/) as a wrapper for webpack

## Local site setup:

1. Add needed auth.json for private composer depencies
2. Add .env to link WP database
3. Install depencies:

```bash
composer install
```
## Theme Front-end: 
```bash
// Node version: 14.17.4 or above
npm install 
```
### To compile and watch assets:
```bash
npx mix watch
```

### To compile assets for production:
```bash
npx mix --production
```

