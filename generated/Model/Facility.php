<?php

namespace Limestone\SDK\Model;

class Facility
{
    /**
     * The facility name
     *
     * @var string
     */
    protected $facilityName;
    /**
     * The title of the facility
     *
     * @var string
     */
    protected $facilityTitle;
    /**
     * The descriptions of the facility
     *
     * @var string
     */
    protected $facilityDescription;
    /**
     * The facility name
     *
     * @return string|null
     */
    public function getFacilityName() : ?string
    {
        return $this->facilityName;
    }
    /**
     * The facility name
     *
     * @param string|null $facilityName
     *
     * @return self
     */
    public function setFacilityName(?string $facilityName) : self
    {
        $this->facilityName = $facilityName;
        return $this;
    }
    /**
     * The title of the facility
     *
     * @return string|null
     */
    public function getFacilityTitle() : ?string
    {
        return $this->facilityTitle;
    }
    /**
     * The title of the facility
     *
     * @param string|null $facilityTitle
     *
     * @return self
     */
    public function setFacilityTitle(?string $facilityTitle) : self
    {
        $this->facilityTitle = $facilityTitle;
        return $this;
    }
    /**
     * The descriptions of the facility
     *
     * @return string|null
     */
    public function getFacilityDescription() : ?string
    {
        return $this->facilityDescription;
    }
    /**
     * The descriptions of the facility
     *
     * @param string|null $facilityDescription
     *
     * @return self
     */
    public function setFacilityDescription(?string $facilityDescription) : self
    {
        $this->facilityDescription = $facilityDescription;
        return $this;
    }
}