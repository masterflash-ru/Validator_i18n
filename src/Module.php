<?php
/**
* модуль перевода в валидаторе, странно зачем разработчики разорвали стандартный i18 и валидаторы
* весь этот модуль нужен для того что бы по сути к стандартному Translator был привязан интерфейс который полностью повторяет стандартный 
*из i18n  
 */

namespace Mf\Validator_i18n;
use Laminas\Validator\Translator\TranslatorInterface;
use Mf\Validator_i18n\Translator\TranslatorDelegator;

class Module
{
    /**
     */
    public function getConfig()
    {
        return [
            'service_manager' => [
                'factories' => [
                    TranslatorInterface::class => Translator\TranslatorServiceFactory::class,
                ],
                'delegators' => [
                    TranslatorInterface::class => [
                          TranslatorDelegator::class,
                    ],
                ],
            ],
        ];
    }

}
