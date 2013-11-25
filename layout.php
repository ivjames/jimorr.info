<?php

function content($page) {
	include($page);
}

function head() { ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>JimOrr.info</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="icon" type="image/png" href="img/apple-touch-icon-precomposed.png" />

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootswatch/3.0.1/spacelab/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title"><a class="white" href=""><b>&nbsp;Jim</b>Orr<small>.info</small></a></h1>
                
                <nav>
                    <ul>
                        <li><a href="contact">Contact</a></li>
                        <li><a href="refs">References</a></li>
                        <li><a href="links">Links</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">
<? }


function aside() { ?>

<script type="text/javascript">
$(function() {
	console.log( "ready!" );
	var skillTags = {
		"PHP": "PHP SCripting Language",
		"HTML":"HyperText Markup Language",
		"CSS":"Cascading Style Sheets",
		"JQuery":"Javascript DOM Library",
		"MySQL":"MySQL Relational Database",
		"PostgreSQL":"PostgreSQL Relational Database",
		"REST":"REpresentational State Transfer",
		"API":"Application Programming Interface",
		"OOP":"Object-Oriented Programming",
		"GIT":"Version Control and Source Code Management",
		"CVS":"Concurrent Versioning System",
		"Bootstrap":"Mobile First Front-end Framework",
		"Backbone":"Library for MVC App Development in JS",
		"LAMP":"Linux, Apache, MySQL, PHP Stack",
		"Node":"Event-driven I/O Server-side JS Environment",
		"OSX":"Mac OSX Preferred",
		"CLI":"Command Line Interface Savvy",
		"Vi/Vim":"Robust CLI Text Editor",
		"PSD":"Adobe Photoshop",
		"AI":"Adobe Illustrator",
		"MS Office":"Microsoft Office and similar suites"
	};

	var skillList = '';
	$.each(skillTags, function(k,v) {
		skillList += '<abbr title="'+v+'" class="label label-info">'+k+'</abbr>\n';
	});
	$("#skillTags").html(skillList);
});
</script>
                <aside class="text-center">
                    <h3 class="white"><i class="fa fa-code"></i> <b>Skill Tags</b></h3>
                     <p id="skillTags">
                     </p>
                    
                    <h3 class="white"><i class="fa fa-road"></i> <b>Commute Range</b></h3>
                    <img src="img/commuterange.png" alt="Map of maximum desired commute range" class="img-responsive" onClick="$('#myModal').modal('toggle')" />
                    <!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title" id="myModalLabel">Maximum desired commute range</h4>
			      </div>
			      <div class="modal-body">
	                        <img src="img/commuterange.png" alt="Map of maximum desired commute range" class="img-responsive" />
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			
                    <h1>
                      <span class="label label-info black">
                        <i class="fa fa-linux fa-lg"></i>
                        <i class="fa fa-apple fa-lg"></i>
                        <i class="fa fa-git fa-lg"></i>
                        <i class="fa fa-html5 fa-lg"></i>
                        <i class="fa fa-css3 fa-lg"></i>
                        <i class="fa fa-stack-overflow fa-lg"></i>
                        <i class="fa fa-thumbs-o-up fa-lg"></i>
                      </span>
                    </h1>
                </aside>

<? }

function foot() { ?>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h2>Contact</h2>
                <ul class="list-inline">
                <li><a class="white" href="mailto:jim@jimorr.info">jim@jimorr.info</a></li>
                <li>909.851.2915</li>
                <li>Baldwin Park, CA</li>
                </ul>
            </footer>
        </div>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-619884-14', 'jimorr.info');
  ga('send', 'pageview');

</script>
    </body>
</html>
<? } ?>
