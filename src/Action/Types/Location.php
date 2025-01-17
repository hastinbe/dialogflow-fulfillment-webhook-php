<?php

namespace Dialogflow\Action\Types;

use Dialogflow\Action\Types\LatLng;
use Dialogflow\Action\Types\PostalAddress;

class Location
{
    protected ?string $city;

    protected ?LatLng $coordinates;

    protected ?string $formattedAddress;

    protected ?string $name;

    protected ?string $notes;

    protected ?string $phoneNumber;

    protected ?PostalAddress $postalAddress;

    protected ?string $zipCode;

    /**
     * @param array $data request array
     */
    public function __construct($data)
    {
        if (isset($data['city'])) {
            $this->city = $data['city'];
        }

        if (isset($data['coordinates'])) {
            $this->coordinates = new LatLng($data['coordinates']);
        }

        if (isset($data['formattedAddress'])) {
            $this->formattedAddress = $data['formattedAddress'];
        }

        if (isset($data['name'])) {
            $this->name = $data['name'];
        }

        if (isset($data['notes'])) {
            $this->notes = $data['notes'];
        }

        if (isset($data['phoneNumber'])) {
            $this->phoneNumber = $data['phoneNumber'];
        }

        if (isset($data['postalAddress'])) {
            $this->postalAddress = new PostalAddress($data['postalAddress']);
        }

        if (isset($data['zipCode'])) {
            $this->zipCode = $data['zipCode'];
        }
    }

    /**
     * City.
     * Requires the DEVICE_PRECISE_LOCATION or
     * DEVICE_COARSE_LOCATION permission.
     *
     * @return null|string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Geo coordinates.
     * Requires the DEVICE_PRECISE_LOCATION permission.
     *
     * @return null|LatLng
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * Display address, e.g., \"1600 Amphitheatre Pkwy, Mountain View, CA 94043\".
     * Requires the DEVICE_PRECISE_LOCATION permission.
     *
     * @return null|string
     */
    public function getFormattedAddress()
    {
        return $this->formattedAddress;
    }

    /**
     * Name of the place.
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Notes about the location.
     *
     * @return null|string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Phone number of the location, e.g. contact number of business location or
     * phone number for delivery location.
     *
     * @return null|string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Postal address.
     * Requires the DEVICE_PRECISE_LOCATION or
     * DEVICE_COARSE_LOCATION permission.
     *
     * @return null|PostalAddress
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * Zip code.
     * Requires the DEVICE_PRECISE_LOCATION or
     * DEVICE_COARSE_LOCATION permission.
     *
     * @return null|string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }
}
