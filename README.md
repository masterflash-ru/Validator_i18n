Подключение ресурсного пакета zendframework/zend-i18n-resources к системе путем делегиговария.
Пока мультиязычность системы не создана, везде нужно указывать имя локали, в данном случае ru, что бы подгружались нужные файлы с переводом.

Установка
composer require masterflash-ru/Validator_i18n

Использование:

В фабрике контроллера, например,:
```php
use Zend\Validator\Translator\TranslatorInterface;

....

$translator = $container->get(TranslatorInterface::class);
...


/*
$translator - готовый к использованию объект переводчика, его нужно отдать валидатору.

\Zend\Validator\AbstractValidator::setDefaultTranslator($translator);


*/