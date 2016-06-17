<?php

class LikeRestrictionOfNullableOfInventoriedItemType extends BetweenRestrictionOfNullableOfInventoriedItemType
{

    /**
     * @var string $Like
     */
    protected $Like = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getLike()
    {
      return $this->Like;
    }

    /**
     * @param string $Like
     * @return LikeRestrictionOfNullableOfInventoriedItemType
     */
    public function setLike($Like)
    {
      $this->Like = $Like;
      return $this;
    }

}
