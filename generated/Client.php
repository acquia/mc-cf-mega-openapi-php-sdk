<?php

namespace MauticInc\MEGA\OpenAPI\Generated;

class Client extends \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\Client
{
    /**
     * Fetch list of Customers
     *
     * @param array $queryParameters {
     *     @var int $per_page number of records to be fetched per page.
     *     @var int $page page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_column column on which data can be sorted
     *     @var string $sort_direction sort direction
     *     @var string $ip_pool_uuid uuid of ip pool to filter customers 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomersUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomersForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomersUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetCustomers($queryParameters), $fetch);
    }
    /**
     * Create Customer
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateCustomerUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateCustomerForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateCustomerUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function createCustomer(?\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\CreateCustomer($requestBody), $fetch);
    }
    /**
     * Delete requested customer
     *
     * @param string $customer UUID of the customer to operate on.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerPreconditionFailedException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomer(string $customer, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteCustomer($customer), $fetch);
    }
    /**
     * Get a customer object.
     *
     * @param string $customer UUID of the customer to operate on.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CustomerReadUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CustomerReadForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CustomerReadNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function customerRead(string $customer, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\CustomerRead($customer), $fetch);
    }
    /**
     * Update requested customer
     *
     * @param string $customer UUID of the customer to operate on.
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateCustomerUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateCustomerForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateCustomerNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateCustomerPreconditionFailedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateCustomerUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateCustomer(string $customer, ?\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\UpdateCustomer($customer, $requestBody), $fetch);
    }
    /**
     * Fetch a list of accounts.
     *
     * @param array $queryParameters {
     *     @var int $per_page number of records to be fetched per page.
     *     @var int $page page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_column column on which data can be sorted
     *     @var string $sort_direction sort direction
     *     @var string $trashed filter on the basis of trashed
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetAccountsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetAccountsForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetAccountsUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAccounts(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetAccounts($queryParameters), $fetch);
    }
    /**
     * Add (create) a new account
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\Account $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateAccountUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateAccountForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateAccountUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function createAccount(?\MauticInc\MEGA\OpenAPI\Generated\Model\Account $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\CreateAccount($requestBody), $fetch);
    }
    /**
     * Delete an account object. Can be restored
     *
     * @param string $account UUID of the account to operate on.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AccountDeleteUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AccountDeleteForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AccountDeleteNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AccountDeletePreconditionFailedException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function accountDelete(string $account, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\AccountDelete($account), $fetch);
    }
    /**
     * Get an account object.
     *
     * @param string $account UUID of the account to operate on.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AccountReadUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AccountReadForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AccountReadNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function accountRead(string $account, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\AccountRead($account), $fetch);
    }
    /**
     * Update an account object
     *
     * @param string $account UUID of the account to operate on.
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\Account $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateAccountUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateAccountForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateAccountNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateAccountUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateAccount(string $account, ?\MauticInc\MEGA\OpenAPI\Generated\Model\Account $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\UpdateAccount($account, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $account UUID of the account to operate on.
     * @param array $queryParameters {
     *     @var float $per_page records to fetch per page
     *     @var float $page page to be fetched
     *     @var string $search search string in name and email
     *     @var string $sort_column column to sort data
     *     @var string $sort_direction direction to sort data
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetAccountUsersUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetAccountUsersForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetAccountUsersUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAccountUsers(string $account, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetAccountUsers($account, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $account UUID of the account to operate on.
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachAccountUserUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachAccountUserForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachAccountUserNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachAccountUserUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function attachAccountUser(string $account, ?\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\AttachAccountUser($account, $requestBody), $fetch);
    }
    /**
     * Set the users on an account. Note: Detaches users not in the request.
     *
     * @param string $account UUID of the account to operate on.
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncAccountUsersUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncAccountUsersForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncAccountUsersNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncAccountUsersUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function syncAccountUsers(string $account, ?\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\SyncAccountUsers($account, $requestBody), $fetch);
    }
    /**
     * Remove a user from an account resource
     *
     * @param string $account UUID of the account to operate on.
     * @param string $user UUID of the user to operate on.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachAccountUserUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachAccountUserForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachAccountUserNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachAccountUserUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function detachAccountUser(string $account, string $user, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DetachAccountUser($account, $user), $fetch);
    }
    /**
     * 
     *
     * @param string $user UUID of the user to operate on.
     * @param array $queryParameters {
     *     @var int $per_page records to be fetched per page
     *     @var int $page page to be fetched
     *     @var string $search searchable string in name
     *     @var string $sort_column column to sort data on
     *     @var string $sort_direction direction to sort data
     *     @var string $trashed load trashed records
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseUserAccountUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseUserAccountForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseUserAccountNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseUserAccountUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserAccountsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function browseUserAccount(string $user, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\BrowseUserAccount($user, $queryParameters), $fetch);
    }
    /**
     * Set the accounts for a user. Note: Detaches accounts not in the request.
     *
     * @param string $user UUID of the user to operate on.
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserAccountsPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UserAccountsyncUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UserAccountsyncForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UserAccountsyncNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UserAccountsyncUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserAccountsPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function userAccountsync(string $user, ?\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserAccountsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\UserAccountsync($user, $requestBody), $fetch);
    }
    /**
     * Fetch list of locations.
     *
     * @param array $queryParameters {
     *     @var int $per_page number of records to be fetched per page.
     *     @var int $page page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_column column on which data can be sorted
     *     @var string $sort_direction sort direction
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetLocationsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetLocationsForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\LocationsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getLocations(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetLocations($queryParameters), $fetch);
    }
    /**
     * Create Location
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\Location $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateLocationUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateLocationForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateLocationUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\LocationsPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function createLocation(?\MauticInc\MEGA\OpenAPI\Generated\Model\Location $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\CreateLocation($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $location UUID of the location to operate on.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteLocationUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteLocationForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteLocationNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function deleteLocation(string $location, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteLocation($location), $fetch);
    }
    /**
     * Get a location object.
     *
     * @param string $location UUID of the location to operate on.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationReadUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationReadForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationReadNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationReadTooManyRequestsException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseLocation|\Psr\Http\Message\ResponseInterface
     */
    public function locationRead(string $location, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\LocationRead($location), $fetch);
    }
    /**
     * Update Requested Location
     *
     * @param string $location UUID of the location to operate on.
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\Location $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateLocationUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateLocationForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateLocationNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateLocationUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseLocation|\Psr\Http\Message\ResponseInterface
     */
    public function updateLocation(string $location, ?\MauticInc\MEGA\OpenAPI\Generated\Model\Location $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\UpdateLocation($location, $requestBody), $fetch);
    }
    /**
     * Fetch a list of instances.
     *
     * @param array $queryParameters {
     *     @var int $per_page Instances to be fetched per page
     *     @var int $page Page to fetch
     *     @var string $location_uuid Filter instances on the basis of location
     *     @var string $trashed Filter on the basis if trashed
     *     @var string $account_uuid Fetch instances on a particular account
     *     @var string $search searchable string
     *     @var string $sort_column column on which data can be sorted
     *     @var string $sort_direction sort direction
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceBrowseUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceBrowseForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceBrowseTooManyRequestsException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseArrayOfInstances|\Psr\Http\Message\ResponseInterface
     */
    public function instanceBrowse(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\InstanceBrowse($queryParameters), $fetch);
    }
    /**
     * Update multiple instances. Can be used for batch suspend/unsuspend
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\InstancesPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateInstancesUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateInstancesForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateInstancesNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateInstancesTooManyRequestsException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\InstancesPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateInstances(?\MauticInc\MEGA\OpenAPI\Generated\Model\InstancesPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\UpdateInstances($requestBody), $fetch);
    }
    /**
     * Create a new instance
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\Instance $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceAddUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceAddForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceAddUnprocessableEntityException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceAddTooManyRequestsException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseInstance|\Psr\Http\Message\ResponseInterface
     */
    public function instanceAdd(?\MauticInc\MEGA\OpenAPI\Generated\Model\Instance $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\InstanceAdd($requestBody), $fetch);
    }
    /**
     * Soft delete an instance object
     *
     * @param string $instance UUID of the instance to operate on.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceSoftDeleteUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceSoftDeleteForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceSoftDeleteNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceSoftDeleteTooManyRequestsException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function instanceSoftDelete(string $instance, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\InstanceSoftDelete($instance), $fetch);
    }
    /**
     * Get an instance object.
     *
     * @param string $instance UUID of the instance to operate on.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceReadUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceReadForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceReadNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceReadTooManyRequestsException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseInstance|\Psr\Http\Message\ResponseInterface
     */
    public function instanceRead(string $instance, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\InstanceRead($instance), $fetch);
    }
    /**
     * Update an instance object
     *
     * @param string $instance UUID of the instance to operate on.
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\Instance $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceEditUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceEditForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceEditNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceEditUnprocessableEntityException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceEditTooManyRequestsException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseInstance|\Psr\Http\Message\ResponseInterface
     */
    public function instanceEdit(string $instance, ?\MauticInc\MEGA\OpenAPI\Generated\Model\Instance $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\InstanceEdit($instance, $requestBody), $fetch);
    }
    /**
     * Force delete an instance object
     *
     * @param string $instance UUID of the instance to operate on.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceForceDeleteUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceForceDeleteForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceForceDeleteNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstanceForceDeleteTooManyRequestsException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function instanceForceDelete(string $instance, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\InstanceForceDelete($instance), $fetch);
    }
    /**
     * Delete multiple instances
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\InstancesDeletePatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstancesBatchSoftDeleteUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstancesBatchSoftDeleteForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstancesBatchSoftDeleteNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstancesBatchSoftDeleteTooManyRequestsException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function instancesBatchSoftDelete(?\MauticInc\MEGA\OpenAPI\Generated\Model\InstancesDeletePatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\InstancesBatchSoftDelete($requestBody), $fetch);
    }
    /**
     * Force delete multiple instances
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\InstancesForceDeletePatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstancesBatchForceDeleteUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstancesBatchForceDeleteForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstancesBatchForceDeleteNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstancesBatchForceDeleteTooManyRequestsException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function instancesBatchForceDelete(?\MauticInc\MEGA\OpenAPI\Generated\Model\InstancesForceDeletePatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\InstancesBatchForceDelete($requestBody), $fetch);
    }
    /**
     * Fetch All Rate Limits
     *
     * @param array $queryParameters {
     *     @var int $per_page Rate Limit to be fetched per page
     *     @var int $page page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_column column to sort
     *     @var string $sort_direction direction to sort
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetRateLimitUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetRateLimitForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\RateLimitsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getRateLimit(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetRateLimit($queryParameters), $fetch);
    }
    /**
     * Create Rate Limit
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\RateLimit $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\PostRateLimitUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\PostRateLimitForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\PostRateLimitUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\RateLimitsPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function postRateLimit(?\MauticInc\MEGA\OpenAPI\Generated\Model\RateLimit $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\PostRateLimit($requestBody), $fetch);
    }
    /**
     * Delete requested Rate Limit
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteRateLimitUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteRateLimitForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteRateLimitNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteRateLimitUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRateLimit(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteRateLimit($uuid), $fetch);
    }
    /**
     * Get requested Rate Limit
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetRequestedRateLimitUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetRequestedRateLimitForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetRequestedRateLimitNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\RateLimitsUuidGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getRequestedRateLimit(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetRequestedRateLimit($uuid), $fetch);
    }
    /**
     * Update requested Rate Limit
     *
     * @param string $uuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\RateLimit $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateRateLimitUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateRateLimitForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateRateLimitNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateRateLimitUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\RateLimitsUuidPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateRateLimit(string $uuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\RateLimit $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\UpdateRateLimit($uuid, $requestBody), $fetch);
    }
    /**
     * Fetch All Release Path objects
     *
     * @param array $queryParameters {
     *     @var int $per_page Release Path objects to be fetched per page
     *     @var int $page Page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_column column to be sorted
     *     @var string $sort_direction direction to sort
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetReleasePathsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetReleasePathsForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePathsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getReleasePaths(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetReleasePaths($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePath $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\PostReleasePathUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\PostReleasePathForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\PostReleasePathUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePathsPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function postReleasePath(?\MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePath $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\PostReleasePath($requestBody), $fetch);
    }
    /**
     * Delete requested Release Path object
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteReleasePathUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteReleasePathForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteReleasePathNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteReleasePathUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function deleteReleasePath(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteReleasePath($uuid), $fetch);
    }
    /**
     * Get requested Release Path object
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ShowReleasePathUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ShowReleasePathForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ShowReleasePathNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePathsUuidGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function showReleasePath(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ShowReleasePath($uuid), $fetch);
    }
    /**
     * Update the requested Release Path
     *
     * @param string $uuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePath $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateReleasePathUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateReleasePathForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateReleasePathNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateReleasePathUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePathsUuidPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateReleasePath(string $uuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePath $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\UpdateReleasePath($uuid, $requestBody), $fetch);
    }
    /**
     * Get feature flags list
     *
     * @param array $queryParameters {
     *     @var int $per_page Feature Flags to be fetched per page
     *     @var int $page page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_column column to sort data on
     *     @var string $sort_direction direction to sort data on
     *     @var string $trashed loading trashed data
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseFeatureUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseFeatureForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function browseFeature(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\BrowseFeature($queryParameters), $fetch);
    }
    /**
     * Creates a new feature
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\FeatureFlag $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddFeatureUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddFeatureForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddFeatureUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function addFeature(?\MauticInc\MEGA\OpenAPI\Generated\Model\FeatureFlag $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\AddFeature($requestBody), $fetch);
    }
    /**
     * Delete existing feature
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteFeatureUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteFeatureForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteFeatureNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function deleteFeature(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteFeature($uuid), $fetch);
    }
    /**
     * Get individual feature flag
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ReadFeatureUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ReadFeatureForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ReadFeatureNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesUuidGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function readFeature(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ReadFeature($uuid), $fetch);
    }
    /**
     * Update details of existing feature flags
     *
     * @param string $uuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesUuidPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\EditFeatureUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\EditFeatureForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\EditFeatureNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\EditFeatureUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesUuidPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function editFeature(string $uuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesUuidPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\EditFeature($uuid, $requestBody), $fetch);
    }
    /**
     * Fetch all Database objects
     *
     * @param array $queryParameters {
     *     @var int $per_page Database objects to be fetched per page
     *     @var int $page page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_column 
     *     @var string $sort_direction 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseDbServerUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseDbServerForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\DbServersGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function browseDbServer(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\BrowseDbServer($queryParameters), $fetch);
    }
    /**
     * Post Database Objects
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\DbServersPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddDbServerUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddDbServerForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddDbServerUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\DbServersPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function addDbServer(?\MauticInc\MEGA\OpenAPI\Generated\Model\DbServersPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\AddDbServer($requestBody), $fetch);
    }
    /**
     * Delete requested Database object
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteDatabaseUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteDatabaseForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteDatabaseNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteDatabasePreconditionFailedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteDatabaseUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDatabase(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteDatabase($uuid), $fetch);
    }
    /**
     * Get requested Database object
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ReadDatabaseUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ReadDatabaseForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ReadDatabaseNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\DbServersUuidGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function readDatabase(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ReadDatabase($uuid), $fetch);
    }
    /**
     * Update the requested Database
     *
     * @param string $uuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\DbServersUuidPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\EditDatabaseUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\EditDatabaseForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\EditDatabaseNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\EditDatabaseUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\DbServersUuidPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function editDatabase(string $uuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\DbServersUuidPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\EditDatabase($uuid, $requestBody), $fetch);
    }
    /**
     * Get list of available IP pools for all regions
     *
     * @param array $queryParameters {
     *     @var int $per_page Rows per page
     *     @var int $page Page number
     *     @var string $search Searchable string
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ListIpPoolsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ListIpPoolsForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function listIpPools(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ListIpPools($queryParameters), $fetch);
    }
    /**
     * New IP Pool
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\IpPool $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\PostIpPoolsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\PostIpPoolsForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\PostIpPoolsUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function postIpPools(?\MauticInc\MEGA\OpenAPI\Generated\Model\IpPool $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\PostIpPools($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteIpPoolUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteIpPoolForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteIpPoolNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function deleteIpPool(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteIpPool($uuid), $fetch);
    }
    /**
     * 
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ReadIpPoolUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ReadIpPoolForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ReadIpPoolNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsUuidGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function readIpPool(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ReadIpPool($uuid), $fetch);
    }
    /**
     * 
     *
     * @param string $uuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsUuidPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\EditIpPoolUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\EditIpPoolForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\EditIpPoolNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\EditIpPoolUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsUuidPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function editIpPool(string $uuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsUuidPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\EditIpPool($uuid, $requestBody), $fetch);
    }
    /**
     * Fetch List of Mail Templates
     *
     * @param array $queryParameters {
     *     @var int $per_page number of records to be fetch per page
     *     @var int $page page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_column column name to sort data
     *     @var string $sort_direction direction to be sorted (asc, desc)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ListMailTemplateUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ListMailTemplateForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseListMailTemplate|\Psr\Http\Message\ResponseInterface
     */
    public function listMailTemplate(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ListMailTemplate($queryParameters), $fetch);
    }
    /**
     * Show Requested Mail Template
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ShowMailTemplateUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ShowMailTemplateForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ShowMailTemplateNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseShowMailTemplate|\Psr\Http\Message\ResponseInterface
     */
    public function showMailTemplate(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ShowMailTemplate($uuid), $fetch);
    }
    /**
     * 
     *
     * @param string $uuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\MailTemplatesUuidPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateMailTemplateUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateMailTemplateForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateMailTemplateNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateMailTemplateUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\MailTemplatesUuidPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateMailTemplate(string $uuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\MailTemplatesUuidPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\UpdateMailTemplate($uuid, $requestBody), $fetch);
    }
    /**
     * Fetch List of Plans
     *
     * @param array $queryParameters {
     *     @var int $per_page Number of records to be fetched per page
     *     @var int $page Page to be fetched
     *     @var string $search Searchable String
     *     @var string $sort_column Column name to sort data
     *     @var string $sort_direction Direction to be sorted in (asc, desc)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetPlansUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetPlansForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\PlansGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPlans(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetPlans($queryParameters), $fetch);
    }
    /**
     * Create new Plan
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\Plans $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreatePlanUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreatePlanForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreatePlanUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function createPlan(?\MauticInc\MEGA\OpenAPI\Generated\Model\Plans $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\CreatePlan($requestBody), $fetch);
    }
    /**
     * Delete Multiple plans
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDeletePlansUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDeletePlansForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDeletePlansUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function bulkDeletePlans(?\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\BulkDeletePlans($requestBody), $fetch);
    }
    /**
     * Delete Requested Plan
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeletePlanUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeletePlanForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeletePlanNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function deletePlan(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeletePlan($uuid), $fetch);
    }
    /**
     * Show requested Plan
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ShowPlanUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ShowPlanForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ShowPlanNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\PlansUuidGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function showPlan(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ShowPlan($uuid), $fetch);
    }
    /**
     * Update Plan
     *
     * @param string $uuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\Plans $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdatePlanUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdatePlanForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdatePlanNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdatePlanUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\PlansUuidPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updatePlan(string $uuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\Plans $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\UpdatePlan($uuid, $requestBody), $fetch);
    }
    /**
     * Fetch Role objects
     *
     * @param array $queryParameters {
     *     @var int $per_page number of records to be fetched per page
     *     @var int $page page number to be fetched
     *     @var string $search Searchable string
     *     @var string $sort_column columns on which data can be sorted
     *     @var string $sort_direction direction of sorting
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetRolesUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetRolesForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseListRoleResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getRoles(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetRoles($queryParameters), $fetch);
    }
    /**
     * Create Role
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\RolesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateRoleUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateRoleForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateRoleUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\RolesPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function createRole(?\MauticInc\MEGA\OpenAPI\Generated\Model\RolesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\CreateRole($requestBody), $fetch);
    }
    /**
     * Delete Requested Role
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteRoleUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteRoleForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteRoleNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRole(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteRole($uuid), $fetch);
    }
    /**
     * Show Requested Role
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ShowRoleUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ShowRoleForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ShowRoleNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\RolesUuidGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function showRole(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ShowRole($uuid), $fetch);
    }
    /**
     * Update Requested Role
     *
     * @param string $uuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\RolesUuidPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateRoleUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateRoleForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateRoleNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateRoleUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\RolesUuidPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateRole(string $uuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\RolesUuidPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\UpdateRole($uuid, $requestBody), $fetch);
    }
    /**
     * List Roles For Requested User
     *
     * @param string $user UUID of user to operate on.
     * @param array $queryParameters {
     *     @var int $per_page number of records to be fetched per page
     *     @var int $page page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_column column to sort
     *     @var string $sort_direction direction to sort
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ListRoleUserUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ListRoleUserForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ListRoleUserNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function listRoleUser(string $user, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ListRoleUser($user, $queryParameters), $fetch);
    }
    /**
     * Attach a role to the given user.
     *
     * @param string $user UUID of user to operate on.
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachRoleToUserUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachRoleToUserForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachRoleToUserNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachRoleToUserUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function attachRoleToUser(string $user, ?\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\AttachRoleToUser($user, $requestBody), $fetch);
    }
    /**
     * Set the roles for a user. Note: Detaches roles not in the request.
     *
     * @param string $user UUID of user to operate on.
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachMultipleRolesToUserUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachMultipleRolesToUserForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachMultipleRolesToUserNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachMultipleRolesToUserUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function attachMultipleRolesToUser(string $user, ?\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\AttachMultipleRolesToUser($user, $requestBody), $fetch);
    }
    /**
     * Fetch a list of users on a role.
     *
     * @param string $role 
     * @param array $queryParameters {
     *     @var int $per_page records to be fetched per page
     *     @var int $page page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_column column to sort on
     *     @var string $sort_direction direction to sort
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetUsersFromRoleUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetUsersFromRoleForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetUsersFromRoleNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\RolesRoleUsersGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getUsersFromRole(string $role, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetUsersFromRole($role, $queryParameters), $fetch);
    }
    /**
     * Delete Role from User
     *
     * @param string $user uuid for user from whom role should be removed
     * @param string $role uuid for role to be removed from user
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteUserRoleUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteUserRoleForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteUserRoleNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteUserRoleUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesRoleDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUserRole(string $user, string $role, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteUserRole($user, $role), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetPermissionsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetPermissionsForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\PermissionsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPermissions(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetPermissions(), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $per_page Record to fetch per page
     *     @var int $page page to be fetched
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetBrandingsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetBrandingsForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\BrandingsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getBrandings(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetBrandings($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\BrandingsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\PostBrandingsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\PostBrandingsForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\BrandingsPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function postBrandings(?\MauticInc\MEGA\OpenAPI\Generated\Model\BrandingsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\PostBrandings($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $branding 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteBrandingUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteBrandingForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteBrandingNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function deleteBranding(string $branding, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteBranding($branding), $fetch);
    }
    /**
     * 
     *
     * @param string $branding 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\FetchBrandingUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\FetchBrandingForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\FetchBrandingNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\BrandingsBrandingGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function fetchBranding(string $branding, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\FetchBranding($branding), $fetch);
    }
    /**
     * 
     *
     * @param string $branding 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\BrandingsBrandingPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateBrandingUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateBrandingForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateBrandingNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\BrandingsBrandingPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateBranding(string $branding, ?\MauticInc\MEGA\OpenAPI\Generated\Model\BrandingsBrandingPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\UpdateBranding($branding, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $per_page number of records to be fetched per page
     *     @var int $page page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_direction direction to sort
     *     @var string $sort_column sort column
     *     @var string $with eager loaded relationships
     *     @var string $trashed Filter on the basis if trashed
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ListSenderDomainUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ListSenderDomainForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function listSenderDomain(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ListSenderDomain($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateSenderDomainUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateSenderDomainForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateSenderDomainUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function createSenderDomain(?\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\CreateSenderDomain($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $senderDomain 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteSenderDomainUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteSenderDomainForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteSenderDomainNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSenderDomain(string $senderDomain, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteSenderDomain($senderDomain), $fetch);
    }
    /**
     * 
     *
     * @param string $senderDomain 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ShowSenderDomainUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ShowSenderDomainForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ShowSenderDomainNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function showSenderDomain(string $senderDomain, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ShowSenderDomain($senderDomain), $fetch);
    }
    /**
     * 
     *
     * @param string $senderDomain 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateSenderDomainUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateSenderDomainForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateSenderDomainNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateSenderDomainUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateSenderDomain(string $senderDomain, ?\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\UpdateSenderDomain($senderDomain, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $senderDomain 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainInstancesPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachInstancesToSenderDomainUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachInstancesToSenderDomainForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainInstancesPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function attachInstancesToSenderDomain(string $senderDomain, ?\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainInstancesPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\AttachInstancesToSenderDomain($senderDomain, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $senderDomain 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainAccountsPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachMultipleAccountToSenderDomainUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachMultipleAccountToSenderDomainForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainAccountsPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function attachMultipleAccountToSenderDomain(string $senderDomain, ?\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainAccountsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\AttachMultipleAccountToSenderDomain($senderDomain, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $senderDomain 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainInstancesDeletePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachMultipleInstancesFromSenderDomainUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachMultipleInstancesFromSenderDomainForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainInstancesDeletePutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function detachMultipleInstancesFromSenderDomain(string $senderDomain, ?\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainInstancesDeletePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DetachMultipleInstancesFromSenderDomain($senderDomain, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $senderDomain 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainAccountsDeletePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachMultipleAccountsFromSenderDomainUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachMultipleAccountsFromSenderDomainForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainAccountsDeletePutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function detachMultipleAccountsFromSenderDomain(string $senderDomain, ?\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainAccountsDeletePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DetachMultipleAccountsFromSenderDomain($senderDomain, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $senderDomain 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ReattemptValidationForSenderDomainUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ReattemptValidationForSenderDomainForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainReattemptValidationPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function reattemptValidationForSenderDomain(string $senderDomain, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ReattemptValidationForSenderDomain($senderDomain), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $per_page fetch records per page
     *     @var int $page fetch page
     *     @var string $auditable_type Model name whose audit logs are to be fetched.
     *     @var string $auditable_uuid uuid of model whose audit logs are to be fetched.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ListAuditLogsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ListAuditLogsForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ListAuditLogsNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\AuditsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function listAuditLogs(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ListAuditLogs($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $uuid UUID of audit to be restored
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\AuditsUuidPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\RestoreAuditLogUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\RestoreAuditLogForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\RestoreAuditLogNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\RestoreAuditLogUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\AuditsUuidPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function restoreAuditLog(string $uuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\AuditsUuidPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\RestoreAuditLog($uuid, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesBulkDeletePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDeleteFeatureUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDeleteFeatureForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDeleteFeatureUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function bulkDeleteFeature(?\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesBulkDeletePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\BulkDeleteFeature($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesRestorePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\RestoreFeaturesUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\RestoreFeaturesForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\RestoreFeaturesUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseRestore|\Psr\Http\Message\ResponseInterface
     */
    public function restoreFeatures(?\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesRestorePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\RestoreFeatures($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesForceDeletePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ForceDeleteFeaturesUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ForceDeleteFeaturesForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ForceDeleteFeaturesUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function forceDeleteFeatures(?\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesForceDeletePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ForceDeleteFeatures($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $uuid location uuid
     * @param array $queryParameters {
     *     @var int $limit records to fetch per page
     *     @var int $page page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_column column to sort data on
     *     @var string $sort_direction sort direction
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseLocationInstancesUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseLocationInstancesForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseLocationInstancesNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\LocationsUuidInstancesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function browseLocationInstances(string $uuid, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\BrowseLocationInstances($uuid, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $uuid location uuid
     * @param array $queryParameters {
     *     @var int $per_page records to be fetched per page
     *     @var int $page page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_column column to sort data on
     *     @var string $sort_direction direction to sort data
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseLocationDBServersUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseLocationDBServersForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseLocationDBServersNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\LocationsUuidDbServersGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function browseLocationDBServers(string $uuid, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\BrowseLocationDBServers($uuid, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsBulkDeletePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDeleteIpPoolUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDeleteIpPoolForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDeleteIpPoolUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function bulkDeleteIpPool(?\MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsBulkDeletePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\BulkDeleteIpPool($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $customerUuid 
     * @param array $queryParameters {
     *     @var int $per_page records to be fetched per page
     *     @var int $page page to be fetched
     *     @var string $search search features by name
     *     @var string $sort_column column to sort features on
     *     @var string $sort_direction direction to sort
     *     @var string $trashed to get soft deleted features attached to customer
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomerFeaturesUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomerFeaturesForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomerFeaturesNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerFeatures(string $customerUuid, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetCustomerFeatures($customerUuid, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $customerUuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddCustomerFeatureUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddCustomerFeatureForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddCustomerFeatureNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddCustomerFeatureUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function addCustomerFeature(string $customerUuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\AddCustomerFeature($customerUuid, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $customerUuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerFeaturesUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerFeaturesForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerFeaturesNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerFeaturesUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function syncCustomerFeatures(string $customerUuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\SyncCustomerFeatures($customerUuid, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $customerUuid 
     * @param string $featureUuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerFeatureUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerFeatureForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerFeatureNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerFeatureUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesFeatureUuidDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomerFeature(string $customerUuid, string $featureUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteCustomerFeature($customerUuid, $featureUuid), $fetch);
    }
    /**
     * 
     *
     * @param string $customerUuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesDeleteMultiplePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachMultipleCustomerFeaturesUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachMultipleCustomerFeaturesForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachMultipleCustomerFeaturesNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachMultipleCustomerFeaturesUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesDeleteMultiplePutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function detachMultipleCustomerFeatures(string $customerUuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesDeleteMultiplePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DetachMultipleCustomerFeatures($customerUuid, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $customerUuid 
     * @param array $queryParameters {
     *     @var int $per_page records to be fetched per page
     *     @var int $page page to be fetched
     *     @var string $search search name, cname and ips in locations
     *     @var string $sort_column column to sort locations 
     *     @var string $sort_direction direction to sort
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomerLocationsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomerLocationsForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomerLocationsNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerLocations(string $customerUuid, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetCustomerLocations($customerUuid, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $customerUuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddCustomerLocationUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddCustomerLocationForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddCustomerLocationNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddCustomerLocationUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function addCustomerLocation(string $customerUuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\AddCustomerLocation($customerUuid, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $customerUuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerLocationsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerLocationsForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerLocationsNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerLocationsUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function syncCustomerLocations(string $customerUuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\SyncCustomerLocations($customerUuid, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $customerUuid 
     * @param string $locationUuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerLocationUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerLocationForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerLocationNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerLocationUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsLocationUuidDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomerLocation(string $customerUuid, string $locationUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteCustomerLocation($customerUuid, $locationUuid), $fetch);
    }
    /**
     * 
     *
     * @param string $customerUuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsDeleteMultiplePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteMultipleCustomerLocationsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteMultipleCustomerLocationsForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteMultipleCustomerLocationsNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteMultipleCustomerLocationsUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsDeleteMultiplePutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteMultipleCustomerLocations(string $customerUuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsDeleteMultiplePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteMultipleCustomerLocations($customerUuid, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $plan 
     * @param array $queryParameters {
     *     @var int $per_page Records to be fetched per page
     *     @var int $page Page to be fetched
     *     @var string $search Searchable String in name and description
     *     @var string $sort_column Column to sort data on
     *     @var string $sort_direction Direction to sort data on
     *     @var string $trashed loading trashed data
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowsePlanFeaturesUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowsePlanFeaturesForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowsePlanFeaturesNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function browsePlanFeatures(string $plan, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\BrowsePlanFeatures($plan, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $plan 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachPlanFeatureUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachPlanFeatureForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachPlanFeatureNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachPlanFeatureUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function attachPlanFeature(string $plan, ?\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\AttachPlanFeature($plan, $requestBody), $fetch);
    }
    /**
     * note: detaches features which are not in request
     *
     * @param string $plan 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncPlanFeaturesUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncPlanFeaturesForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncPlanFeaturesNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncPlanFeaturesUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function syncPlanFeatures(string $plan, ?\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\SyncPlanFeatures($plan, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $plan 
     * @param string $feature 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteFeaturePlanUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteFeaturePlanForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteFeaturePlanNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteFeaturePlanUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesFeatureDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteFeaturePlan(string $plan, string $feature, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteFeaturePlan($plan, $feature), $fetch);
    }
    /**
     * 
     *
     * @param string $plan 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesBulkDeletePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDeleteFeaturePlanUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDeleteFeaturePlanForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDeleteFeaturePlanNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDeleteFeaturePlanUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesBulkDeletePutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function bulkDeleteFeaturePlan(string $plan, ?\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesBulkDeletePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\BulkDeleteFeaturePlan($plan, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $per_page records to fetch per page
     *     @var int $page page to be fetched
     *     @var string $search search string in name and email for user
     *     @var string $sort_column column to sort data 
     *     @var string $sort_direction direction to sort column
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetUsersUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetUsersForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getUsers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetUsers($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddUserUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddUserForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AddUserUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function addUser(?\MauticInc\MEGA\OpenAPI\Generated\Model\UsersPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\AddUser($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteUserUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteUserForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteUserNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUser(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteUser($uuid), $fetch);
    }
    /**
     * 
     *
     * @param string $uuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ReadUserUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ReadUserForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ReadUserNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUuidGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function readUser(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ReadUser($uuid), $fetch);
    }
    /**
     * 
     *
     * @param string $uuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUuidPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\EditUsersUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\EditUsersForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\EditUsersNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\EditUsersUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUuidPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function editUsers(string $uuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUuidPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\EditUsers($uuid, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersBulkDeletePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDeleteUsersUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDeleteUsersForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDeleteUsersUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function bulkDeleteUsers(?\MauticInc\MEGA\OpenAPI\Generated\Model\UsersBulkDeletePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\BulkDeleteUsers($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $customer 
     * @param array $queryParameters {
     *     @var int $per_page records to fetch per page.
     *     @var int $page page to be fetched.
     *     @var string $search search string in name and email.
     *     @var string $sort_column column to sort data.
     *     @var string $sort_direction direction to sort data.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomerUsersUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomerUsersForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerUsers(string $customer, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetCustomerUsers($customer, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $customer 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachCustomerUserUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachCustomerUserForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachCustomerUserNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachCustomerUserUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function attachCustomerUser(string $customer, ?\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\AttachCustomerUser($customer, $requestBody), $fetch);
    }
    /**
     * attaches multiple users to requested customer. note: detaches users from requested customer which are not present in request.
     *
     * @param string $customer 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/xml
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerUsersUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerUsersForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerUsersNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerUsersUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function syncCustomerUsers(string $customer, ?\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = array())
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\SyncCustomerUsers($customer, $requestBody, $accept), $fetch);
    }
    /**
     * 
     *
     * @param string $customer uuid of customer
     * @param string $user uuid of user
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachCustomerUserUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachCustomerUserForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachCustomerUserNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachCustomerUserUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function detachCustomerUser(string $customer, string $user, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DetachCustomerUser($customer, $user), $fetch);
    }
    /**
     * 
     *
     * @param string $customer uuid of customer.
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersBulkDetachPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDetachCustomerUsersUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDetachCustomerUsersForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDetachCustomerUsersNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDetachCustomerUsersUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function bulkDetachCustomerUsers(string $customer, ?\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersBulkDetachPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\BulkDetachCustomerUsers($customer, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $account uuid of account.
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersBulkDetachPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDetachAccountUsersUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDetachAccountUsersForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDetachAccountUsersNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BulkDetachAccountUsersUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function bulkDetachAccountUsers(string $account, ?\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersBulkDetachPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\BulkDetachAccountUsers($account, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsForceDeletePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ForceDeleteAccountsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ForceDeleteAccountsForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ForceDeleteAccountsPreconditionFailedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ForceDeleteAccountsUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function forceDeleteAccounts(?\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsForceDeletePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\ForceDeleteAccounts($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsBulkDeletePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteMultipleAccountsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteMultipleAccountsForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteMultipleAccountsUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function deleteMultipleAccounts(?\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsBulkDeletePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteMultipleAccounts($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsRestorePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\RestoreAccountsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\RestoreAccountsForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\RestoreAccountsUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsRestorePutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function restoreAccounts(?\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsRestorePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\RestoreAccounts($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $user 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserAccountsBulkDetachPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachMultipleAccountUserUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachMultipleAccountUserForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachMultipleAccountUserNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachMultipleAccountUserUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserAccountsBulkDetachPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function detachMultipleAccountUser(string $user, ?\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserAccountsBulkDetachPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DetachMultipleAccountUser($user, $requestBody), $fetch);
    }
    /**
     * List Notifications
     *
     * @param array $queryParameters {
     *     @var int $per_page Number of notifications per page
     *     @var int $page Fetch page
     *     @var string $search Searchable string
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetNotificationsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetNotificationsForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\NotificationsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getNotifications(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetNotifications($queryParameters), $fetch);
    }
    /**
     * Delete given notification
     *
     * @param string $notificationUUID ID of the notification
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteNotificationUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteNotificationForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteNotificationNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function deleteNotification(string $notificationUUID, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteNotification($notificationUUID), $fetch);
    }
    /**
     * Mark notification as read. If already read, do nothing
     *
     * @param string $notificationUUID ID of the notification
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\MarkNotificationAsReadUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\MarkNotificationAsReadForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\MarkNotificationAsReadNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\NotificationsNotificationUUIDPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function markNotificationAsRead(string $notificationUUID, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\MarkNotificationAsRead($notificationUUID), $fetch);
    }
    /**
     * List Fonts
     *
     * @param array $queryParameters {
     *     @var int $per_page Number of records per page
     *     @var int $page Page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_column column name to sort data
     *     @var string $sort_direction direction to sort data
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetFontsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetFontsForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetFontsNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetFontsUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\FontsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getFonts(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetFonts($queryParameters), $fetch);
    }
    /**
     * Create Font
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\FontsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateFontUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateFontForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\CreateFontUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\FontsPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function createFont(?\MauticInc\MEGA\OpenAPI\Generated\Model\FontsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\CreateFont($requestBody), $fetch);
    }
    /**
     * Delete Font
     *
     * @param string $font 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteFontUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteFontForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteFontNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted|\Psr\Http\Message\ResponseInterface
     */
    public function deleteFont(string $font, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\DeleteFont($font), $fetch);
    }
    /**
     * Read Font
     *
     * @param string $font 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\FontReadUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\FontReadForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\FontReadNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\FontsFontGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function fontRead(string $font, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\FontRead($font), $fetch);
    }
    /**
     * Update Font
     *
     * @param string $font 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\FontsFontPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateFontUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateFontForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateFontNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateFontUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\FontsFontPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateFont(string $font, ?\MauticInc\MEGA\OpenAPI\Generated\Model\FontsFontPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\UpdateFont($font, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetGoogleFontsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetGoogleFontsForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetGoogleFontsNotFoundException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\GoogleFontsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getGoogleFonts(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\GetGoogleFonts(), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://mega-beta.mautic.com/openapi');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \MauticInc\MEGA\OpenAPI\Generated\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}