<?php
	//array test
    $arr = array(
    	'one' => 1,
    	'two' => 2,
    	'three' => 3
    );

    foreach ($arr as $k => $v) {
    	//echo $k.'='.$v;
    }

    $arr = array('a', 'b', 'c');
    foreach ($arr as $v) {
    	//echo $v. '<br/>';
    }
    //echo var_dump($arr);

    //globals test
    $x = 5;
    $y = 10;
    function myTest()
    {
    	$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    /*
    echo $y . '\\r\\n';
    myTest();
    echo $y;
    */

    //static test
    function staticTest()
    {
    	static $x = 5;
    	echo $x;
    	$x++;
    }
    /*
    staticTest();
    staticTest();
    staticTest();
    */

    //variable test
    $x = 046;
    //echo var_dump($x);
    $y = 0.145;
    //echo $y;
    $b = true;
    //true or false
    //echo $b;
    $b2 = false;
    $b2 = null;
    $b3 = '';
    //echo var_dump($b3);

    ////string in common use function
    //echo strlen("abcde");
    //echo strpos('abcdefghijk', 'cd');

    ////constant
    define('PI', 3.1415926);
    //echo PI;

    ////+-*/
    $x = 100;
    $y = '100';
    //echo var_dump($x==$y);
    //echo var_dump($x===$y);

    //// timezone set
    date_default_timezone_set('Asia/Shanghai');
    $t = date('h:i:sa');
    //echo $t;

    //// switch test
    /*
    $x = 1.23;
    switch ($x) {
    	case 1.23:
    		echo "value is 1";
    		break;
    	case 'abc':
    		echo "value is abc";
    		break;
    	default:
    		echo "value not find";
    }
    */
/*
    function setHeight($minHeight = 10, $msg = 'minHeight')
    {
    	echo $minHeight;
    	echo '<br/>';
    	echo $msg;
    }
    setHeight();
    */

    $x = 3;
    if ($x) {
        echo 'true';
    } else {
        echo 'false';
    }

?>