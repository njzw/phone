<?php
namespace JenesisZw;


use JenesisZw\PhoneLibrary as Lib;

class Phone
{
    protected string $phone;
    protected string $countryCode;

    public function __construct(string $phone, string $countryCode = 'ZW')
    {
        $this->phone = $phone;
        $this->countryCode = $countryCode;
    }

    /**
     * Get phone number in international format
     *
     * @return string
     */
    public function internationalFormat()
    {
        $phone = (new Lib($this->phone, $this->countryCode))->parse()->getE164Format()->done();

        return str_replace("+", "", $phone['standardFormat']);
    }

    /**
     * Get phone number in national format
     *
     * @return string
     */
    public function nationalFormat()
    {
        $phone = (new Lib($this->phone, $this->countryCode))->parse()->getNationalFormat()->done();

        return str_replace("+", "", $phone['nationalFormat']);
    }


    /**
     * check  if phone number is valid
     *
     * @return string
     */
    public function isValid()
    {
        $phone = (new Lib($this->phone, $this->countryCode))->parse()->getIsValid()->done();

        return $phone['isValid'];
    }

    /**
     * get country name from phone
     *
     * @return string
     */
    public function getCountry()
    {
        $phone = (new Lib($this->phone, $this->countryCode))->parse()->getPhoneDescription()->done();

        return $phone['country'];
    }
}