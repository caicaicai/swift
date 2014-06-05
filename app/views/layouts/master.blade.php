<!doctype html>

<html lang="en">

<head>
    <title>Swift Programming Language - Apple Developer</title>

    <!-- meta -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
    <meta name="author" content="iKreativ">
    <meta name="description" content="Laravel - The PHP framework for web artisans.">
    <meta name="keywords" content="laravel, php, framework, web, artisans, taylor otwell">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png?v=2') }}">

    <!-- we're minifying and combining all our css -->
    <link href="{{ asset('/') }}assets/css/style.css" rel="stylesheet">

    <!-- grab jquery from google cdn. fall back to local if offline -->
    <script src="{{ asset('/') }}assets/js/jquery-1.11.1.min.js"></script>

    <!-- prettyprint -->
    <script src="{{ asset('/') }}assets/js/run_prettify.js"></script>

    <!-- load up our js -->
    <script src="{{ asset('/') }}assets/js/plugins.js"></script>
    <script src="{{ asset('/') }}assets/js/application.js"></script>

    <!-- fonts -->
    <link href="{{ asset('/') }}assets/css/source-sans-pro-n3-i3-n4-i4-n6-i6-n7-i7.js.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/css/source-code-pro.js.css" rel="stylesheet">

    <!-- some conditionals for ie -->
    <!--[if IE]><link href="{{ asset('/') }}assets/css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->

    <!-- HTML5 elements in less than IE9, yes please! -->
    <!--[if lt IE 9]><script src="{{ asset('/') }}assets/js/html5.js"></script><![endif]-->

    <!-- If less than IE8 add some JS for the webfont icons -->
    <!--[if lt IE 8]><script src="{{ asset('/') }}assets/js/ie_font.js"></script><![endif]-->

    <!-- asynchronous google analytics. change UA-XXXXX-X to your site's ID -->
    <script>
        // var _gaq=[['_setAccount','UA-23865777-1'],['_trackPageview']];
        // (function(d,t){
        //     var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        //     g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        //     s.parentNode.insertBefore(g,s)
        // }(document,'script'));
    </script>
</head>

<body id="index" class="page home">

    <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6 -->
	<!--[if lt IE 7]>
		<p>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
	<![endif]-->

	<!-- wrapper -->
    <div id="wrapper">

    @yield('content')

    </div>
    <!-- /wrapper -->

    <!-- copyright -->
    <section id="copyright" class="textcenter">
        <div class="boxed">
            <div class="animated slideInLeft">本网站之资源取自互联网，网站内容皆用于网友学习交流之所用。如果网站内容涉及侵权请联系站长。 &copy; 版权所有 swift.xiaocaicai.com  2014-2099 </div>
        </div>
    </section>
    <!-- /copyright -->

</body>
</html>