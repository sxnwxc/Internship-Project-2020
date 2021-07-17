<?php
$fullcalendar_path = "fullcalendar-4.4.2/packages/";
?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />

    <link href='<?=$fullcalendar_path?>/core/main.css' rel='stylesheet' />
    <link href='<?=$fullcalendar_path?>/daygrid/main.css' rel='stylesheet' />

    <script src='<?=$fullcalendar_path?>/core/main.js'></script>
    <script src='<?=$fullcalendar_path?>/daygrid/main.js'></script>

	 <style type="text/css">
		 #calendar{
			 width: 800px;margin: auto;
		 }
	  </style>

  </head>
  <body>

    <div id='calendar'></div>

	  

	  <script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="  crossorigin="anonymous"></script>
	 <script type="text/javascript">
	  $(function(){
		  // กำหนด element ที่จะแสดงปฏิทิน
        var calendarEl = $("#calendar")[0];

		  // กำหนดการตั้งค่า
        var calendar = new FullCalendar.Calendar(calendarEl, {
          	plugins: [ 'dayGrid' ]
        });
		 
		 // แสดงปฏิทิน 
		calendar.render();  
		  
	  });
	  </script> 
	  
	  
  </body>
</html>