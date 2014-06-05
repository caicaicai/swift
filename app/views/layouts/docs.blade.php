<?php
function is_active($name='')
{
    if (DOCS_VERSION===$name)
        return ' class="current"';
    else
        return '';
}
?>
<!doctype html>

<html lang="en">

<head>
    <title>Laravel - The PHP Framework For Web Artisans.</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
    <meta name="author" content="iKreativ">
    <meta name="description" content="Laravel - The PHP framework for web artisans.">
    <meta name="keywords" content="laravel, php, framework, web, artisans, taylor otwell">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png?v=2') }}">

    <!-- we're minifying and combining all our css -->
    <link href="{{ asset('/') }}assets/css/style.css" rel="stylesheet">

    <!-- grab jquery from google cdn. fall back to local if offline -->
    <script src="{{ asset('/') }}assets/js/jquery.js"></script>

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

<body id="index" class="page docs">

    <!-- wrapper -->
    <div id="wrapper">

        <!-- header -->
        <header id="header" role="header">
            <div class="boxed">
                <!-- tagline -->
                <div id="tagline">
                    <h1>
                        Power By developer.apple.com
                    </h1>
                </div>
                <!-- /tagline -->

                <!-- version -->
                <div id="version">
                    <ul class="nolist">
                        <li{{ is_active('swift') }}><a href="{{ url('docs/swift') }}" title="0.91.1">Swift</a></li>
                        <li{{ is_active('swift-cn') }}><a href="{{ url('docs/swift') }}" title="cn version">Swift-cn</a></li>
                    </ul>
                </div>
                <!-- /version -->
            </div>
        </header>
        <!-- /header -->

        <!-- nav -->
        <nav id="primary">
            <div class="boxed">
                <div id="logo-head">
                   <a href="{{ route('get /') }}"><img src="{{ asset('/') }}assets/img/developer.png" alt="Laravel" /></a>
                </div>
                <ul>
                    <li><a href="{{ route('get /') }}">Welcome</a></li>
                    <li class="current-item"><a href="docs" title="Documentation">Documentation</a></li>
                    <!-- <li><a href="{{ url('api') }}/{{ DOCS_VERSION }}" title="Laravel Framework API">API</a></li> -->
                    <!-- <li><a href="https://github.com/laravel/laravel" title="Github">Github</a></li> -->
                    <li><a href="http://forums.laravel.io/" title="Laravel Forums">Forums</a></li>
                    <li><a href="http://twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
                </ul>
            </div>
        </nav>
        <!-- /nav -->

        <!-- content -->
        <div id="content">

            <!-- docs -->
            <section id="documentation">
                <article class="boxed">

                    <!-- docs nav -->
                    <nav id="docs">
                        <!-- Pull table of contents -->
                        {{ $index }}
                    </nav>
                    <!-- /docs nav -->

                    <!-- docs content -->
                    <div id="docs-content">
                        {{ $contents }}
                    </div>
                    <!-- /docs content -->

                </article>
            </section>
            <!-- /docs -->

        </div>
        <!-- /content -->

        <!-- footer -->
        <footer id="foot" class="textcenter">
            <div class="boxed">

                <!-- nav -->
                <nav id="secondary">
                    <div id="logo-foot">
                       <!-- <a href="{{ route('get /') }}"><img src="{{ asset('/') }}assets/img/logo-foot.png" alt="Laravel" /></a> -->
                    </div>
                    <ul>
                        <li><a href="{{ route('get /') }}">Welcome</a></li>
                        <li class="current-item"><a href="docs" title="Documentation">Documentation</a></li>
                        <!-- <li><a href="api/{{ DOCS_VERSION }}" title="Laravel Framework API">API</a></li> -->
                        <!-- <li><a href="https://github.com/laravel/laravel" title="Github">Github</a></li> -->
                        <li><a href="http://forums.laravel.io/" title="Laravel Forums">Forums</a></li>
                        <li><a href="http://twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
                    </ul>
                </nav>
                <!-- /nav -->

            </div>
        </footer>
        <!-- /footer -->

        <!-- to the top -->
        <div id="top">
            <a href="#index" title="Back to the top">
                <i class="icon-chevron-up"></i>
            </a>
        </div>
        <!-- /to the top -->

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
