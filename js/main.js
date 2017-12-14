
$('.m-nav-toggle').click(function(a){
    a.preventDefault();
    $('.menu').toggleClass('is-open')
    });
    $(document).ready(function(){

    	$(window).scroll(function() {
    	  	if ($(document).scrollTop() > 50) {
    	  		$('nav').removeClass('navbar-perso');
    	    	$('nav').addClass('shrink');
    	  	};
            if ($(document).scrollTop()<51){
    	    	$('nav').removeClass('shrink');
    	    	$('nav').addClass('navbar-perso')
            };
            if ($(document).scrollTop() > 300) {
                $('#arrow').fadeIn("slow");
            };
            if ($(document).scrollTop() < 300) {
                $('#arrow').fadeOut("slow");
            };
    	  	if ($(document).scrollTop()>1200){
                circleHtml.animate(1);
                circleCss.animate(0.95);
                circleJs.animate(0.65);
                circlePhp.animate(0.75);
                circleJava.animate(0.9);
                circleC.animate(0.80);
                circlePython.animate(0.75);
                circleCaml.animate(0.35);
                circleBootstrap.animate(0.7);
                circleMeteor.animate(0.4);
                circleJquerry.animate(0.60);
                circleSql.animate(0.80);
                circleNosql.animate(0.35);
                circleUml.animate(0.65);
                circleSuiteOffice.animate(0.95);
                circleSuiteAdobe.animate(0.50);
            }
     	});

        $(".border").animate({
            opacity: '1'
        },800);




    	var testing = "";
        var bool = true;


    	var circleHtml = new ProgressBar.Circle('#html', {
            color: '#012B5A',
            duration: 3000,
            easing: 'easeInOut'
        });

        circleHtml.setText("HTML5");

        var circleCss = new ProgressBar.Circle('#css', {
            color: '#012B5A',
            duration: 3000,
            easing: 'easeInOut'
        });

        circleCss.setText("CSS3");

        var circleJs = new ProgressBar.Circle('#javascript', {
            color: '#012B5A',
            duration: 3000,
            easing: 'easeInOut'
        });

        circleJs.setText("JavaScript");

        var circlePhp = new ProgressBar.Circle('#php', {
            color: '#012B5A',
            duration: 3000,
            easing: 'easeInOut'
        });

        circlePhp.setText("PHP");

        var circleJava = new ProgressBar.Circle('#java', {
            color: '#012B5A',
            duration: 3000,
            easing: 'easeInOut'
        });

        circleJava.setText("Java");

        var circleC = new ProgressBar.Circle('#cp', {
            color: '#012B5A',
            duration: 3000,
            easing: 'easeInOut'
        });

        circleC.setText("C++");

        var circlePython = new ProgressBar.Circle('#python', {
            color: '#012B5A',
            duration: 3000,
            easing: 'easeInOut'
        });

        circlePython.setText("Python");

        var circleCaml = new ProgressBar.Circle('#caml', {
            color: '#012B5A',
            duration: 3000,
            easing: 'easeInOut'
        });

        circleCaml.setText("Caml");

        var circleBootstrap = new ProgressBar.Circle('#bootstrap', {
            color: '#012B5A',
            duration: 3000,
            easing: 'easeInOut'
        });

        circleBootstrap.setText("Bootstrap");

        var circleMeteor = new ProgressBar.Circle('#meteor', {
            color: '#012B5A',
            duration: 3000,
            easing: 'easeInOut'
        });

        circleMeteor.setText("Meteor.js");

        var circleJquerry = new ProgressBar.Circle('#jquerry', {
            color: '#012B5A',
            duration: 3000,
            easing: 'easeInOut'
        });

        circleJquerry.setText("JQuerry");

        var circleSql = new ProgressBar.Circle('#sql', {
            color: '#012B5A',
            duration: 3000,
            easing: 'easeInOut'
        });

        circleSql.setText("SQL");

        var circleNosql = new ProgressBar.Circle('#nosql', {
            color: '#012B5A',
            duration: 3000,
            easing: 'easeInOut'
        });

        circleNosql.setText("NoSQL");

        var circleUml = new ProgressBar.Circle('#uml', {
            color: '#012B5A',
            duration: 3000,
            easing: 'easeInOut'
        });

        circleUml.setText("UML");

        var circleSuiteOffice = new ProgressBar.Circle('#suiteoffice', {
            color: '#012B5A',
            duration: 3000,
            easing: 'easeInOut'
        });

        circleSuiteOffice.setText("Suite Office");

        var circleSuiteAdobe = new ProgressBar.Circle('#suiteadobe', {
            color: '#012B5A',
            duration: 3000,
            easing: 'easeInOut'
        });

        circleSuiteAdobe.setText("Suite Adobe");

        $(".imgProjet1").hover(function(){
            $(".imgP1").css("opacity","0.05");
            $(".description1").fadeIn(0.5);
        },
        function(){
            $(".description1").fadeOut(0.5);
            $(".imgP1").css("opacity","1");
        });

        $(".imgProjet2").hover(function(){
            $(".imgP2").css("opacity","0.05");
            $(".description2").fadeIn(0.5);
        },
        function(){
            $(".description2").fadeOut(0.5);
            $(".imgP2").css("opacity","1");
        });

        $(".imgProjet3").hover(function(){
            $(".imgP3").css("opacity","0.05");
            $(".description3").fadeIn(0.5);
        },
        function(){
            $(".description3").fadeOut(0.5);
            $(".imgP3").css("opacity","1");
        });

        $(".imgProjet4").hover(function(){
            $(".imgP4").css("opacity","0.05");
            $(".description4").fadeIn(0.5);
        },
        function(){
            $(".description4").fadeOut(0.5);
            $(".imgP4").css("opacity","1");
        });

        $(".imgProjet5").hover(function(){
            $(".imgP5").css("opacity","0.05");
            $(".description5").fadeIn(0.5);
        },
        function(){
            $(".description5").fadeOut(0.5);
            $(".imgP5").css("opacity","1");
        });

        $(".imgProjet6").hover(function(){
            $(".imgP6").css("opacity","0.05");
            $(".description6").fadeIn(0.5);
        },
        function(){
            $(".description6").fadeOut(0.5);
            $(".imgP6").css("opacity","1");
        });

        $(".imgProjet7").hover(function(){
            $(".imgP7").css("opacity","0.05");
            $(".description7").fadeIn(0.5);
        },
        function(){
            $(".description7").fadeOut(0.5);
            $(".imgP7").css("opacity","1");
        });

        $(".imgProjet8").hover(function(){
            $(".imgP8").css("opacity","0.05");
            $(".description8").fadeIn(0.5);
        },
        function(){
            $(".description8").fadeOut(0.5);
            $(".imgP8").css("opacity","1");
        });

        $(".imgProjet9").hover(function(){
            $(".imgP9").css("opacity","0.05");
            $(".description9").fadeIn(0.5);
        },
        function(){
            $(".description9").fadeOut(0.5);
            $(".imgP9").css("opacity","1");
        });
    });
