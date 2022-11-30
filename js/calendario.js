document.addEventListener("DOMContentLoaded", function () {
  calendar1();
  calendar2();
  calendar3();
});

const calendar1 = () => {
  var calendarEl = document.getElementById("calendar1");

  var calendar = new FullCalendar.Calendar(calendarEl, {
    locale: "pt-br",

    initialView: "timeGridWeek",
    headerToolbar: {
      left: "prev,next today",
      center: "title",
      right: "dayGridMonth,timeGridWeek,timeGridDay,listWeek",
    },
    height: "auto",
    navLinks: true,
    editable: true,
    selectable: true,
    selectMirror: true,
    nowIndicator: true,
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
