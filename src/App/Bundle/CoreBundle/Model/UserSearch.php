<?php

namespace App\Bundle\CoreBundle\Model;


class UserSearch
{

    private $fieldPrefix;

    private $firstName;

    private $isActive;

    private $dateFrom;

    private $dateTo;

    public function __construct()
    {
        $this->fieldPrefix = "";
        $this->firstName = "";
    }

    /**
     * Gets the value of firstName.
     *
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the value of firstName.
     *
     * @param mixed $firstName the first name
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }



    /**
     * Gets the value of isActive.
     *
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Sets the value of isActive.
     *
     * @param mixed $isActive the is active
     *
     * @return self
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }



    /**
     * Gets the value of dateFrom.
     *
     * @return mixed
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets the value of dateFrom.
     *
     * @param mixed $dateFrom the date from
     *
     * @return self
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Gets the value of dateTo.
     *
     * @return mixed
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets the value of dateTo.
     *
     * @param mixed $dateTo the date to
     *
     * @return self
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }
}