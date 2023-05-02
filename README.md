# IDEA codeception testing bug

## steps taken to create this repo:

```shell
composer init
composer require "codeception/codeception"
composer require "codeception/module-asserts"
php vendor/bin/codecept bootstrap
php vendor/bin/codecept init Acceptance
vendor/bin/codecept build
```

create file [BugCest.php](tests/Acceptance/BugCest.php)

Create in IDEA codeception configuration
