<meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>Zeina HTML5 Theme</title>
        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/ie-fixes.js"></script>
        <script type="text/javascript" src="js/_excanvas.compiled.js"></script>
        <link rel="stylesheet" href="css/ie-fixes.css">
        <![endif]-->
        <meta name="keywords" content="webmaster blogu, web tasarım dersleri, php oyun scriptleri, php dersleri, php scriptleri, SEO Dersleri" />
        <meta name="description" content="Güncel Webmaster Blogu. Bugsuz oyun scriptleri, Php ve Web Tasarım Dersleri, Seo Dersleri, Seo İpuçları" />
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--- This should placed first off all other scripts -->
        
             <link rel="stylesheet" href="css/font-awesome-ie7.css">
             <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
             <link rel="stylesheet" href="css/font-awesome.css">
             <link rel="stylesheet" href="css/font-awesome.min.css">
             <link rel="stylesheet" href="css/revolution_settings.css">
             <link rel="stylesheet" href="css/bootstrap.min.css">
             <link rel="stylesheet" href="css/eislider.css">
             <link rel="stylesheet" href="css/tipsy.css">
             <link rel="stylesheet" href="css/prettyPhoto.css">
             <link rel="stylesheet" href="css/isotop_animation.css">
             <link rel="stylesheet" href="css/animate.css">
             <link rel="stylesheet" href="css/flexslider.css">
             <link href='css/style.css' rel='stylesheet' type='text/css'> 
             <link href='css/responsive.css' rel='stylesheet' type='text/css'>
        
        <!--- Tema Skin -->
        
             <link href="css/skins/flat-blue.css" rel='stylesheet' type='text/css' id="skin-file">

        

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
        <script type="text/javascript" src="js/respond.js"></script>
<![endif]-->
        <link rel="stylesheet" href="css/color-chooser.css">

        
         	<style>

		body { 
			background: #eee; 
		}

		/*------------------------------*/

		#signup {
			width: 550px;
			height: 75%;
			margin: 0px auto 0px auto;
			padding: 20px;
			position: relative;

			border: 1px solid #ccc;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px; 
			border-radius: 3px;  
		}

		#signup::before, 
		#signup::after {
			content: "";
			position: absolute;
			bottom: -3px;
			left: 2px;
			right: 2px;
			top: 0;
			z-index: -1;
			background: #fff;
			border: 1px solid #ccc;			
		}

		#signup::after {
			left: 4px;
			right: 4px;
			bottom: -5px;
			z-index: -2;
			-moz-box-shadow: 0 8px 8px -5px rgba(0,0,0,.3);
			-webkit-box-shadow: 0 8px 8px -5px rgba(0,0,0,.3);
			box-shadow: 0 8px 8px -5px rgba(0,0,0,.3);
		}

		/*------------------------------*/

		#signup h1 {
			position: relative;
			font: italic 1em/3.5em 'trebuchet MS',Arial, Helvetica;
			color: #999;
			text-align: center;
			margin: 0 0 20px;
		}

		#signup h1::before,
		#signup h1::after{
			content:'';
			position: absolute;
			border: 1px solid rgba(0,0,0,.15);
			top: 10px;
			bottom: 10px;
			left: 0;
			right: 0;
		}

		#signup h1::after{
			top: 0;
			bottom: 0;
			left: 10px;
			right: 10px;
		}

		/*------------------------------*/

        ::-webkit-input-placeholder {
           color: #bbb;
        }
        
        :-moz-placeholder {
           color: #bbb;
        } 				    	

		.placeholder{
			color: #bbb; /* polyfill */
		}		

		#signup input{
			margin: 5px 0;
			padding: 15px;
			width: 100%;
			*width: 518px;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			border: 1px solid #ccc;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;	
		}

		#signup input:focus{
			outline: 0;
			border-color: #aaa;
			-moz-box-shadow: 0 2px 1px rgba(0, 0, 0, .3) inset;
			-webkit-box-shadow: 0 2px 1px rgba(0, 0, 0, .3) inset;
			box-shadow: 0 2px 1px rgba(0, 0, 0, .3) inset;
		}		

		#signup button{
			margin: 20px 0 0 0;
			padding: 15px 8px;			
			width: 100%;
			cursor: pointer;
			border: 1px solid #2493FF;
			overflow: visible;
			display: inline-block;
			color: #fff;
			font: bold 1.4em arial, helvetica;
			text-shadow: 0 -1px 0 rgba(0,0,0,.4);		  
			background-color: #2493ff;
			background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255,255,255,.5)), to(rgba(255,255,255,0)));
			background-image: -webkit-linear-gradient(top, rgba(255,255,255,.5), rgba(255,255,255,0));
			background-image: -moz-linear-gradient(top, rgba(255,255,255,.5), rgba(255,255,255,0));
			background-image: -ms-linear-gradient(top, rgba(255,255,255,.5), rgba(255,255,255,0));
			background-image: -o-linear-gradient(top, rgba(255,255,255,.5), rgba(255,255,255,0));
			background-image: linear-gradient(top, rgba(255,255,255,.5), rgba(255,255,255,0));
			-webkit-transition: background-color .2s ease-out;
			-moz-transition: background-color .2s ease-out;
			-ms-transition: background-color .2s ease-out; 
			-o-transition: background-color .2s ease-out;  
			transition: background-color .2s ease-out;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-moz-box-shadow:  0 2px 1px rgba(0, 0, 0, .3),
							  0 1px 0 rgba(255, 255, 255, .5) inset;
			-webkit-box-shadow: 0 2px 1px rgba(0, 0, 0, .3),
								0 1px 0 rgba(255, 255, 255, .5) inset;
			box-shadow: 0 2px 1px rgba(0, 0, 0, .3),
						0 1px 0 rgba(255, 255, 255, .5) inset;			  						  
		}

		#signup button:hover{
		  	background-color: #7cbfff;
            border-color: #7cbfff;
		}

		#signup button:active{
			position: relative;
			top: 3px;
			text-shadow: none;
			-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .3) inset;
			-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .3) inset;
			box-shadow: 0 1px 0 rgba(255, 255, 255, .3) inset;
		}

		/* ------------------------------------------------- */

		#about{
		    color: #999;
		    text-align: center;
		    font: 0.9em Arial, Helvetica;
		}

		#about a{
		    color: #777;
		}	
                
        #ustmenu input{
            
			margin: 5px 0;
			padding: 15px;
			width: 60%;
			*width: 518px;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			border: 1px solid #ccc;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;	
		}

		#ustmenu input:focus{
			outline: 0;
			border-color: #aaa;
			-moz-box-shadow: 0 2px 1px rgba(0, 0, 0, .3) inset;
			-webkit-box-shadow: 0 2px 1px rgba(0, 0, 0, .3) inset;
			box-shadow: 0 2px 1px rgba(0, 0, 0, .3) inset;
		}		 
                
        /* Üye resim ve bilgi div */
                
                
        .sag {
                    float:inherit;
                    margin-right:20px;
                    text-align:center;
                
                }
        .sol {
                    float:left;
                    margin-left:20px;
                }
        .ssdivici {
                    float:left;
                    margin-left:15%;
                }
	</style>    
        
    