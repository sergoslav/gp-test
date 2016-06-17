<?php

class GetPolicyRolesResponse
{

    /**
     * @var ArrayOfRoleKey $GetPolicyRolesResult
     */
    protected $GetPolicyRolesResult = null;

    /**
     * @param ArrayOfRoleKey $GetPolicyRolesResult
     */
    public function __construct($GetPolicyRolesResult)
    {
      $this->GetPolicyRolesResult = $GetPolicyRolesResult;
    }

    /**
     * @return ArrayOfRoleKey
     */
    public function getGetPolicyRolesResult()
    {
      return $this->GetPolicyRolesResult;
    }

    /**
     * @param ArrayOfRoleKey $GetPolicyRolesResult
     * @return GetPolicyRolesResponse
     */
    public function setGetPolicyRolesResult($GetPolicyRolesResult)
    {
      $this->GetPolicyRolesResult = $GetPolicyRolesResult;
      return $this;
    }

}
