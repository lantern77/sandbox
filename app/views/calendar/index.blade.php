@extends('template')

@section('content')
<div class="jumbotron">
	<iframe src="https://www.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=4m4ecmcnt2156a7sie9qicnd0c%40group.calendar.google.com&amp;color=%23711616&amp;ctz=America%2FToronto" style=" border-width:0 " width="1020" height="765" frameborder="0" scrolling="no"></iframe>
	<?php
  $from = "mcmasterseclub@gmail.com"; 

  $to = "sec@mcmaster.ca"; 
  $subject = "Event name";
  
  $message = "sdkfjsdklfe ";
 # mail($to,$subject,$message,$from);
?>

</div>

@stop


