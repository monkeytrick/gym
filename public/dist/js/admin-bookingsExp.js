var currentView = null;
var currentTargetClasses = null;

var pageTitle = document.getElementById('page-title')

//New node and class for content
var divCreate = document.createElement('div');
divCreate.classList.add('col-12');


//Page element for below node to be appended to 
var contentField = document.querySelector(".cont-display");


function ajaxCall(url){

    return new Promise(function(resolve, reject) {

        xhttp = new XMLHttpRequest();

        console.log("Ajax started")

            xhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                    console.log("Ajax data received")
                    data = JSON.parse(this.responseText)
                    resolve(data)                     
                }
            }
        
            xhttp.open("GET", url, true);
        
            xhttp.setRequestHeader('Content-Type', 'application/json');
        
            let xToken =  document.querySelector('meta[name="csrf-token"]').content;
            xhttp.setRequestHeader("X-CSRF-Token", xToken)   
        
            xhttp.send();
    })

}


// Sets title, removes content, changes class of menu item
function updateContent(newTargetClasses, title){

        //remove current content
        while (contentField.firstChild) {
            contentField.removeChild(contentField.firstChild);
          }

        // remove highlighted menu item
        if(currentTargetClasses !== null) {
        currentTargetClasses.classList.remove('active');
        }

        // highlight current menu item
        currentTargetClasses = newTargetClasses;
        currentTargetClasses.classList.add("active");

        // set title
        pageTitle.innerText = title;

        //update current view
        currentView = newTargetClasses.id
        console.log(currentView)
}



document.getElementById('view-bookings').addEventListener('click', (event)=> {
    event.stopPropagation();

    //Consider changing below. Currently, everything is wrapped in below if statement
    if(currentView !== event.target.id) {

        updateContent(event.target, "Bookings")

        let tablePromise = new Promise(function(resolve) {
            
            xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                    allBookings = JSON.parse(this.responseText)
                    resolve(allBookings)                     
                }
            }
        
            xhttp.open("GET", "/admin/bookings", true);
        
            xhttp.setRequestHeader('Content-Type', 'application/json');
        
            let xToken =  document.querySelector('meta[name="csrf-token"]').content;
            xhttp.setRequestHeader("X-CSRF-Token", xToken)   
        
            xhttp.send();
    
        })
        .then(function(bookingsPast){

            let tables = ["Today", 'Upcoming Bookings', 'PreviousBookings']

            //Final to append to

            let newTables = "";

            tables.forEach(table => {
                
                // Create table for each timeframe. Add as string
                newTables += "<div class='card'><div class='card-header'>"
                + "<h3 class='card-title'>" + table + "</h3>"
                + "</div>"
                + "<div class='card-body'>"
                + "<table id=" + "'" + table + "'" + "class='display table table-bordered table-striped data-table dtr-inline' style='width:100%'>"
                +    "<thead>"
                +       "<tr>"
                +         "<th>Booking Ref</th>"
                +         "<th>Username</th>"
                +        "<th>Class Ref</th>"
                +        "<th>Class Name</th>"
                +        "<th>Date & Time</th>"
                +        "<th>Phone</th>"
                +        "<th>Delete</th>"
                +      "</tr>"
                +   "</thead>"
                +   "<tfoot></tfoot>"
                + "</table>"
                + "</div>"
                + "</div>"
            });

            // Use constucted strings for tables HTML
            divCreate.innerHTML = newTables;

            // Append tables to element
            contentField.appendChild(divCreate)   
            // console.log('tables created')
            // resolve(bookingsPast)

            }).then(function(){
            // Populate tables with data
            $('#PreviousBookings').DataTable({

                "data": allBookings.past,

                // Big help using icons!
                // http://live.datatables.net/qemodapi/1/edit

                //Set trash icon and assign id
                "columnDefs": [ {
                    "targets":6,
                    "data": "booking_id",
                    "render": function (data) {
                    return '<i class="fas fa-trash" id="'+data+'"></i>';  }
                }
                ],

            
                columns: [
                    { "data" : "booking_id" },
                    { "data" : "name"       },
                    { "data" : "class_id"   },
                    { "data" : "class_name" },
                    { "data" : "class_date" },
                    { "data" : "phone"      },
                ]
            
            },
            //consider using below with 'then'// document for all icons
            $("#PreviousBookings").on('click', '.fa-trash', function() {
                alert('icon clicked')
            })     
            
                        );

            $('#Today').DataTable({
                "data": allBookings.today,
                
                "columnDefs": [ {
                    "targets":6,
                    "data": "booking_id",
                    "render": function (data) {
                    return '<i class="fas fa-trash" id="'+data+'"></i>';    }
                }
                ],                

                columns: [
                    { "data" : "booking_id" },
                    { "data" : "name"       },
                    { "data" : "class_id"   },
                    { "data" : "class_name" },
                    { "data" : "phone"      },
                    { "data" : "email"      },
                ],                
          
            });

            $('#UpcomingBookings').DataTable({
                "data": allBookings.upcoming,

                "columnDefs": [ {
                    "targets":6,
                    "data": "booking_id",
                    "render": function (data) {
                    return '<i class="fas fa-trash" id="'+data+'"></i>';    }
                }
                ],
                
                columns: [
                    { "data" : "booking_id" },
                    { "data" : "name"       },
                    { "data" : "class_id"   },
                    { "data" : "class_name" },
                    { "data" : "phone"      },
                    { "data" : "email"      },
                ]            
            });
        })
    }              
})

