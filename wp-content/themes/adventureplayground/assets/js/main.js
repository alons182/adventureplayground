;(function($){

  var btnMenu = $('#btn-menu'),
      menu = $('.header__menu');
     
      // CUSTOM FORM ELEMENTS
      //$('input[type=radio], input[type=checkbox],input[type=number], select').uniform();
    
      //new WOW().init();
      
       btnMenu.on('click', function(){
            menu.toggle();
           
        });

      /*menuContainer.hoverIntent({
        over: function() {
              menu.slideDown(200);
            },
        out:  function() {
              menu.slideUp(200);
            }
       // timeout: 50

      });*/

    // SMOOTH ANCHOR SCROLLING
    var $root = $('html, body');
    $('a.anchor').click(function(e) {
        var href = $.attr(this, 'href');
        if (typeof($(href)) != 'undefined' && $(href).length > 0) {
            var anchor = '';

            if (href.indexOf("#") != -1) {
                anchor = href.substring(href.lastIndexOf("#"));
            }

            if (anchor.length > 0) {
                console.log($(anchor).offset().top);
                console.log(anchor);
                $root.animate({
                    scrollTop: $(anchor).offset().top
                }, 500, function() {
                    window.location.hash = anchor;
                });
                e.preventDefault();
            }
        }
    });

   
   // Forms with ajax process
    $('form[data-remote]').on('submit', function(e){
        var form =$(this);
        var method = form.find('input[name="_method"]').val() || 'POST';
        var url = form.prop('action');
        form.find('.loader').show();
        $.ajax({
            type: method,
            url: url,
            data: form.serialize(),
            success: function(){
                var message = form.data('remote-success-message');
                form.find('.loader').hide();
                if(message)
                {

                    $('.response').removeClass('message-error').addClass('message-success').html(message).fadeIn(300).delay(4500).fadeOut(300);
                }
            },
            error:function(){
                form.find('.loader').hide();
                $('.response').removeClass('message-success').addClass('message-error').html('Whoops, looks like something went wrong.').fadeIn(300).delay(4500).fadeOut(300);

            }
        });

        limpiaForm(form);

        e.preventDefault();
    });

    $('input[data-confirm], button[data-confirm]').on('click', function(e){
       var input = $(this);

        input.prop('disabled','disabled');

        if(! confirm(input.data('confirm'))){
            e.preventDefault();
        }
    });

    function limpiaForm(miForm) {

        // recorremos todos los campos que tiene el formulario
        $(":input", miForm).each(function() {
            var type = this.type;
            var tag = this.tagName.toLowerCase();
            //limpiamos los valores de los campos…
            if (type == 'text' || type == 'password'  || type == 'email' || tag == 'textarea')
                this.value = "";
            // excepto de los checkboxes y radios, le quitamos el checked
            // pero su valor no debe ser cambiado
            else if (type == 'checkbox' || type == 'radio')
                this.checked = false;
            // los selects le ponesmos el indice a -
            else if (tag == 'select')
                this.selectedIndex = -1;
        });
    }

    // FUNCTION FOR RIGGING
    rigging = $('.rigging-projects');
    dd = rigging.find('dd');
    dt = rigging.find('dt');
    
    dd.addClass('hidden');

    rigging.on('click','dt', function (e) {
        dt.removeClass('active')
        $(this).addClass('active')
            .next()
            .slideDown(200)
            .siblings('dd')
            .slideUp(200);

    });

    // MAP
    map_container = $('.map__container');

    map_container.on('click','.map__label-country', function (e) {
           console.log($(this).data('country'));
            map_container.find('.map__country').hide();
           map_container.find('div[data-'+ $(this).data('country')+']').show(); 

        });
    map_container.on('click','.map__close', function (e) {
           
            map_container.find('.map__country').hide();


    });

    $('.map__label-province').magnificPopup({

        type:'inline',
        midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = this.st.el.attr('data-effect');
                var post_id = this.st.el.attr('data-project');

                $.ajax({
                      type: 'GET',
                      url: '/adventureplayground/api/get_post/?post_id='+ post_id +'&post_type=projects',
                      
                      success: function(data){
                         console.log(data)
                          $('div[data-project="'+ post_id +'"]').find('.content-project').html(data.post.content).prepend('<h1>'+ data.post.title + '</h1>');
                      },
                      error:function(){
                         $('div[data-project="'+ post_id +'"]').find('.content-project').html('<p>Ohh Error</p>');
                      }
                  });
            }

        }
    });
      
      
      

    //$(".chosen-select").chosen();
    
    //SCROLL WINDOW FUNCTIONALITY

    /*$(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
              $('.header').addClass("header--fixed");
          } else {
              $('.header').removeClass("header--fixed");
          }
      });

    

    $(window).load(function() {
     
     
      resizes();

    });

    $(window).resize(resizes);

    function resizes()
     {
      
      
        if(getWindowWidth() > 1023){
          $(".main__featured").mCustomScrollbar();
        }
        console.log($(".main__featured__top img").height()-68)
        if($(".main__featured__top img").height()-68 < 400) 
            $('.main__featured__top').height( $(".main__featured__top img").height()-68  ) ;
        else
            $('.main__featured__top').height(400);
          
        if($(".main__banner img").height() < $(".main__banner").height())
        {

          $('.main__banner').height($(".main__banner img").height());
          $('.main__featured').height($(".main__banner img").height());
        }
        else
        {
          $('.main__banner').height(getWindowHeight());
        
          $('.main__featured').height(getWindowHeight());
        } 
          
      

     }*/






})(jQuery);


function getScrollerWidth() {
  var scr = null;
  var inn = null;
  var wNoScroll = 0;
  var wScroll = 0;

  // Outer scrolling div
  scr = document.createElement('div');
  scr.style.position = 'absolute';
  scr.style.top = '-1000px';
  scr.style.left = '-1000px';
  scr.style.width = '100px';
  scr.style.height = '50px';
  // Start with no scrollbar
  scr.style.overflow = 'hidden';

  // Inner content div
  inn = document.createElement('div');
  inn.style.width = '100%';
  inn.style.height = '200px';

  // Put the inner div in the scrolling div
  scr.appendChild(inn);
  // Append the scrolling div to the doc
  document.body.appendChild(scr);

  // Width of the inner div sans scrollbar
  wNoScroll = inn.offsetWidth;
  // Add the scrollbar
  scr.style.overflow = 'auto';
  // Width of the inner div width scrollbar
  wScroll = inn.offsetWidth;

  // Remove the scrolling div from the doc
  document.body.removeChild(
    document.body.lastChild);

  // Pixel width of the scroller
  return (wNoScroll - wScroll);
}

function getWindowHeight() {
  var windowHeight=0;
  if (typeof(window.innerHeight)=='number') {
    windowHeight=window.innerHeight;
  } else {
    if (document.documentElement && document.documentElement.clientHeight) {
      windowHeight = document.documentElement.clientHeight;
    } else {
      if (document.body && document.body.clientHeight) {
        windowHeight=document.body.clientHeight;
      }
    }
  }
  return windowHeight;
}

function getWindowWidth() {
  var windowWidth=0;
  if (typeof(window.innerWidth)=='number') {
    windowWidth=window.innerWidth;
  } else {
    if (document.documentElement && document.documentElement.clientWidth) {
      windowWidth = document.documentElement.clientWidth;
    } else {
      if (document.body && document.body.clientWidth) {
        windowWidth=document.body.clientWidth;
      }
    }
  }
  return windowWidth;
}

