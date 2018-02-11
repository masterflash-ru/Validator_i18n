<?php
/**
	модуль перевода в валидаторе, странно зачем разработчики разорвали стандартный i18 и валидаторы
	фабрика создания переводчика для валидатора
 */

namespace Mf\Validator_i18n\Translator;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Translator.
 */
class TranslatorServiceFactory implements FactoryInterface
{
    /**
     * Create a Translator instance.
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return Translator
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // Configure the translator
        $config = $container->get('config');
        $trConfig = isset($config['validator_translator']) ? $config['validator_translator'] : [];
        //смотрим есть ли в настройках стандартный валидатор
		//если есть, то смотрим наличие там локали которая будет использоваться в переводчике
		if (isset($config['translator']["locale"]))
			{
				$trConfig["locale"]=$config['translator']["locale"];
			}
		$translator = Translator::factory($trConfig);
        return $translator;
    }

    /**
     * zend-servicemanager v2 factory for creating Translator instance.
     *
     * Proxies to `__invoke()`.
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @returns Translator
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return $this($serviceLocator, Translator::class);
    }
}
