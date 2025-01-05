<html>
     <body>
   <?php
   //this is single line comment
   //echo"helloworld!";

  echo "helloworld!"; 
  echo"this is a comment example";
  
  $name="shubham"; //string
  $age=18; //integer
  $time=14.47; //float
  $class=true; //boolean

  //compund types
  $student_arr=array("raj","punit","shivam"); //arrays

  class student{  //class
  public $marks;
 } 
 $stud= new student(); //object
 $stud->marks = 90;

 //special types
 $null_var = null;

 echo "<br> string :" ,$name;
 echo"<br>ineger : ",$age;
 echo"<br>float :" ,$time;
 echo"<br>boolean:", $class;
 echo "<br>array :",$student_arr[1];

 //echo "object : ",$stud:
 echo "Null :", $null_var;

  /*this is multiline comments
  developed for php session*/
   ?>                     
     </body>
</html>