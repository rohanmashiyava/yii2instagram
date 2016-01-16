<?php
/**
 * @author Rohan Mashiyava <rohan@thetatechnolabs.com>
 */

namespace rohanmashiyava\yii2instagram;

use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\Url;

class Yii2instagram extends Component
{
    public $environment;
    public $apiKey;
    public $apiSecret;
    public $apiCallback;

    public $insta;

    public function init()
    {
        if (!$this->environment) {
            throw new InvalidConfigException('Environment is required');
        }
        if (!$this->apiKey) {
            throw new InvalidConfigException('API Key is required');
        }
        if (!$this->apiSecret) {
            throw new InvalidConfigException('API Secret is required');
        }
        if (!$this->apiCallback) {
            throw new InvalidConfigException('API Call Back is required');
        }

       $this->setupConfig();
    }

    /**
     *v setup a config
     */
    public function setupConfig()
    {
        $this->insta = new InstaAPI(array(
            'apiKey'      => $this->apiKey,
            'apiSecret'   =>  $this->apiSecret,
            'apiCallback' => Url::toRoute($this->apiCallback)
        ));
    }

    public function getLogin() {

    	print_r($this->insta);die('rohan here');
    }

} 