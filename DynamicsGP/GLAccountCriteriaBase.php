<?php

class GLAccountCriteriaBase extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $Alias
     */
    protected $Alias = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var LikeRestrictionOfstring $Description
     */
    protected $Description = null;

    /**
     * @var LikeRestrictionOfstring $GLAccountId
     */
    protected $GLAccountId = null;

    /**
     * @var RestrictionOfNullableOfboolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getAlias()
    {
      return $this->Alias;
    }

    /**
     * @param LikeRestrictionOfstring $Alias
     * @return GLAccountCriteriaBase
     */
    public function setAlias($Alias)
    {
      $this->Alias = $Alias;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getCreatedDate()
    {
      return $this->CreatedDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $CreatedDate
     * @return GLAccountCriteriaBase
     */
    public function setCreatedDate($CreatedDate)
    {
      $this->CreatedDate = $CreatedDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param LikeRestrictionOfstring $Description
     * @return GLAccountCriteriaBase
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getGLAccountId()
    {
      return $this->GLAccountId;
    }

    /**
     * @param LikeRestrictionOfstring $GLAccountId
     * @return GLAccountCriteriaBase
     */
    public function setGLAccountId($GLAccountId)
    {
      $this->GLAccountId = $GLAccountId;
      return $this;
    }

    /**
     * @return RestrictionOfNullableOfboolean
     */
    public function getIsActive()
    {
      return $this->IsActive;
    }

    /**
     * @param RestrictionOfNullableOfboolean $IsActive
     * @return GLAccountCriteriaBase
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getModifiedDate()
    {
      return $this->ModifiedDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $ModifiedDate
     * @return GLAccountCriteriaBase
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

}
