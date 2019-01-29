@extends('layouts.app')
@section('content')
<section id="main-content">
          <section class="wrapper">         
<div class="container">
    <div class="row">
  <br>
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li class="active">Bonus1</li>
        </ul>
	<?php 

$a; 
for ($a = 1; $a <= 1000; $a++) 
{ 
	if ($a % 2 == 0 && $a % 3 == 0 && $a % 5 == 0) 
		echo "CodilityTestCoders" . "<br>"; 
	else if ($a % 2 == 0 && $a % 3 == 0) 
	echo "CodilityTest" . "<br>";			  
	else if ($a % 2 == 0 && $a % 5 == 0) 
	echo "CodilityCoders" . "<br>";
	else if ($a % 3 == 0 && $a % 5 == 0) 
	echo "CodersTest" . "<br>";
	else if (($a % 3) == 0) 
	echo "Test" . "<br>";
	else if (($a % 5) == 0) 
	echo "Coders" . "<br>";
	else if (($a % 2) == 0) 
	echo "Codility" . "<br>";

	else 		 
		echo $a,"<br>" ;			 
} 

 
?> 

 </div>
</div>
@endsection