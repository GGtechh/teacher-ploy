<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/0949ce2d03.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logotest.png">
    <title>TEACHER PLOY</title>
    <link rel="stylesheet" href="assets/js/fullcalendar/lib/main.css">
    <script src="assets/js/fullcalendar/lib/main.js"></script>
</head>
<body>
    <div id="calendar"></div>
</body>
</html>
<script>
    document.addEventListener('DOMContentLoaded',function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl,{
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            }, 
            initialView: 'dayGridMonth',
            width:300,
            height: 450,
        });

        calendar.render();
    });
</script>