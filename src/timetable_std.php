<h2><b>ตารางเรียน</b></h2>
<div id="calendar"></div>
<script>
    document.addEventListener('DOMContentLoaded',function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl,{
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridDay,listWeek'
            }, 
            initialView: 'dayGridMonth',
            height: 650,
            events: './src/Event.php',

            eventClick: function(info) {
                info.jsEvent.preventDefault();

                info.el.style.borderColor = 'red';
            
            Swal.fire({
                title: info.event.title,
                icon: 'info',
                html:'<p>'+info.event.start+'</p>',
            });
            }
        });

        calendar.render();
    });
</script> 