<?php
/**
 * This file is automatically @generated by {@link BuildMetadataPHPFromXml}.
 * Please don't modify it directly.
 */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[01]\\d{1,5}',
    'PossibleNumberPattern' => '\\d{2,6}',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '[01]\\d{1,5}',
    'PossibleNumberPattern' => '\\d{2,6}',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '[01]\\d{1,5}',
    'PossibleNumberPattern' => '\\d{2,6}',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '
          116(?:
            000|
            1(?:
              11|
              23
            )
          )
        ',
    'PossibleNumberPattern' => '\\d{6}',
    'ExampleNumber' => '116000',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'pager' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'uan' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => '
          0(?:
            11?|
            22?|
            33?
          )|
          1(?:
            0[123]|
            12
          )
        ',
    'PossibleNumberPattern' => '\\d{2,6}',
    'ExampleNumber' => '112',
  ),
  'voicemail' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => '
          0(?:
            11?|
            22?|
            33?
          )|
          1(?:
            0[123]|
            1(?:
              2|
              6(?:
                000|
                1(?:
                  11|
                  23
                )
              )
            )
          )
        ',
    'PossibleNumberPattern' => '\\d{2,6}',
    'ExampleNumber' => '112',
  ),
  'standardRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'carrierSpecific' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'id' => 'LT',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => true,
  'numberFormat' => 
  array (
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
);