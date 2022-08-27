<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FullCalender</title>
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
            height: 650,
        });

        calendar.render();
    });
</script>
