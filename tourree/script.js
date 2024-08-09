// let menu=document.querySelector('#menu-btn');
// let navbar=document.querySelector('.header .nvabar');
// menu.onclick = ()=>{
//     menu.classList.toggle('fa-times');
//     navabar.classList.toggle('active');

// };

// window.onscroll = () =>{
//     menu.classList.remove('fa-times');
//     navabar.classList.remove('active');
// };

// var swiper = new Swiper(".home-slider", {
//     loop:true,
//     navigation: {
//       nextEl: ".swiper-button-next",
//       prevEl: ".swiper-button-prev",
//     },
//   });

//   var swiper = new Swiper(".reviews-slider", {
//     loop: true,
//     spaceBetween: 20,
//     autoHeight: true,
//     grabCursor: true,
//     breakpoints: {
//         640: {
//             slidesPerView: 1,
//         },
//         768: {
//             slidesPerView: 2,
//         },
//         1024: {
//             slidesPerView: 3,
//         },
//     },
// });














//   let loadMoreBtn =document.querySelector('.packages .load-more .btn');
//   let currentItem=3;


//   loadMoreBtn.onclick = () =>{
//     let boxes =[...document.querySelectorAll('.packages .box-container .box')];
//     for(var i=currentItem; i< currentItem+3; i++){
//       boxes[i].style.display ='inline-block';

//     };
//     currentItem +=3;
//     if(currentItem >=boxes.length){
//       loadMoreBtn.style.display = 'none';
//     }
//   }



// Toggle menu and navbar active class on click






document.addEventListener("DOMContentLoaded", function() {
  // Your JavaScript code here

  let menu = document.querySelector('#menu-btn');
  let navbar = document.querySelector('.header .navbar');

  menu.onclick = () => {
      menu.classList.toggle('fa-times');
      navbar.classList.toggle('active');
  };

  // Remove active classes on scroll
  window.onscroll = () => {
      menu.classList.remove('fa-times');
      navbar.classList.remove('active');
  };

  // Initialize Swiper for home slider
  var homeSwiper = new Swiper(".home-slider", {
      loop: true,
      navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
      },
  });

  // Initialize Swiper for reviews slider
  var reviewsSwiper = new Swiper(".reviews-slider", {
      loop: true,
      spaceBetween: 20,
      autoHeight: true,
      grabCursor: true,
      breakpoints: {
          640: {
              slidesPerView: 1,
          },
          768: {
              slidesPerView: 2,
          },
          1024: {
              slidesPerView: 3,
          },
      },
  });

  // Load more items functionality
  let loadMoreBtn = document.querySelector('.packages .load-more .btn');
  let currentItem = 3;

  loadMoreBtn.onclick = () => {
      let boxes = document.querySelectorAll('.packages .box-container .box');
      for (let i = currentItem; i < currentItem + 3; i++) {
          if (boxes[i]) {
              boxes[i].style.display = 'inline-block';
          }
      }
      currentItem += 3;
      if (currentItem >= boxes.length) {
          loadMoreBtn.style.display = 'none';
      }
  };
});
