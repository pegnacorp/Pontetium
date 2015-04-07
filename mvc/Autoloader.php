<?php
//include_once(dirname(__FILE__)."/../Model/User.php");
	class Autoloader{
		public $DIRECTORIO = '/../Controller/';
		function autocargar($nombreClase){
			//include $this->DIRECTORIO . $nombreClase . '.php';
			include(dirname(__FILE__).$this->DIRECTORIO . $nombreClase . '.php');
			//echo $this->DIRECTORIO . $nombreClase . '.php';

		}
	}
	$autocarga = new Autoloader();
	$autocarga->autocargar('UserController');


/*

ALTERNATIVA A AUTOLOADER

	public static $loader;

    public static function init()
    {
        if (self::$loader == NULL)
            self::$loader = new self();
        return self::$loader;
    }

    public function __construct()
    {
        spl_autoload_register(array($this,'model'));
        spl_autoload_register(array($this,'controller'));
        spl_autoload_register(array($this,'view'));
        spl_autoload_register(array($this,'config'));
    }

    public function view($class)
    {
    	set_include_path(get_include_path().PATH_SEPARATOR.'./app/views/');
        spl_autoload($class);
        spl_autoload('View');
    }

    public function controller($class)
    {
        set_include_path(get_include_path().PATH_SEPARATOR.'./app/controllers');
        spl_autoload($class);
    }

    public function model($class)
    {
    	set_include_path(get_include_path().PATH_SEPARATOR.'./mvc/database/');
        set_include_path(get_include_path().PATH_SEPARATOR.'./app/models/');
        $class = preg_replace('/Controller/','',$class);
        spl_autoload($class);
        spl_autoload('ActiveRecord');
        //spl_autoload('Model');
    }

    public function config($class)
    {
        set_include_path(get_include_path().PATH_SEPARATOR.'./app/config/');
        spl_autoload($class);
    }
    */
?>
