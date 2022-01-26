let mouseCursor = document.querySelector(".cursor");

window.addEventListener('mousemove', cursor);//suit les mouvement de la souris

function cursor(e) {
    mouseCursor.style.top = e.pageY + 'px';
    mouseCursor.style.left = e.pageX + 'px';
}

//Cursor growing  when is on <li></li>, add class="link-grow", grossis le curseur mais pas utile pour le moment.
let navLinks = document.querySelectorAll(".nav-links li");

navLinks.forEach(link => {
    link.addEventListener('mouseover',()=>{
        mouseCursor.classList.add("link-grow");
        link.classList.add("hovered-link");
    });
    link.addEventListener('mouseleave',()=>{
        mouseCursor.classList.remove("link-grow");
        link.classList.remove("hovered-link");
    });
});