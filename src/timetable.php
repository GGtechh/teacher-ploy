<h2><b>ตารางเรียน</b></h2>
<div id="calendar"></div>
<script>
    document.addEventListener('DOMContentLoaded',function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl,{
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                // right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                right: 'dayGridMonth,timeGridDay,listWeek'
            }, 
            initialView: 'dayGridMonth',
            height: 650,
            events: './src/Event.php',

            selectable: true,
            // select: async function(start, end, allDay){
            //     const { value: formValues } = await Swal.fire({
            //     title: 'จองคอร์สเรียน',
            //     html: '<div><lable>เลือกคอร์สเรียน: </lable><input id="swalEvtTitle" class="swal2-input" placeholder="Enter title"></div>' +
            //     '<lable>เวลาเริ่ม: </lable><input id="swalEvtTitle" class="swal2-input" placeholder="Enter title">' +
            //     '<lable>เวลาสิ้นสุด: </lable><input id="swalEvtURL" class="swal2-input" placeholder="Enter URL">'+
            //     '<input id="swalEvtTitle" class="swal2-input" placeholder="Enter title">',
            //     focusConfirm: false,
            //     preConfirm: () => {
            //     return [
            //         document.getElementById('swalEvtTitle').value,
            //         document.getElementById('swalEvtDesc').value,
            //         document.getElementById('swalEvtURL').value
            //     ]
            //     }
            // });


            // if (formValues){
            //     fetch("src/insert.php", {
            //         method: "POST",
            //         headers: { "Content-Type": "application/json" },
            //         body: JSON.stringify({ request_type:'addEvent', start:start.startStr, end:start.endStr, event_data: formValues})
            //     })
            //     .then(response => response.json())
            //     .then(data => {
            //     if (data.status == 1) {
            //         Swal.fire('Event added successfully!', '', 'success');
            //     } else {
            //         Swal.fire(data.error, '', 'error');
            //     }

            //     // Refetch events from all sources and rerender
            //     calendar.refetchEvents();
            //     })
            //     .catch(console.error);
            // }
            // },

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

