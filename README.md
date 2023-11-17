## database option function 

its a very sample database library.

more infomation https://medoo.in/

## install 
~~~
composer require thefunpower/wp_medoo
~~~

In your plugin file add code
~~~
include __DIR__.'/vendor/autoload.php';
~~~

### get all data
~~~
$res = db_get("user",'*',db_raw("WHERE  DATE_FORMAT(<created_at>,'%Y-%m') = '".$today."'"));
~~~

### get pager
~~~
$res = db_pager("user",'*',[]);
~~~

### get one
~~~
$res = db_get_one("user",'*',[]);
~~~

### get sum
~~~
$res = db_get_sum("user",'price',[]);
~~~

### get count
~~~
$res = db_get_count("user",[]);
~~~

### get date between
~~~
$date1 = '2022-11-01';
$date2 = '2022-12-02';
$where = db_between_date('created_at',$date1,$date2);
pr($where);exit;
$res = db_get("user",'*', $where); 
~~~

### get month between

~~~
$date1 = '2022-10';
$date2 = '2022-11';
$where = db_between_month('created_at',$date1,$date2);
$res = db_get("user",'*', $where);
~~~

 