<?php
class DataBase extends PDO
{    
    public $dbname;

    public function __construct($file = 'settings.ini')
    {
        if (!$settings = parse_ini_file($file, TRUE)) throw new exception('Unable to open ' . $file . '.');
       
        $dns = $settings['database']['driver'] .
        ':host=' . $settings['database']['host'] .
        ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
        ';dbname=' . $settings['database']['schema'];
       
        $dbname = $settings['database']['dbname'];

        parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
    }
}