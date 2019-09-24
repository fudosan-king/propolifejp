<?php

namespace Digima;

use Digima\Modules\Form\Form;
use Exception;

/**
 * Digima PHP Client.
 *
 * @copyright (c) 2018, COMVEX Co., Ltd.
 */
class Client
{
    /**
     * @var AuthManager
     */
    private $authManager;

    /**
     * @param string $accountCode
     * @return void
     */
    public function __construct($accountCode)
    {
        // If we cannot resolve the AuthManager,
        // we assume the library is not being used as a Composer package but standalone.
        // In this case, we need to manually require the autoloader.
        if (! class_exists('Digima\\AuthManager')) {
            $this->requireAutoload();
        }

        $this->authManager = new AuthManager($accountCode);
    }

    /**
     * @param string $code The Web Form code
     * @return Form
     */
    public function makeForm($code)
    {
        return new Form($this->authManager, $code);
    }

    /**
     * Require the autoloader file when using the library standalone.
     *
     * @throws Exception
     * @return void
     */
    private function requireAutoload()
    {
        $autoloadFile = __DIR__.'/../../../../vendor/autoload.php';

        if (! file_exists($autoloadFile)) {
            throw new Exception('Autoload file not found.');
        }

        if (! is_readable($autoloadFile)) {
            throw new Exception('Cannot read autoload file.');
        }

        require_once $autoloadFile;
    }
}
