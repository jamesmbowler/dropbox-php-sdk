<?php
namespace Kunnu\Dropbox;

class DropboxApp
{

    /**
     * The Client ID of the App
     *
     * @link https://www.dropbox.com/developers/apps
     *
     * @var string
     */
    protected $clientId;
    
    /**
     * The Business User ID of the App
     *
     * @link https://www.dropbox.com/developers/apps
     *
     * @var string
     */
    protected $businessUserId;

    /**
     * The Client Secret of the App
     *
     * @link https://www.dropbox.com/developers/apps
     *
     * @var string
     */
    protected $clientSecret;

    /**
     * The Access Token
     *
     * @var string
     */
    protected $accessToken;

    /**
     * Create a new Dropbox instance
     *
     * @param string $clientId     Application Client ID
     * @param string $clientSecret Application Client Secret
     * @param string $accessToken  Access Token
     */
    public function __construct($clientId, $clientSecret, $accessToken = null, $businessUserId = null)
    {
        $this->clientId = $clientId;
        $this->businessUserId = $businessUserId;
        $this->clientSecret = $clientSecret;
        $this->accessToken = $accessToken;
    }

    /**
     * Get the App Client ID
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }
    
    /**
     * Get the Business User ID
     *
     * @return string
     */
    public function getBusinessUserId()
    {
        return $this->businessUserId;
    }

    /**
     * Get the App Client Secret
     *
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * Get the Access Token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }
}
