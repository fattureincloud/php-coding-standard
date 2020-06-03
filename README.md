# php-coding-standard
PHP CS Fixer coding standard, extended from @PhpCsFixer.

## Prerequisites
You need to install PHP CS Fixer installed locally in the project and husky + lint-staged configured in order to make all of this working properly.

#### Install PHP CS Fixer
```
composer require friendsofphp/php-cs-fixer --dev
```

#### Install husky + lint-staged
```
npm install husky --save-dev
npm install lint-staged --save-dev
```
Add this lines to package.json:
```
"lint-staged": {},
"husky": {
    "hooks": {
      "pre-commit": "lint-staged"
    }
}
```
Remember to add package.json and package-lock.json to `.gitignore`.

## Installation and usage

```
composer require fattureincloud/php-code-standard --dev
```

#### Add lint-staged action
Put this line as lint-staged action in package.json in order to execute PHP CS Fixer on all the staged files at commit time.
```
"lint-staged": {
    ...
    "*.php": "php ./vendor/bin/php-cs-fixer fix --allow-risky=yes --config ./vendor/fattureincloud/php-code-standard/.php_cs.dist"
    ...
},
```

#### Add composer script (optional)
Add the following line under composer.json scripts property.
```
"scripts": {
    ...
    "php-cs-fixer": "./vendor/bin/php-cs-fixer --allow-risky=yes --config=./vendor/fattureincloud/php-code-standard/.php_cs.dist"
    ...
}
```

### PHPStorm

#### Enable inspections
- Search for "PHP CS Fixer" under Quality Tools
- Add a local configuration with path `$PROJECT_DIR$/vendor/friendsofphp/php-cs-fixer/php-cs-fixer`
- Search for "PHP CS Fixer validation" under Inspections
- Flag "Allow ricky rules"
- Select Custom ruleset
- Click on the 3 dots and enter `<your-project-directory>/vendor/fattureincloud/php-code-standard/.php_cs.dist`

### Configure file watcher
Create a file watcher with the following values:
```
Name: php-cs-fixer
File type: PHP
Scope: Current File
Program: $ProjectFileDir$/vendor/friendsofphp/php-cs-fixer/php-cs-fixer
Arguments: fix --allow-risky=yes --config=$ProjectFileDir$/vendor/fattureincloud/php-code-standard/.php_cs.dist $FileDir$/$FileName$
Output paths to refresh: $FileDir$/$FileName$
```
De-flag all the advanced options.

### Configure external tool (optional)
Create an external tool with the following values:
```
Name: Run PHP CS Fixer
File type: Run PHP CS Fixer
Group: External Tools
Program: $ProjectFileDir$/vendor/friendsofphp/php-cs-fixer/php-cs-fixer
Arguments: fix --allow-risky=yes --config=$ProjectFileDir$/.php_cs.dist --verbose $ProjectFileDir$
```
Flag `Synchronize files after execution` and `Open console for tool output`.

### VSCode
TODO
