<?php
/**
	модуль перевода в валидаторе, странно зачем разработчики разорвали стандартный i18 и валидаторы
	
 */

namespace Mf\Validator_i18n\Translator;


use Laminas\Validator\Translator\TranslatorInterface;
use Laminas\I18n\Translator\Translator as Laminas_Translator_i18;

/**
 * полное повторение функционала Translator из пакета Laminas
 */
class Translator  extends Laminas_Translator_i18 implements TranslatorInterface
{
}
