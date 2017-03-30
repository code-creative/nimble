<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nimble</title>

    <link href="{template_path}css/bootstrap.min.css" rel="stylesheet">
    <link href="{template_path}css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="{template_path}css/application.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
	
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand" href="#">Nimble<sup>1.0.0</sup></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">      
						<ul class="nav navbar-nav navbar-right">
							<li><a href="./">Home</a></li>
							<li><a href="?/page/1">Page 1</a></li>
							<li><a href="?/page/2">Page 2</a></li>
						</ul>
            </div>
        </div>
    </nav>
	
		<script src="{template_path}js/jquery-3.2.0.min.js"></script>
		<script src="{template_path}js/bootstrap.min.js"></script>
		<script src="{template_path}js/moment.min.js"></script>


	
    <div class="container-fluid">
			<!-- MAIN CONTENT [START] -->
				{page_content}
			<!-- MAIN CONTENT [END] -->
        </div>
    </div>
	


</body>

</html>
