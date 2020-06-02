<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // $this->assertTrue(true);

        $dbms='mysql';     //数据库类型
        $host='mysql'; //数据库主机名,在docker中,xy_mysql是我的mysql容器的别名
        $dbName='laravel';    //使用的数据库
        $user='root';        //数据库连接用户名
        $pass='123456';   //对应的密码
        $dsn="$dbms:host=$host;dbname=$dbName";
        try {
            $con = new PDO($dsn, $user, $pass); //初始化一个PDO对象
            $res =  $con->query('select * from user');
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                echo "id:{$row['id']} name:{$row['name']}";
            }
        } catch (PDOException $e) {
            echo '错误原因：'  . $e->getMessage();
        }
    }
}
