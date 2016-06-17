<?php

class Criteria
{

    /**
     * @var ArrayOfstring $columns
     */
    protected $columns = null;

    /**
     * @var ArrayOfRestriction $convertToUpperCaseRestriction
     */
    protected $convertToUpperCaseRestriction = null;

    /**
     * @var ArrayOfRestriction $restrictions
     */
    protected $restrictions = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfstring
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ArrayOfstring $columns
     * @return Criteria
     */
    public function setColumns($columns)
    {
      $this->columns = $columns;
      return $this;
    }

    /**
     * @return ArrayOfRestriction
     */
    public function getConvertToUpperCaseRestriction()
    {
      return $this->convertToUpperCaseRestriction;
    }

    /**
     * @param ArrayOfRestriction $convertToUpperCaseRestriction
     * @return Criteria
     */
    public function setConvertToUpperCaseRestriction($convertToUpperCaseRestriction)
    {
      $this->convertToUpperCaseRestriction = $convertToUpperCaseRestriction;
      return $this;
    }

    /**
     * @return ArrayOfRestriction
     */
    public function getRestrictions()
    {
      return $this->restrictions;
    }

    /**
     * @param ArrayOfRestriction $restrictions
     * @return Criteria
     */
    public function setRestrictions($restrictions)
    {
      $this->restrictions = $restrictions;
      return $this;
    }

}
