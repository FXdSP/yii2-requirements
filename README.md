Requirements

============

An extension to manage requirements in an yii2 project



Installation

------------



The preferred way to install this extension is through [composer](http://getcomposer.org/download/).



Either run



```

php composer.phar require --prefer-dist fxdsp/yii2-requirements "*"

```



or add



```

"fxdsp/yii2-requirements": "*"

```



to the require section of your `composer.json` file.

Migration

-----



You'll found migration for `MySQL` in `fxdsp/yii2-requirements/migrations`

Copy paste migrations in you own migrations project folder and run 

```

php yii migrate

```

Or run directly migrate command with specific `--migrationPath` option

```

php yii migrate --migrationPath=app\vendor\fxdsp\yii2-requirements\migrations

```

Usage

-----



Once the extension is installed, simply use it in your code by  :



```php

<?= \fxdsp\requirements\AutoloadExample::widget(); ?>```