document.getElementById('view-users').addEventListener('click', (event)=> {
    event.stopPropagation();

    if(currentView !== event.target.id) {

        updateContent(event.target, "Users")

        divCreate.innerHTML = "<div class='card'><div class='card-header'>"
        + "<h3 class='card-title'>'Users'</h3>"
        + "</div>"
        + "<div class='card-body'>"
        + "<table id='users' class='display table table-bordered table-striped data-table dtr-inline' style='width:100%'>"
        +    "<thead>"
        +       "<tr>"
        +         "<th>ID</th>"
        +         "<th>Name</th>"
        +        "<th>Email</th>"
        +        "<th>Phone</th>"
        +        "<th>Delete</th>"
        +      "</tr>"
        +   "</thead>"
        +   "<tfoot></tfoot>"
        + "</table>"
        + "</div>"
        + "</div>"

        contentField.appendChild(divCreate)

        $('#users').DataTable( {
            "ajax": {url: '/admin/users',
                    dataSrc: ''},

            "columnDefs": [ {
                "targets": 4,
                "data": "id",
                "render": function (data) {
                return '<i class="fas fa-trash" id="'+data+'"></i>';    }
            }
            ],
            
            columns: [
                { "data" : "id"    },
                { "data" : "name"  },
                { "data" : "email" },
                { "data" : "phone" },
                // { "data" : ""      },
            ]         
        });

}})

//Get classes

document.getElementById('view-classes').addEventListener('click', getCalendar);

// Function extracted so that can be called again when calendar is re-set on new date received

