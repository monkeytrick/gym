window.onload = function(){

    let cancelOpt = document.getElementsByClassName('cancel-option')

    let cancelOptLinks = Array.from(cancelOpt);

    cancelOptLinks.forEach(item => item.addEventListener('click', (e)=> {

        // Get and set modal inner text
        document.getElementById('cancelModalLabel')
        .innerText = "Are you sure you want to cancel?";

        document.getElementById('confirm-btn')
        .addEventListener('click', function() {

             // Pass event target to be parsed for ID and element to delete upon success
            ajaxReq(e)
        })

        // AJAX

        function ajaxReq(e) {

            // console.log('ID is ' + e.target.classList[1])

            let xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                    // console.log('booking canceleld')

                    //Change text in modal box to confirm cancel
                    document.getElementById('cancelModalLabel')
                    .innerText = "Booking cancelled"

                    //Remove submit button from modal
                    document.getElementById('confirm-btn').remove()

                    // Remove deleted booking <tr> from table
                    e.originalTarget.parentElement.parentElement.remove();

                }
            }

            // Get ID from target            
            let reqId = e.target.classList[1];

            xhttp.open("PUT", "/booking/" + reqId, true);
            xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            //get CSRF TOKEN / Add as HEADER
            let xToken =  document.querySelector('meta[name="csrf-token"]').content;
            xhttp.setRequestHeader("X-CSRF-Token", xToken)   
        
            xhttp.send();

        }

    })
    )
}

