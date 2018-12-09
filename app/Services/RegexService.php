<?php
namespace App\Services;

class RegexService
{

    const ALLOWED_SPECIAL_CHAR_LIST_GENERAL = '~`?"\'.,!@#$%^&*()_\-';

    const CUSTOM_TEXT_VALIDATION = '/^[a-zA-Z0-9'.self::ALLOWED_SPECIAL_CHAR_LIST_GENERAL.'\/\:\s]+$/i';
    /*
     * start with a-z + contains a-Z or 0-9 or given symbols or space
     */
    const GENERAL_TEXT_VALIDATION = '/^[a-zA-Z0-9'.self::ALLOWED_SPECIAL_CHAR_LIST_GENERAL.'\s]+$/i';

    const SEARCH_TEXT_VALIDATION = '/^[a-zA-Z0-9'.self::ALLOWED_SPECIAL_CHAR_LIST_GENERAL.'\|\s]+$/i';
    
    const PASSWORD_VALIDATION_RULE_PART_1  = "/(?=.*[A-z])(?=.*[0-9])\S{8,15}$/";

    const PASSWORD_VALIDATION_RULE_PART_2 = "/^[a-zA-Z0-9".self::ALLOWED_SPECIAL_CHAR_LIST_GENERAL."]*$/";

    const LETTERS_AND_SPACE_ONLY     = "/^[A-z]+[A-z \/s]*$/";

    const LETTERS_ONLY               = "/^[A-z]+$/";
    
    const LETTERS_NUMBERS_UNDERSCORE_ONLY =  "/^[A-z]+[A-z0-9_]*$/";

    const LETTERS_NUMBERS_UNDERSCORE_SPACE_ONLY =  "/^[A-z]+[A-z0-9_\s]*$/";

    const LETTERS_NUMBERS_SPACE_ONLY = "/^[A-z]+[A-z0-9\s]*$/"; //start with a alphabet

    const PHONE_NUMBER               = "/^[0-9+\-\s]{4,15}+$/";

    const POSTIVE_WHOLE_NUMBER       = "/^[1-9]\d*$/";
    
    const GENERAL_NUMBER_VALIDATION  = "/^[0-9]+(\\.[0-9]+)?$/";

    const ZIP                        = "/^[0-9+-]{4,12}+$/";

    

}