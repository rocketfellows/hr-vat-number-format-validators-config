<?php

namespace rocketfellows\HRVatNumberFormatValidatorsConfig;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface;
use rocketfellows\HRVatFormatValidator\HRVatFormatValidator;
use rocketfellows\SpecificCountryVatNumberFormatValidatorsConfig\SpecificCountryVatNumberFormatValidatorsConfig;

class HRVatNumberFormatValidatorsConfig extends SpecificCountryVatNumberFormatValidatorsConfig
{
    public function getCountry(): Country
    {
        return ISO3166::HR();
    }

    protected function getDefaultValidator(): CountryVatFormatValidatorInterface
    {
        return new HRVatFormatValidator();
    }
}
