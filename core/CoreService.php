<?php
namespace Pas;
use \MySqli;
/**
 * Portal Authentication.
 * Creator: LLG
 * Date: 2017/5/25
 * Time: 20:46
 */

/*
 * 数据库连接 edit to your own database connection!
 */
date_default_timezone_set("Asia/Chongqing");
define("DBAddress","localhost");
define("DBPort","3306");
define("DBName","pas");
define("DBUser","pas");
define("DBPassword","pas");


class CoreService
{
    private static $MonoInstance;
    private $Connection;

    private function __construct()
    {
        $this->ServiceStart();
    }

    private function __clone()
    {
        //克隆函数覆盖
    }

    public static function GetInstance()
    {
        if(is_null(self::$MonoInstance))
        {
            self::$MonoInstance=new CoreService();
        }
        return self::$MonoInstance;
    }

    public function ServiceStart()
    {
        $Result=$this->ConnectDatabase();
        if(!$Result["success"]==0)
        {
            echo $Result['error'];
        }

    }

    private function ConnectDatabase()
    {
        $result["success"] = 0;
        if (!isset($this->Connection)) {
            $this->Connection = new MySqli(DBAddress . ":" . DBPort, DBUser, DBPassword, DBName);

            if ($this->Connection->errno == 0)
            {
                $result["success"] = 0;
                $this->Connection->select_db(DBName);
            }
            else
            {
                $result["success"] = -1;
                $result["error"] = $this->Connection->error;
                $this->Connection->close();
                unset($this->Connection);
            }
        }
        return $result;
    }

    public function QuerySQL($SQLCommand)
    {
        return $this->Connection->query($SQLCommand);
    }
    public function QuerySQLWithInsertID($SQLCommand)
    {
        $result["Connection"]=$this->Connection->query($SQLCommand);
        $result["InsertID"]=$this->Connection->insert_id;
        return $result;
    }


}



?>
