<?php

class GetLoggedExceptionDataList
{

    /**
     * @var \DateTime $beginDate
     */
    protected $beginDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param \DateTime $beginDate
     * @param \DateTime $endDate
     * @param Context $context
     */
    public function __construct(\DateTime $beginDate, \DateTime $endDate, $context)
    {
      $this->beginDate = $beginDate->format(\DateTime::ATOM);
      $this->endDate = $endDate->format(\DateTime::ATOM);
      $this->context = $context;
    }

    /**
     * @return \DateTime
     */
    public function getBeginDate()
    {
      if ($this->beginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->beginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $beginDate
     * @return GetLoggedExceptionDataList
     */
    public function setBeginDate(\DateTime $beginDate)
    {
      $this->beginDate = $beginDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return GetLoggedExceptionDataList
     */
    public function setEndDate(\DateTime $endDate)
    {
      $this->endDate = $endDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return Context
     */
    public function getContext()
    {
      return $this->context;
    }

    /**
     * @param Context $context
     * @return GetLoggedExceptionDataList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
