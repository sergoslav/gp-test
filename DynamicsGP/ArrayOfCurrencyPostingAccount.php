<?php

class ArrayOfCurrencyPostingAccount implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CurrencyPostingAccount[] $CurrencyPostingAccount
     */
    protected $CurrencyPostingAccount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CurrencyPostingAccount[]
     */
    public function getCurrencyPostingAccount()
    {
      return $this->CurrencyPostingAccount;
    }

    /**
     * @param CurrencyPostingAccount[] $CurrencyPostingAccount
     * @return ArrayOfCurrencyPostingAccount
     */
    public function setCurrencyPostingAccount(array $CurrencyPostingAccount = null)
    {
      $this->CurrencyPostingAccount = $CurrencyPostingAccount;
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
      return isset($this->CurrencyPostingAccount[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CurrencyPostingAccount
     */
    public function offsetGet($offset)
    {
      return $this->CurrencyPostingAccount[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CurrencyPostingAccount $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CurrencyPostingAccount[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CurrencyPostingAccount[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CurrencyPostingAccount Return the current element
     */
    public function current()
    {
      return current($this->CurrencyPostingAccount);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CurrencyPostingAccount);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CurrencyPostingAccount);
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
      reset($this->CurrencyPostingAccount);
    }

    /**
     * Countable implementation
     *
     * @return CurrencyPostingAccount Return count of elements
     */
    public function count()
    {
      return count($this->CurrencyPostingAccount);
    }

}
