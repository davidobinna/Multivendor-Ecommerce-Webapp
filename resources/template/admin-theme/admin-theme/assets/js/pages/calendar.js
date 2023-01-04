"use strict";
$('#calendar').fullCalendar({
    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
    },
    defaultDate: '2018-07-12',
    editable: true,
    droppable: true, // this allows things to be dropped onto the calendar
    drop: function() {
        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
            // if so, remove the element from the "Draggable Events" list
            $(this).remove();
        }
    },
    eventLimit: true, // allow "more" link when too many events
    events: [
        {
            title: 'All Day Event',
            start: '2018-07-01',
            className: 'bg-info',
            
        },
        {
            title: 'Long Event',
            start: '2018-07-07',
            end: '2018-07-10',
            className: 'bg-danger'
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: '2018-08-09T16:00:00',
            className: 'bg-dark'
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: '2018-06-16T16:00:00',
            className: 'bg-success'
        },
        {
            title: 'Conference',
            start: '2018-08-11',
            end: '2018-08-14',
            className: 'bg-primary'
        },
        {
            title: 'Meeting',
            start: '2018-08-12T10:30:00',
            end: '2018-08-12 T12:30:00',
            className: 'bg-warning'
        },
        {
            title: 'Lunch',
            start: '2018-08-12T12:00:00',
            className: 'bg-dark'
        },
        {
            title: 'Meeting',
            start: '2018-08-12T14:30:00',
            className: 'bg-secondary'
        },
        {
            title: 'Happy Hour',
            start: '2018-07-12T17:30:00',
            className: 'bg-dark'
        },
        {
            title: 'Dinner',
            start: '2018-06-12T20:00:00',
            className: 'bg-warning'
        },
        {
            title: 'Birthday Party',
            start: '2018-08-13T07:00:00',
            className: 'bg-success'
        },
        {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2018-08-28',
            className: 'bg-primary'
        }
    ]
});

 // Previous month action
 $('#cal-prev').on('click',function(){
    $('#calendar').fullCalendar( 'prev' );
});

// Next month action
$('#cal-next').on('click',function(){
    $('#calendar').fullCalendar( 'next' );
});

// Change to month view
$('#change-view-month').on('click',function(){
    $('#calendar').fullCalendar('changeView', 'month');

    // safari fix
    $('#content .main').fadeOut(0, function() {
        setTimeout( function() {
            $('#content .main').css({'display':'table'});
        }, 0);
    });

});

// Change to week view
$('#change-view-week').on('click',function(){
    $('#calendar').fullCalendar( 'changeView', 'agendaWeek');

    // safari fix
    $('#content .main').fadeOut(0, function() {
        setTimeout( function() {
            $('#content .main').css({'display':'table'});
        }, 0);
    });

});

// Change to day view
$('#change-view-day').on('click',function(){
    $('#calendar').fullCalendar( 'changeView','agendaDay');

    // safari fix
    $('#content .main').fadeOut(0, function() {
        setTimeout( function() {
            $('#content .main').css({'display':'table'});
        }, 0);
    });

});

// Change to today view
$('#change-view-today').on('click',function(){
    $('#calendar').fullCalendar('today');
});