function getCalendar(event) {


    //avoids error thrown when refreshed by new event
    //Event passed is from side menu click 
    if(event) {    
        event.stopPropagation();
        updateContent(event.target, "Classes")
    }

        divCreate.innerHTML = '<div class="card card-primary"><div class="card-body p-0"><!-- THE CALENDAR --><div id="calendar"></div>'
                        +  '</div><!-- /.card-body --></div>';

        contentField.appendChild(divCreate);


        //////////////////////
        ajaxCall('admin/classes').then(resolve => {

            var calendarEl = document.getElementById('calendar');

            var dbEvents = []

            resolve.forEach(gymClass => {
                
                dbEvents.push({
                    id: gymClass.class_id,
                    title: gymClass.class_name,
                    start: gymClass.class_date,
                    extendedProps:{},
                    class_slots_avail: gymClass.class_slots_avail,
                    class_slots_booked: gymClass.class_slots_booked,
                    class_price: gymClass.class_reg_price,
                    backgroundColor: '#f56954', //red
                    borderColor    : '#f56954', //red
                    allday: true        
                })
            });

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
                header    : {
                left  : 'prev,next today',
                center: 'title',
                right : 'dayGridMonth,timeGridWeek,timeGridDay',
                // unselect: true
                },
                'themeSystem': 'bootstrap',
                
                //Pass events to calendar
                events    : dbEvents,

   

////////////////////////// FUCK
                eventClick: function(info) {

                    info.el.style.borderColor = 'red';

                    //Launch modal to display class info

                        $("#view-class-name").text(info.event.title)
                        //Convert time into date obj.

                        var currClTi = new Date(info.event.start)
                        //Get mins
                        var currMins = currClTi.getMinutes()
                        //Get hours
                        var currHours = currClTi.getHours()
                        // currHours = "0" += currHours
                        // alert('HOurs are ' + currHours)

                        if(currHours < 10) {
                            currHours = "0" + currHours
                            // alert('CUR HOURS LESS')
                            // alert(typeof(currHours))
                        }

                        // alert('HOurs now are ' + currHours)

                        // Set and hide ID in span so can be extracted                        
                        $('#class-id').text(info.event.id).hide()

                        // $("#edit-class-time").val(currHours + ":" + currMins)

                        $("#view-class-date").text(info.event.start.toDateString())


                        $("#view-class-time").text(currHours + ":" + currMins)
                        $("#view-class-price").text(info.event.extendedProps.class_price)
                        $("#view-class-avail").text(info.event.extendedProps.class_slots_avail)
                        $("#view-class-booked").text(info.event.extendedProps.class_slots_booked)

                        let editOptions = $(".display-class-modal-footer")

                        if(new Date() > info.event.start) {
                            editOptions.hide()
                        }
                        else {
                            editOptions.show() 
                        }

                        $('#display-class').modal()

                    // Display edit modal
                    $("#launch-edit-modal").click(function(){ 
                        
                        $('#edit-class-date-display').text(info.event.start.toDateString())
                        $('#edit-class-name').text(info.event.title)
                        $('#edit-class-bookings').text(info.event.extendedProps.class_slots_booked)
                        $("#edit-class-time").val(currHours + ":" + currMins)
                        //Hidden fields
                        $('#date-hidden').val(info.event.start)
                        $('#class-hidden').val(info.event.id)

                        $('#edit-class-price').val(info.event.extendedProps.class_price)
                        $('#edit-class-slots').val(info.event.extendedProps.class_slots_avail)

                        $('#class-hidden').val(info.event.id)

                       $('#edit-class').modal()

                    })                                 
                    
                },                


                dateClick: function(info) {

                    if(!info.dayEl.classList.contains('fc-past')){

                        // Add title to modal
                       let modalTitle = $('#modal-title-add-class').text('Add Class')

                         // Display modal - this is set to hide after class is added
                        $(".modal-calendar-body").show()

                        //Display date in modal
                        $('#class-date-display').text(info.dateStr)
                        //Add date to form field
                        console.log('string date is ' + info.dateStr)
                        // Display class date in modal
                        $('#class-date').val(info.dateStr)

                        
                    $('#add-class').modal()
                    // change the day's background color just for fun
                    info.dayEl.style.backgroundColor = 'red';
                    }
                },

// Possible place for new code if using global vars
              

            }
          
          
          );

          calendar.render();                
        
        })


// NEW CODE  

  
}


