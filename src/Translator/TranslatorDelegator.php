<?php
/**
* модуль перевода в валидаторе, делегатор для обертывания русурсного файла с сообщениями
 */

namespace Mf\Validator_i18n\Translator;


use Interop\Container\ContainerInterface;
use Zend\I18n\Translator\Resources;
use Zend\ServiceManager\DelegatorFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TranslatorDelegator implements DelegatorFactoryInterface
{
    public function __invoke(ContainerInterface $container, $name, callable $callback, array $options = null)
    {
        $translator = $callback();

        $translator->addTranslationFilePattern(
            'phpArray',
            Resources::getBasePath(),
            Resources::getPatternForValidator()
        );
        $translator->addTranslationFilePattern(
            'phpArray',
            Resources::getBasePath(),
            Resources::getPatternForCaptcha()
        );

        return $translator;
    }

    public function createDelegatorWithName(ServiceLocatorInterface $container,$name, $requestedName, $callback) 
    {
        return $this($container, $requestedName, $callback);
    }
}
