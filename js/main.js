const btn_arrow = document.querySelectorAll(".content_main-carrucel svg"),
content_carrucel = document.querySelector(".content_carrucel"),
content_carrucel_all = document.querySelectorAll(".content_carrucel"),
card_width = content_carrucel.querySelector(".card").offsetWidth;

content_carrucel_all.forEach( space =>{

    space.addEventListener("mousemove", () =>{
    
        const dragging = (e) =>{
            space.scrollLeft = e.pageX;
        }
        
        space.addEventListener("mousemove", dragging);
        
    })



})

btn_arrow.forEach(btn =>{

    btn.addEventListener("click", () =>{
        let btn_direction = btn.getAttribute("btn_direction"),
        padre = btn.parentNode,
        hijo = padre.querySelector('ul');
        console.log(hijo);
        hijo.scrollLeft += btn_direction === "left" ? -card_width : card_width;
    })

});
    


