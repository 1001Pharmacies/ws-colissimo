<?php

namespace WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Choice;

/**
 * RequestType
 */
class RequestType
{
    const CREATE_PDF_FILE           = 'CreatePDFFile';
    const RETURN_PDF_IN_RESPONSE    = 'ReturnPDFInResponse';
    const SEND_PDF_BY_MAIL          = 'SendPDFByMail';
    const SEND_PDF_LINK_BY_MAIL     = 'SendPDFLinkByMail';

    /**
     * Return an array of the class constants
     *
     * @return array
     */
    public static function getChoices()
    {
        $choices = array();

        $reflect = new \ReflectionClass(__CLASS__);
        $constants = array_keys($reflect->getConstants());

        foreach ($constants as $constant) {
            $choices[] = $reflect->getConstant($constant);
        }

        return $choices;
    }
}
