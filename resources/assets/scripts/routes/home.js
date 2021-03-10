export default {
  init() {
    // JavaScript to be fired on the home page
    ////////SPINNING IMAGE (FORM)
    var e = document.querySelector('.banner_img');
    var spin = false;

    var spinner = function () {
      e.classList.toggle('running', spin);
      if (spin) setTimeout(spinner, 2000);

    }

    e.onmouseover = function () {
      spin = true;
      spinner();
    };

    e.onmouseout = function () {
      spin = false;
    };
    console.log(inputs)
    ////////ROTATING IMAGE (FORM)
    var inputs = document.querySelectorAll('input');
    inputs.forEach(function (element) {
      element.addEventListener('focus', function() {
        e.classList.add('rotate');
        console.log('rOTATE');
        setTimeout(function(){ 
          e.classList.remove('rotate');
          console.log('ASDASDASD') ;
          }, 3000);
        });
        
      
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
