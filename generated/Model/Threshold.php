<?php

namespace Limestone\SDK\Model;

class Threshold
{
    /**
     * The dollar threshold
     *
     * @var string
     */
    protected $thresholdDollars;
    /**
     * The day threshold
     *
     * @var string
     */
    protected $thresholdDays;
    /**
     * The estimated days before billing
     *
     * @var string
     */
    protected $estimateDays;
    /**
     * The avg usage
     *
     * @var string
     */
    protected $avgUsage;
    /**
     * The number of days since last billing
     *
     * @var string
     */
    protected $usageDays;
    /**
     * The number of dollars since last billing
     *
     * @var string
     */
    protected $usageDollars;
    /**
     * The time of last billing
     *
     * @var string
     */
    protected $lastBilled;
    /**
     * The dollar threshold
     *
     * @return string|null
     */
    public function getThresholdDollars() : ?string
    {
        return $this->thresholdDollars;
    }
    /**
     * The dollar threshold
     *
     * @param string|null $thresholdDollars
     *
     * @return self
     */
    public function setThresholdDollars(?string $thresholdDollars) : self
    {
        $this->thresholdDollars = $thresholdDollars;
        return $this;
    }
    /**
     * The day threshold
     *
     * @return string|null
     */
    public function getThresholdDays() : ?string
    {
        return $this->thresholdDays;
    }
    /**
     * The day threshold
     *
     * @param string|null $thresholdDays
     *
     * @return self
     */
    public function setThresholdDays(?string $thresholdDays) : self
    {
        $this->thresholdDays = $thresholdDays;
        return $this;
    }
    /**
     * The estimated days before billing
     *
     * @return string|null
     */
    public function getEstimateDays() : ?string
    {
        return $this->estimateDays;
    }
    /**
     * The estimated days before billing
     *
     * @param string|null $estimateDays
     *
     * @return self
     */
    public function setEstimateDays(?string $estimateDays) : self
    {
        $this->estimateDays = $estimateDays;
        return $this;
    }
    /**
     * The avg usage
     *
     * @return string|null
     */
    public function getAvgUsage() : ?string
    {
        return $this->avgUsage;
    }
    /**
     * The avg usage
     *
     * @param string|null $avgUsage
     *
     * @return self
     */
    public function setAvgUsage(?string $avgUsage) : self
    {
        $this->avgUsage = $avgUsage;
        return $this;
    }
    /**
     * The number of days since last billing
     *
     * @return string|null
     */
    public function getUsageDays() : ?string
    {
        return $this->usageDays;
    }
    /**
     * The number of days since last billing
     *
     * @param string|null $usageDays
     *
     * @return self
     */
    public function setUsageDays(?string $usageDays) : self
    {
        $this->usageDays = $usageDays;
        return $this;
    }
    /**
     * The number of dollars since last billing
     *
     * @return string|null
     */
    public function getUsageDollars() : ?string
    {
        return $this->usageDollars;
    }
    /**
     * The number of dollars since last billing
     *
     * @param string|null $usageDollars
     *
     * @return self
     */
    public function setUsageDollars(?string $usageDollars) : self
    {
        $this->usageDollars = $usageDollars;
        return $this;
    }
    /**
     * The time of last billing
     *
     * @return string|null
     */
    public function getLastBilled() : ?string
    {
        return $this->lastBilled;
    }
    /**
     * The time of last billing
     *
     * @param string|null $lastBilled
     *
     * @return self
     */
    public function setLastBilled(?string $lastBilled) : self
    {
        $this->lastBilled = $lastBilled;
        return $this;
    }
}