$(document).ready(function(){
    
    alert($('#hiddenMonth').val());
    alert($('#monthlyData').val());
    
var monthlyData = $('#monthlyData').val();

    function AddEvent(StartDate) {
        $('#calendar').fullCalendar('renderEvent', {
            id: StartDate,
            title: '1',
            start: StartDate,
            end: StartDate,
            allDay: true
        }, true);
    }

    var dateClicked;
    $('#calendar').fullCalendar({
        
        dayClick: function(date){
            dateClicked = $.fullCalendar.formatDate(date, "yyyy-MM-dd");
            //var t = Date.parse(dateClicked);
//            var d = new Date(t);
//            alert(d.getDay());
//            alert(d.getMonth());
            // alert(dateClicked);
            alert(dateClicked);
        },
       
        events: function(){
            [

            {
                title: 'product1',
                start: dateClicked
            }
            ]
        }
       
    })


});