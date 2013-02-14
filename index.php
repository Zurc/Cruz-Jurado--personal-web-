<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>Prueba Web Cruz</title>
    
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="main.css" rel="stylesheet" type="text/css">
    
    <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Advent+Pro:300,400' rel='stylesheet' type='text/css'>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="assets/js/responsiveslides.min.js"></script>
    <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      $("#slider_wd").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
        
</head>

<body>

	<header>
    	<h1 >
        	<a title="Cruz-Jurado" href="index.php">
            	Cruz Jurado
            </a>
        </h1>
        <h2>
        	<a title="Creativity-at-your-service" href="index.php">
            	Creativity at your service
            </a>
         </h2>
    </header>  
               
    <nav>
          <ul>
              <li>
                  <a href="web_design.php" alt="web design">Web Design</a>
                 </li>
              <li>
                  <a href="front_end.php" alt="front end developer">Front End</a>
                 </li>
              <li>
                  <a href="ux_ui.php" alt="user experience / user interface">UX/UI</a>
                 </li>           
              <li>
                  <a href="illust.php" alt="illustrator">Illustration</a>
                 </li>
    <!--          <li>
                </li>
              ...   
    -->             
             </ul>
    </nav> 
