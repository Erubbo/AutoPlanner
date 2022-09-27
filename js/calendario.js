document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {

        locale: 'pt-br',
      
      initialView: 'timeGridWeek',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      height: 'auto',
      navLinks: true, 
      editable: true,
      selectable: true,
      selectMirror: true,
      nowIndicator: true,
      events: [
        {
          title: 'All Day Event',
          start: '2022-09-01',
        },
        
        {
          title: 'Almoço',
          start: '2022-09-07',
          end: '2022-09-10'
        },
        {title: 'Almoço',
          daysOfWeek: [1,2,3,4,5],
          startTime: '11:00:00',
          endTime: '12:00:00'
        },
        {
          title: 'Conference',
          start: '2022-09-11',
          end: '2022-09-13'
        },
        {
          title: 'Meeting',
          start: '2022-09-12T10:30:00',
          end: '2022-09-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2022-09-12T12:00:00'
        },
        
      ],
    });

    calendar.render();
  });