<?php

class ArrayOfNullableOfGLAccountSummaryTypefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GLAccountSummaryType[] $GLAccountSummaryType
     */
    protected $GLAccountSummaryType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GLAccountSummaryType[]
     */
    public function getGLAccountSummaryType()
    {
      return $this->GLAccountSummaryType;
    }

    /**
     * @param GLAccountSummaryType[] $GLAccountSummaryType
     * @return ArrayOfNullableOfGLAccountSummaryTypefo2IbYCo
     */
    public function setGLAccountSummaryType(array $GLAccountSummaryType = null)
    {
      $this->GLAccountSummaryType = $GLAccountSummaryType;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->GLAccountSummaryType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GLAccountSummaryType
     */
    public function offsetGet($offset)
    {
      return $this->GLAccountSummaryType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GLAccountSummaryType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->GLAccountSummaryType[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->GLAccountSummaryType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GLAccountSummaryType Return the current element
     */
    public function current()
    {
      return current($this->GLAccountSummaryType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GLAccountSummaryType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GLAccountSummaryType);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->GLAccountSummaryType);
    }

    /**
     * Countable implementation
     *
     * @return GLAccountSummaryType Return count of elements
     */
    public function count()
    {
      return count($this->GLAccountSummaryType);
    }

}
