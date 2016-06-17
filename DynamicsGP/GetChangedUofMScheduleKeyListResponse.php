<?php

class GetChangedUofMScheduleKeyListResponse
{

    /**
     * @var ArrayOfChangedUofMScheduleKey $GetChangedUofMScheduleKeyListResult
     */
    protected $GetChangedUofMScheduleKeyListResult = null;

    /**
     * @param ArrayOfChangedUofMScheduleKey $GetChangedUofMScheduleKeyListResult
     */
    public function __construct($GetChangedUofMScheduleKeyListResult)
    {
      $this->GetChangedUofMScheduleKeyListResult = $GetChangedUofMScheduleKeyListResult;
    }

    /**
     * @return ArrayOfChangedUofMScheduleKey
     */
    public function getGetChangedUofMScheduleKeyListResult()
    {
      return $this->GetChangedUofMScheduleKeyListResult;
    }

    /**
     * @param ArrayOfChangedUofMScheduleKey $GetChangedUofMScheduleKeyListResult
     * @return GetChangedUofMScheduleKeyListResponse
     */
    public function setGetChangedUofMScheduleKeyListResult($GetChangedUofMScheduleKeyListResult)
    {
      $this->GetChangedUofMScheduleKeyListResult = $GetChangedUofMScheduleKeyListResult;
      return $this;
    }

}
