export default {
  init() {
    // JavaScript to be fired on all pages
    ///////////////// PRELOAD FUNCTION

    window.addEventListener('load', () => {
      const preload = document.querySelector('.preload');
      preload.classList.add('preload-finish');
      console.log(preload)

    });
    //////// Hamburger MENU

    var hamburger = document.querySelector('.fa-bars');
    var nav = document.querySelector('.banner_menu');
    
    
    

    hamburger.addEventListener('click', function() {
      console.log(nav);
      nav.classList.toggle('open');
      console.log('openopen');
    });
   
    
    

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    
  },
};
