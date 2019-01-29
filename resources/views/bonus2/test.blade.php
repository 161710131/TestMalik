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
          <li class="active">Bonus2</li>
        </ul>
<?php 
// Function to get no of set 
// bits in binary representation 
// of positive integer n 
function countSetBits($n) 
{ 
	$count = 0; 
	while ($n) 
	{ 
		$count += $n & 1; 
		$n >>= 1; 
	} 
	return $count; 
} 

// Driver Code  
$a = 7;
$b = 3;
$c = ($a * $b);
$d = decbin($c);
echo 'Di kali dari= ' .$a.'x'.$b. '=' .$c. '<br>';
echo 'Binary = ' .$d. '<br>';
echo 'Hasilnya ='.countSetBits($c);
?> 

 </div>
</div>
@endsection


