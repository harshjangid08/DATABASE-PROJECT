let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.hrader .navbar');

menu.oneclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onescroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

let loadMoreBtn = document.querySelector('.packsges .load-more .btn')
let currentIem = 3

loadMoreBtn.oneclick= () =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for(var1 = currentIem; i< currentIem + 3, i+){
        boxes[i].style.display = 'inline-block';
    };
    currentIem += 3;
    if(currentIem >= boxes.length){
        loadMoreBtn.style.display = 'inline-block';
    }
}