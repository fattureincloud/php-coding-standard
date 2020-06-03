# php-coding-standard
PHP CS Fixer coding standard, extended from @PhpCsFixer.

## Usage

### Add lint-staged action
Put this line as lint-staged action in package.json.
```
"lint-staged": {
    ...
    "*.php": "php ./vendor/bin/php-cs-fixer fix --allow-risky=yes --config ./vendor/fattureincloud/php-code-standard/.php_cs.dist"
    ...
  },
```

### Add composer script
Add the following line under composer.json scripts property.
```
"scripts": {
    ...
    "php-cs-fixer": "php-cs-fixer --allow-risky=yes --config=./vendor/fattureincloud/php-code-standard/.php_cs.dist"
    ...
}
```

### PHPStorm: enable inspections
- Search for "PHP CS Fixer" under Quality Tools
- Add a local configuration with path `php-cs-fixer`
- Search for "PHP CS Fixer validation" under Inspections
- Flag "Allow ricky rules"
- Select Custom ruleset
- Click on the 3 dots and enter `<your-project-directory>/vendor/fattureincloud/php-code-standard/.php_cs.dist`

### PHPStorm: configure file watcher
Create a file watcher with the following values:
```
Name: php-cs-fixer
File type: PHP
Scope: Current File
Program: php-cs-fixer
Arguments: fix --allow-risky=yes --config=$ProjectFileDir$/vendor/fattureincloud/php-code-standard/.php_cs.dist $FileDir$/$FileName$
Output paths to refresh: $FileDir$/$FileName$
```
De-flag all the advanced options.

### PHPStorm: configure external tool
Create an external tool with the following values:
```
Name: Run PHP CS Fixer
File type: Run PHP CS Fixer
Group: External Tools
Program: php-cs-fixer
Arguments: fix --allow-risky=yes --config=$ProjectFileDir$/.php_cs.dist --verbose $ProjectFileDir$
```
Flag `Synchronize files after execution` and `Open console for tool output`.
