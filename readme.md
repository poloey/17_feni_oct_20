# [:house: Feni Batch Home Page](http://poloey.github.io/feni)
# Class 17 - Friday 

### concatenation operator
in Js we use `+` for concatenating (adding) 2 strings. In php we use `.` instead of `+`, when we concatenate 2 strings.
~~~php
$hello = 'hello';
$world = ' world';
echo $hello . $world //output: hello world
~~~

### `include`, `include_once`, `require`, `require_once` use for including any file to other files
~~~php
include 'header.php';
~~~

### for, foreach iterative (loop)  and count()
~~~php 
$fruits = ['apple', 'orange', 'banana'];
//generic for loop
for ($i = 0; $i < count($fruits); $i++) {
  echo $fruits[$i];
}

foreach ($fruits as $fruit) {
  echo $fruit;
}
~~~
foreach loop is very simple and easier than for loop.     
