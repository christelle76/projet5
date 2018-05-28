$(function() {

    // page is now ready, initialize the calendar...
  
    $('#calendar').fullCalendar({
      locale: 'fr',

      header : {
        left:   'prev,next', //les boutons suivant et précédent viennent àgauche
        center: 'title', // le titre se retrouve au centre
        right:  'today month,agendaWeek,agendaDay' //aujourd'hui reste à sa place mais nous lui rajoutons trois boutons
    }
    })
  
  });