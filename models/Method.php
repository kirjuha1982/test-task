<?php


class Method
{

    function actionTask1($text){
        preg_match_all('/\[(.*):(.*)\](.*)\[\/(.*)\]/isU', $text, $matches);

        $array_first = [];
        $array_second = [];
        if(isset($matches[0]) && count($matches[0]) > 0){
            foreach ($matches[0] as $key=>$item){

                if(isset($matches[1][$key]) && isset($matches[4][$key]) && trim($matches[1][$key]) == trim($matches[4][$key])){
                    $array_first[$matches[1][$key]] = $matches[3][$key];
                    $array_second[$matches[1][$key]] = $matches[2][$key];
                }



            }
        }
        print_r($array_first);
        print_r($array_second);

    }


    function actionTask2($text){

       $result = [];
       preg_match_all('/(raz:|dva:|tri:)(.*)((?=raz:|dva:|tri:)|$)/isU', $text, $matches);


        if(isset($matches[0]) && count($matches[0]) > 0){
            foreach ($matches[0] as $key=>$item){
                $result[str_replace(':', '', $matches[1][$key])] = trim($matches[2][$key]);
            }
        }

       print_r($result);

    }


    function actionTask4($db){
        $result = $db->queryDb("select t1.* from `value` t1 
                    join `value` t2 on t2.parent=t1.id 
                    join `value` t3 on t3.parent=t2.id 
                    left join `value` t4 on t4.parent=t3.id 
                    where t1.parent is null");

        print_r($result);
    }

    function actionTask5($db){
        $result = $db->queryDb("select t3.* from `value` t1 
                    join `value` t2 on t2.parent=t1.id 
                    join `value` t3 on t3.parent=t2.id 
                    left join `value` t4 on t4.parent=t3.id 
                    where t1.parent is null AND t4.id is null");

        print_r($result);
    }

    function actionTask6(){
        $arr = [];
        $arr1 = [];

        for($i = 0; $i < 1000000; $i++){
            $arr[] = mt_rand(100000,1500000);
        }
        $start = microtime(true);
        for($i=0; $i<count($arr); $i++){
            if(isset($arr1[$arr[$i]])){
                $arr1[$arr[$i]]++;
            }else{
                $arr1[$arr[$i]] = 0;
            }
        }

        foreach ($arr1 as $key=>$item){
            if($item == 0){
                unset($arr1[$key]);
            }
        }

        //print_r($arr1);
        $end = microtime(true);
        $diff = $end - $start;
        echo "\nНа поиск портачено: ". $diff;
        echo "\nПовторных значений: ". count($arr1);

    }

    function actionTask7(){
        /*$arr = [
            ['а1', 'а2', 'а3'],
            ['b1', 'b2', 'b3', 'b3'],
            ['c1', 'c2', 'c3'],
            ['d1'],
        ];*/

        $arr = [];
        $a = ['a', 'b', 'c', 'd'];
        foreach($a as $k=>$l){
            for($i=1; $i<mt_rand(2, 5); $i++){
                $arr[$k][] = $l.$i;
            }
        }
        echo 'Исходный рандомный массив:';
        print_r($arr);

        $result = [];
        $length = count($arr);
        $total_length = 1;
        foreach ($arr as $array)
            $total_length = $total_length * count($array);


        for ($i = 0; $i < $total_length; $i ++)
        {
            $result[$i] = array();
            for ($j = 0; $j < $length; $j ++)
                array_push($result[$i], current($arr[$j]));
            for ($j = ($length -1); $j >= 0; $j --)
            {
                if (next($arr[$j]))
                    break;
                elseif (isset ($arr[$j]))
                    reset($arr[$j]);
            }
        }
        echo 'Результат:';

        print_r($result);
    }


    function render($db, $log){


        require_once('views/index.php');





        // return $template;
    }
}