<?php 
namespace Admin\Controller;
use Engine\Controller;

use Engine\Core\Auth\Auth;

class AdminController extends Controller {
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $auth;

    public function __construct($di)
    {
        parent:: __construct($di);
        $this->auth = new Auth();
        //$this->checkAuthorization();

        if ($this->auth->hashUser() == null) {
            header('Location: /dynweb/cms/admin/login/');
            exit;
        }

        

    }
/**
 * Undocumented function
 *
 * @return void
 */
    

    public function logout() {
        $this->auth->unAuthorize();
        header('Location: /dynweb/cms/admin/login/');
        exit;
    }

}

?>