$('#add-edit-button').text("Create").click(function(event){
    event.preventDefault()
    // console.log(classDets)

    //Display class date in modal
    let classTime = $('#modal-class-time').val();
    console.log(classTime)

    //Concat date and time
    let classDate = $('#class-date').val($('#class-date').val()+ " " + classTime); 
    
    //Get class name to be passed for event display
    let className = $("#modal-class-name").val()
    
    //get form data
    let formDets = document.getElementById("add-class-form");
    //Set as FormData
    let classDets = new FormData(formDets);

    console.log(classDets)

    //Send Ajax request
    $.ajax("admin/classes", {
        type: "POST",
        headers: {'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')},
        data: classDets,
        processData: false,
        contentType: false,
        success: function(){
            // $('#add-edit-button').unbind()
            console.log('booking added')
            console.log('date is ' + $('#class-date').val())
            formDets.reset()          

           
            $('#modal-title-add-class').text("Class added!")
            $(".modal-calendar-body").hide(); 
            getCalendar();                                  

                           },
        error: function(){alert("Failed response received")
        $('#add-edit-button').unbind()},                              
    });
})


// Delete class conf modal
var deleteClassConf = document.getElementById('launch-delete-modal')
deleteClassConf.addEventListener('click', function(){

                    // Get num of bookings
                    let slotsBook = $('#view-class-booked').text();

                    //Show warning if slots booked
                    if (slotsBook > 0) {
                        $('#slots-conf').text(slotsBook + " slots booked!")
                        $('#slots-conf').show()                        
                    }
                    else {
                        $('#slots-conf').hide()
                    }

                    // Show modal
                    $('#delete-confirm-modal').modal()
})


// Send delete request on btn click
var deleteConBtn = document.getElementById('delete-conf-btn')
deleteConBtn.addEventListener('click', function() {
    
    // Get class ID 
    // alert('class Id is ' +  $('#class-id').text())

    // Send Ajax

    $.ajax("admin/classes", {
        type: "DELETE",
        headers: {'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')},
        data: {classId: $('#class-id').text()},
        // processData: false,
        // contentType: false,
        success: function(){

            // console.log('booking DELETED')
            $('#class-deleted-conf').modal()                               
            getCalendar();
                           },
        error: function(){alert("Failed response received")
    },                              
    });


    // Will need to add user admin

})




    
var updateBtn = document.getElementById("edit-update-button")

    updateBtn.addEventListener('click', function(event){

        //Extract data as globals so can be accessed by click event
        //Somehow pass data to event

        event.preventDefault()
     
        // Get new time value from form
        var newTimeInp = $("#edit-class-time").val()

             // alert("Pre-change time is " + info.event.start)

        //Select new hours
        var newHours = newTimeInp.slice(0,2)
            // alert("Hours - " + newHours)

        //Select new Mins
        var newMins =  newTimeInp.slice(3,5)
            // alert("Mins - " + newMins)

        //New Date Object to modify
        newClassTime = new Date($('#date-hidden').val())

        //Update hours
        newClassTime.setHours(newHours)
            // alert("Check hours - " + newClassTime)

        //Update mins
        newClassTime.setMinutes(newMins)
            // alert("Check Mins - " + newClassTime)
        
        //Get new price
        var newPrice = $("#edit-class-price").val()

            //  alert("New price is " + newPrice)

        //Get new slots

        var newSlots = $("#edit-class-slots").val()

        // alert("New slots are " + newSlots)

        var classID = $('#class-hidden').val()

        alert("Class ID is " + classID)

        var modDate = moment(newClassTime).format("YYYY-MM-DD HH:mm:ss")

        var updatedDets = JSON.stringify({classTime: modDate, classPrice: newPrice, slots: newSlots, classId: classID})


        $.ajax("admin/classes", {
            type: "PUT",
            headers: {'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')},
            data: updatedDets,
            processData: false,
            contentType: "application/json",
            success: function(){
                // $("#edit-update-button").unbind()

                // alert('sugoi')

                getCalendar();

            },
            
            error: function(){alert("Failed response received")
            // $('#edit-update-button').unbind()
        },                              
        });


        
        event.preventDefault()
        
    })













