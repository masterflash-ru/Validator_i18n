<?php
/**
	модуль перевода в валидаторе, странно зачем разработчики разорвали стандартный i18 и валидаторы
	весь этот модуль нужен для того что бы по сути к стандартному Translator был привязан интерфейс который полностью повторяет стандартный 
	из i18n  
 */

namespace Validator_i18n;
use Zend\Validator\Translator\TranslatorInterface;

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
				]
        ];
    }

}
