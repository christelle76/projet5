$(document).ready(function() {
	
  $('#calendar').fullCalendar({
    locale: 'fr',	

    header : {
      left:   'prev,next', //les boutons suivant et précédent viennent àgauche
      center: 'title', // le titre se retrouve au centre
      right:  'today month,agendaWeek,agendaDay' //aujourd'hui reste à sa place mais nous lui rajoutons trois boutons
  },

  defaultView : 'agendaWeek', // vue par défaut sur l'agenda hebdomadaire
  selectable: true, // on autorise la selection dans le calendrier

  events :[
    {
        id : 1,
        title  : 'Salon automobile',
        start  : '2018-06-02T08:00',
        end  : '2018-06-03T18:00',
        color  : 'red',
        description : 'Venez nous voir FDP !'
    }
    ]

  });

  $("#datePicker").datepicker({
    language:'fr',
    todayHighlight: true
  }).on('changeDate',function(e){
      // On utilise la méthode gotoDate pour se positionner sur la date cliquée
    $('#calendar').fullCalendar('gotoDate', $(this).datepicker('getDate'));
    //on récupère le nouveau titre de notre calendrier
    titreCalendrier();
  });
  
  $('#prev').on('click', function(){
    $('#calendar').fullCalendar('prev');
    titreCalendrier();
    //on appelle la méthode update et on y attribue la date actuelle de fullcalendar
    $("#datePicker").datepicker('update',$('#calendar').fullCalendar('getDate').format('DD-MM-YYYY'));
  });
  $('#next').on('click', function(){
    $('#calendar').fullCalendar('next');
    titreCalendrier();
    $("#datePicker").datepicker('update',$('#calendar').fullCalendar('getDate').format('DD-MM-YYYY'));
  });

});