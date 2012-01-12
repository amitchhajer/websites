
var Synapse = {
curMenu: null,
menuTimer : null,
setup : function(e) {
    $('#gallery-internal').gallery({ Delay: 2000 });


/*    var pth = $('#path').html();
    var initial = null;
    if( pth ) {
        initial = jQuery.map( pth.split('/'), function(val) {
                // split by spaces
                return jQuery.map( val.split(' '), function(word) {
                    return word[0].toUpperCase()+word.substring(1);
                } ).join(' ');
        });
    }*/

    $('#news-scroll-internal').jCarouselLite( {
        vertical: true
      , speed: 1500
      , auto : true
      , visible : 2
    });


    $('#sponsors-scroll-internal').show();
    $('#sponsors-scroll-internal').gallery( { Delay: 2000 } );

    //Synapse.menu(initial);
    //Synapse.menu1();

    $('ul#navigation').superfish( {
        dropShadows: false
    });
    Synapse.genToc();
},

genToc : function() {
    // insert overview
    $('#main-content h1').after("<h2>Overview</h2>");
    var headings = $('#main-content h2');

    if( headings.length == 0 )
        return;

    $('#main-content h2').prev().nextAll().hide();

    $('#main-content h1').before('<div id="toc"></div>');

    headings.each( function( i, val ) {
            var anchor = $('<a class="tab"></a>');
            $(anchor).append($(val).text());
            $('#toc').append(anchor);
            $(anchor).bind( 'click', {header: $(val)}, Synapse.showSection );
    });

    $($('#toc a')[0]).click();
    // now remove content "Overview" of first h2
    $('#main-content h2:first').text("");

},

showSection : function(e) {
    /*
     * Thanks to tvanfosson - http://stackoverflow.com/questions/1079938/jquery-nextall-click-on-h-element-toggles-all-p-elements-until-next-h
     */
    $('#toc a').removeClass("activetab");
    $(this).addClass("activetab");
    $('#main-content h1').nextAll().hide();
    e.data.header.toggle();
    e.data.header.nextAll().each( function() {
        if( $(this).filter('h2').length ) {
            return false;
        }
        $(this).filter('*').toggle();
    });
},

menu : function(initial) {
    $('#navigation').prepend("<p id=\"back\">Go</p>");
    $('#navigation li ul').hide();

    $('#navigation').find('span').click( function() {
        Synapse.curMenu = $(this).parent();
        var uls = $(this).parent().children('ul');
        var self = this;
        $(self).parent().siblings('li').slideToggle(1000);// 1000, function() {
            //$(self).parent().find('li ul').hide();
            //$(self).parent().siblings('li').slideToggle();
            uls.slideToggle(1000);
            //$(self).slideToggle();
    });

    $('#back').click( function() {
        if( Synapse.curMenu ) {
            Synapse.curMenu.children('span').click()
        }
    } );

    var start = $('#navigation');
    $.fx.off = true;
    $(initial).each( function(i, val) {
            var c = start.children(':contains("'+val+'")');
            if( c ) {
                c.children('span').click();
                start = c;
            }
    });
    $.fx.off = false;

},

menu1 : function() {
    $('#navigation *').hover( function() {
        if( Synapse.menuTimer ) {
            clearTimeout( Synapse.menuTimer );
            Synapse.menuTimer = null;
        }
    },
    function() {
        if( Synapse.menuTimer == null )
            Synapse.menuTimer = setTimeout( function() {
                $('#navigation li ul').fadeOut();
                $('#navigation').find('li').removeClass('active');
            }, 2000);
    });

    $('#navigation li ul').hide();
    $('#navigation li ul li ul').hide();
    $('#navigation').find('li').click( function(e) {
            e.stopPropagation();
            $(this).find('ul').toggle();
            $(this).toggleClass('active');
            $(this).siblings().removeClass('active');
            $(this).find('ul li ul').hide();
            $(this).siblings().find('ul').hide();
    });
}

};

$(document).ready( Synapse.setup );