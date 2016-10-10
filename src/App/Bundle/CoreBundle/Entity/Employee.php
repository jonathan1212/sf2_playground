<?php

namespace App\Bundle\CoreBundle\Entity;

/**
 * Employee
 */
class Employee extends User
{
    /**
     * @var string
     */
    private $job;

    /**
     * @var string
     */
    private $company;


    /**
     * Set job
     *
     * @param string $job
     *
     * @return Employee
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return Employee
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }
}
