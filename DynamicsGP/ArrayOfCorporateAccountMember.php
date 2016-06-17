<?php

class ArrayOfCorporateAccountMember implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CorporateAccountMember[] $CorporateAccountMember
     */
    protected $CorporateAccountMember = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CorporateAccountMember[]
     */
    public function getCorporateAccountMember()
    {
      return $this->CorporateAccountMember;
    }

    /**
     * @param CorporateAccountMember[] $CorporateAccountMember
     * @return ArrayOfCorporateAccountMember
     */
    public function setCorporateAccountMember(array $CorporateAccountMember = null)
    {
      $this->CorporateAccountMember = $CorporateAccountMember;
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
      return isset($this->CorporateAccountMember[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CorporateAccountMember
     */
    public function offsetGet($offset)
    {
      return $this->CorporateAccountMember[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CorporateAccountMember $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CorporateAccountMember[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CorporateAccountMember[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CorporateAccountMember Return the current element
     */
    public function current()
    {
      return current($this->CorporateAccountMember);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CorporateAccountMember);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CorporateAccountMember);
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
      reset($this->CorporateAccountMember);
    }

    /**
     * Countable implementation
     *
     * @return CorporateAccountMember Return count of elements
     */
    public function count()
    {
      return count($this->CorporateAccountMember);
    }

}
