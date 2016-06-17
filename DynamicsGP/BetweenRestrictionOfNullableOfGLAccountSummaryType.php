<?php

class BetweenRestrictionOfNullableOfGLAccountSummaryType extends ListRestrictionOfNullableOfGLAccountSummaryType
{

    /**
     * @var GLAccountSummaryType $From
     */
    protected $From = null;

    /**
     * @var GLAccountSummaryType $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var GLAccountSummaryType $LessThan
     */
    protected $LessThan = null;

    /**
     * @var GLAccountSummaryType $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GLAccountSummaryType
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param GLAccountSummaryType $From
     * @return BetweenRestrictionOfNullableOfGLAccountSummaryType
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return GLAccountSummaryType
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param GLAccountSummaryType $GreaterThan
     * @return BetweenRestrictionOfNullableOfGLAccountSummaryType
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return GLAccountSummaryType
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param GLAccountSummaryType $LessThan
     * @return BetweenRestrictionOfNullableOfGLAccountSummaryType
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return GLAccountSummaryType
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param GLAccountSummaryType $To
     * @return BetweenRestrictionOfNullableOfGLAccountSummaryType
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
