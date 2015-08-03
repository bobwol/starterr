var tocSwiper = new Swiper('.swiper-container', { 
	slideElement:'article',
	slidesPerView: 3,
	resistance: '100%',
	roundLengths: true
});

// enquire
//     .register("screen and (min-width:20em) and (max-width:47em)", {

//         setup: function() {
//         },
//         match: function() {
//             // console.log('matched 20em');
//             goHorizontalSwipe();
            
//         },
//         unmatch: function() {
//             // console.log('un-matched 20em');
//         }

//     })
//     .register("screen and (min-width:48em)", {

//         setup: function() {
//         },
//         match: function() {
//             // console.log('matched 48em');
//             goVerticalSwipe();
//         },
//         unmatch: function() {
            
//         }

//     });
