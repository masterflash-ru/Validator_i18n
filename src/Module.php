<?php
/**
* модуль перевода в валидаторе, подключает модуль с переводами для валидаторовы
*/

namespace Mf\Validator_i18n;
use Zend\Validator\Translator\TranslatorInterface;
use Mf\Validator_i18n\Translator\TranslatorDelegator;

class Module
{
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