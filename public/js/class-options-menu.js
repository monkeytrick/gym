window.onload = function(){
        //Get options
        const classOpts = document.querySelectorAll('.class-options');

        // Get classes displayed
        var classesDisp = document.querySelectorAll('.event_box')

        // Loop through options to add event listeners
        classOpts.forEach(option => {

                var selected = null;
                // Set event listener and function
                option.addEventListener('click', (event)=>{                       

                        selected = event.srcElement.innerText
                        // alert('selected class name is ' + selected)

                        // Loop through classes and check name against that selected
                        classesDisp.forEach(classShow => {
                                
                                // Display all classes
                                if(selected == "All Classes") {
                                        classShow.hidden = false;   
                                        // console.log("IT IS KEPT") 
                                }
                                // Display only selected classes
                                else if(classShow.children[1].firstElementChild.innerText !== selected){
                                        //show 
                                        classShow.hidden = true;
                                        // console.log(event)
                                        // console.log(event.srcElement.innerText)
                                        // console.log(selected)
                                }
                                
                                // Needed to re-set formerly hidden classes
                                else {
                                        classShow.hidden = false;
                                        console.log(selected)
                                        // console.log(event.srcElement.innerText)
                                        // console.log(event)
                                }                              
                                
                        });
                })            


        });
}

