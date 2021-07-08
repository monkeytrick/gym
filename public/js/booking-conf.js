
    let bookingLinks = document.getElementsByClassName('book-class')
    let bookLinksArr = Array.from(bookingLinks);
    bookLinksArr.forEach(link => link.addEventListener('click', ()=> {
        // alert(link.dataset.class)
       document.getElementById('modal-class-name')
      .innerText = "Class: "  + link.dataset.class;

      document.getElementById('modal-class-date')
      .innerText = "Date: "  + link.dataset.date;

      document.getElementById('modal-class-time')
      .innerText = "Time: "  + link.dataset.time;

      document.getElementById('modal-class-price')
      .innerText = "Price: ¥"  + link.dataset.price;

      document.getElementById('class-id')
      .value = link.dataset.id;
    }))
