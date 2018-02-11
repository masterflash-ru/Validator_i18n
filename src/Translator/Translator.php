<?php
/**
	модуль перевода в валидаторе, странно зачем разработчики разорвали стандартный i18 и валидаторы
	
 */

namespace Mf\Validator_i18n\Translator;


use Zend\Validator\Translator\TranslatorInterface;
use Zend\I18n\Translator\Translator as Zend_Translator_i18;

/**
 * полное повторение функционала Translator из пакета Zend
 */
class Translator  extends Zend_Translator_i18 implements TranslatorInterface
{
}
