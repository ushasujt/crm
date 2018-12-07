<?php

namespace App\Services;

class Common
{

    /*
     * Format validator Error message
     *
     */
    public static function prepareValidationErrorMsg($oError)
    {

        $aError = $oError->toArray();
        $aErrorMsg = [];

        foreach ($aError as $key => $aVal) {
            $aErrorMsg[] = implode(',', $aVal);
        }

        return implode(',', $aErrorMsg);
    }

    /*
     * function to format date format to database structure // yyyy-mm-dd
     *
     */
    
    public static function dateFormatToDatabase($date, $inputFormat=null)
    {
      return $date;    
    } 
    
    /*
     * function to format date format to database structure 
     *
     */
    public static function dateFormatToCustom($date, $inputFormat=null, $outputFormat=null)
    {
      return $date;    
    }
    
    /*
     * function to convert give english string to give language
     *
     */
    
    public static function wb_xlt($input, $languageId=null)
    {
        return $input;
    }
    
}