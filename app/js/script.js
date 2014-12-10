// ====================
// Likes Check Function
// ====================
function likeCheck(){

    window.fbAsyncInit = function() {
        FB.init({
            appId      : 'YOUR_APP_ID', // App ID
            channelUrl : 'YOUR_APP_URL', // Channel File
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
        });
        //FB.Canvas.setAutoResize();

        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
            
            	var user_id = response.authResponse.userID;
            	
            	// Replace with your page ID, to check got to http://graph.facebook.com/YOUR_PAGE_NAME
            	var page_id = 'YOUR_APP_ID';
            	var fql_query = "SELECT uid FROM page_fan WHERE page_id=" + page_id + " and uid=" + user_id;
            	
            	FB.api('/me', function(response) {
        	    	console.log(response.name);
        	    	// Pull FB data
                    $('.fbname').text(response.name);
                    $('.fbimg').append('<img src="http://graph.facebook.com/'+response.id+'/picture" alt="Avatar" />');
        		});
            }
        });

    };
    (function(d){
        var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement('script'); js.id = id; js.async = true;
        js.src = "//connect.facebook.net/en_US/all.js";
        ref.parentNode.insertBefore(js, ref);
    }(document));
}

// Boxed navigation autowidth
function autoWidth(){
    var total = $('ul.boxed li').length;
    var size = 100/total;
    $('.boxed a').css('width', size+'%')
}

// ======================
// Single Page Navigation
// ======================
function singlePage(){
    // Navigation
    $('article.panel').hide();
    $('article.panel').eq(0).show();
    $('header .nav a').not('header .nav li:last-child a').on('click',function(){
    
        var now = $(this).parent().index();

        $('header .nav a').removeClass('active');
        $(this).addClass('active');

        $('article.panel').hide();
        $('article.panel').eq(now).fadeIn();

        // Nanoscroller
        $(".nano").nanoScroller();

        // Collapsable 
        $(".collapse").collapse();

    });
}

// ======================
// Multiple Page Function
// ======================
function multiplePage(){

	$('header li.like a').addClass('active');
		
    var filename = location.pathname.substr(location.pathname.lastIndexOf("/")+1,location.pathname.length);

    $('header .nav').find('a[href$="'+filename+'"]').addClass('active');

    // Nanoscroller
    $(".nano").nanoScroller();

    // Collapsable 
    $(".collapse").collapse();
}

// Inital Load
$(function(){   

	// Activate last nav
	$('header li.like a').addClass('active');

    // Fancybox
    $('a.fancy').fancybox({'titlePosition' : 'inside'});
    $('a.fancy.launch').fancybox({'modal' : 'true', 'margin' : 0, 'padding' : 0});
    $('a.fancy.iframe').fancybox({ 'type' : 'iframe', 'titlePosition'   : 'inside'});

    $('#filter a').on('click',function(){
        $('#filter a').removeClass('active');
        $(this).addClass('active');
    })

    autoWidth();

    // Pull facebook data
    likeCheck();

    //Comment out page type function that you are not using
    singlePage(); 
    //multiplePage(); 
});