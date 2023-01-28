document.addEventListener("DOMContentLoaded", function () {
  calendar1();
  calendar2();
});

const calendar1 = () => {

    var calendarEl = document.getElementById('calendar1');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      locale: "pt-br",
      initialView: 'timeGridWeek',
      headerToolbar: {
        left: '',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      select: function(arg) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.addEvent({
            title: title,
            start: arg.start,
            end: arg.end,
            allDay: arg.allDay
          })
        }
        calendar.unselect()
      },
      eventClick: function(arg) {
        if (confirm('Are you sure you want to delete this event?')) {
          arg.event.remove()
        }
      },
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2020-09-01'
        },
        {
          title: 'Long Event',
          start: '2020-09-07',
          end: '2020-09-10'
        },
      {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2020-09-28'
        }
      ]
    });

    calendar.render();
  };


const calendar2 = () => {
  var initialLocaleCode = 'pt-br';
  var calendarEl = document.getElementById("calendar2");

  var calendar = new FullCalendar.Calendar(calendarEl, {
    height: 480,
    headerToolbar: {
      left: "",
      center: "title",
      right: "dayGridMonth",
    },
    locale: initialLocaleCode,
    buttonIcons: false, // show the prev/next text
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    dayMaxEvents: true, // allow "more" link when too many events
    events:  [
      {
        title: "All Day Event",
        start: "2022-11-24",
      },

      {
        title: "Almoço",
        start: "2022-11-30",
        end: "2022-11-30",
      },
      {
        title: "Almoço",
        daysOfWeek: [1, 2, 3, 4, 5],
        startTime: "11:00:00",
        endTime: "12:00:00",
      },
      {
        title: "Conference",
        start: "2022-11-30",
        end: "2022-11-30",
      },
      {
        title: "Meeting",
        start: "2022-11-30T10:30:00",
        end: "2022-11-30T12:30:00",
      },
      {
        title: "Lunch",
        start: "2022-09-12T12:00:00",
      },
    ],
  });

  calendar.render();

  // build the locale selector's options
  calendar.getAvailableLocaleCodes().forEach(function (localeCode) {
    var optionEl = document.createElement("option");
    optionEl.value = localeCode;
    optionEl.selected = localeCode == initialLocaleCode;
    optionEl.innerText = localeCode;
    localeSelectorEl.appendChild(optionEl);
  });

  // when the selected option changes, dynamically change the calendar option
  localeSelectorEl.addEventListener("change", function () {
    if (this.value) {
      calendar.setOption("locale", this.value);
    }
  });
};

const calendar3 = () => {
  var calendarEl = document.getElementById('calendar3');
  var initialLocaleCode = 'pt-br';
  var calendar = new FullCalendar.Calendar(calendarEl, {

    height: 450,
    // stickyHeaderDates: false, // for disabling

    headerToolbar: {
      left: '',
      center: 'title',
      right: ''
    },


    locale: initialLocaleCode,
    initialView: 'listYear',
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    events: [
      {
        title: "All Day Event",
        start: "2022-11-24",
      },

      {
        title: "Almoço",
        start: "2022-11-30",
        end: "2022-11-30",
      },
      {
        title: "Almoço",
        daysOfWeek: [1, 2, 3, 4, 5],
        startTime: "11:00:00",
        endTime: "12:00:00",
      },
      {
        title: "Conference",
        start: "2022-11-30",
        end: "2022-11-30",
      },
      {
        title: "Meeting",
        start: "2022-11-30T10:30:00",
        end: "2022-11-30T12:30:00",
      },
      {
        title: "Lunch",
        start: "2022-09-12T12:00:00",
      },
    ],
  });

  calendar.render();
};
