window.onload = function() {

    let promise = new Promise(function(resolve, reject){

    let bookingsToday = null;
    let bookingsPast = null;
    let bookingsUpcoming = null;

    xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            // console.log('booking canceleld')
            console.log(this.responseText)

            createTableContent(JSON.parse(this.responseText))
            
        }
    }

    xhttp.open("GET", "/admin/bookings", true);

    xhttp.setRequestHeader('Content-Type', 'application/json');

    let xToken =  document.querySelector('meta[name="csrf-token"]').content;
    xhttp.setRequestHeader("X-CSRF-Token", xToken)   

    xhttp.send();

})

}


function createTableContent(bookingsData) {

    let currentTable = null;
    let currentTabNum = 0;
    let newTable = null;

    if(!bookingsData) {
        alert('error with data')
    }
    
    else if(bookingsData.past.length > 0) {

        //Assign data to iterate over with paginator
        bookingsPast = bookingsData.past;

        //Empty current table
        newTable = null;

        //Create table
        createTable("Previous Bookings", bookingsData.past)

    }

}

// Create table
function createTable(tableName, bookings) {

    // Newly created table needs to be attached to HTML element, as below. Cannot add stringHTML directly to Node
    var divCreate = document.createElement('div');


    divCreate.classList.add('col-12');

    let table = "<div class='card'><div class='card-header'>"
       + "<h3 class='card-title'>"+ tableName + "</h3>"
       + "</div>"
       + "<div class='card-body'>"
       + "<table id='example2' class='table table-bordered table-hover'>"
       +  "<thead>"
       +  "<tr>"
       +    "<th>Booking Ref</th>"
       +    "<th>Username</th>"
        +    "<th>Class Ref</th>"
        +    "<th>Class Name</th>"
        +   "<th>Date & Time</th>"
        +   "<th>Phone</th>"
        +   "<th>Delete</th>"
        + "</tr>"
        + "</thead>"
        + "<tbody>";


        //create tds
        let tds = "";

        for(i=0; i < 8; i++){
    
            tds += "<tr><td>" + bookings[i]['booking_id'] + "</td>"
            tds += "<td>" + bookings[i]['name'] + "</td>"
            tds += "<td>" + bookings[i]['class_id'] + "</td>"
            tds += "<td>" + bookings[i]['class_name'] + "</td>"
            tds += "<td>" + bookings[i]['class_date'] + "</td>"
            tds += "<td>" + bookings[i]['phone'] + "</td>" 
            //Replace with icon
            tds += "<td> X </td></tr>" 
            // tds += "<td>" + <i class="fas fa-trash"></i> + "</td></tr>"

        }
        //Close table                            
        tds += "<tbody></tfoot></table>"
        
        table += tds
        
        //Add paginator to card
        let paginat =  "<div class='row'>"
                      +     "<div class='col-12'>"
                      +         "<nav aria-label='Page navigation example'>"
                      +             "<ul class='pagination pagination-lg justify-content-center'>";

                        for(i=0; i < Math.ceil(bookings.length/8); i++) {
                            paginat += "<li class='page-item " + tableName + " " + [i] + "'" + "><a class='page-link' href='#'>" + [i + 1] + "</a></li>";
                        }

        paginat += "</ul></nav></div></div></div></div>"


       table += paginat

       divCreate.innerHTML = table
        
        var contentField = document.querySelector(".cont-display");

        contentField.appendChild(divCreate)

        createLinks();
}


// click events for paginator options
let createLinks = function() {

let pageLinks = document.getElementsByClassName('page-link')

let clickLinks = Array.from(pageLinks);

console.log(clickLinks)

clickLinks.forEach(link => {

    link.addEventListener('click', function(event){
        alert('link clicked for' + event.target.innerText)
    })

    
});
}           


