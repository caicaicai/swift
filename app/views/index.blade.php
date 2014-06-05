@extends('layouts.master')

@section('content')
<!-- header -->
<header id="header" role="header">
    <div class="boxed">
        <!-- tagline -->
        <div id="tagline" class="animated bounceInUp">
            <h1>Introducing Swift</h1>
            <h2>Swift is an innovative new programming language for Cocoa and Cocoa Touch. Writing code is interactive and fun, the syntax is concise yet expressive, and apps run lightning-fast. Swift is ready for your next iOS and OS X project — or for addition into your current app — because Swift code works side-by-side with Objective-C.</h2>
        </div>
        <!-- /tagline -->

        <!-- callto action -->
        <div id="callto" class="animated bounceInLeft">
            <a href="docs/quick" class="button large animated shake">Quickstart</a>
<!--             <a href="{{ route('4.1-note') }}" class="button large animated shake">4.1-note</a>
            <a href="{{ route('composer-cn') }}" class="button large animated shake">composer</a>
            <a href="{{ route('psr') }}" class="button large animated shake">PSR</a> -->
        </div>
        <!-- /callto action -->

        <!-- ui -->
        <div class="animated fadeIn" id="header_image" style="background: url(assets/img/swift-screenshot.jpg) top center no-repeat;"></div>
        <!-- /ui -->
    </div>
</header>
<!-- /header -->

<!-- nav -->
<nav id="primary">
    <div class="boxed">
        <div id="logo-head">
           <a href="/"><img src="assets/img/developer.png" alt="swift" /></a>
        </div>
        <ul>
            <li class="current-item"><a href="#">Welcome</a></li>
            <li><a href="docs" title="Documentation">Documentation</a></li>
            <li><a href="api/{{ DOCS_VERSION }}" title="Laravel Framework API">API</a></li>
            <li><a href="//github.com/laravel/laravel" title="Github">Github</a></li>
            <li><a href="//forums.laravel.io/" title="Laravel Forums">Forums</a></li>
            <li><a href="//twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
        </ul>
    </div>
</nav>
<!-- /nav -->

<!-- content -->
<div id="content">

    <!-- page -->
    <section id="page">
        <article class="boxed">
            <ul class="feature-box nolist">
                <li class="one_quarter">
                    <h2><i class="icon-random"></i> <a title="RESTful Routing" href="docs/routing">Modern</a></h2>
                    <p>Swift is the result of the latest research on programming languages, combined with decades of experience building Apple platforms. Named parameters brought forward from Objective-C are expressed in a clean syntax that makes APIs in Swift even easier to read and maintain. Inferred types make code cleaner and less prone to mistakes, while modules eliminate headers and provide namespaces. Memory is managed automatically, and you don’t even need to type semi-colons.</p>
                    <img src="assets/img/code-snippet.png" alt="" style="width:400;height:80px;">
                      Swift has many other features to make your code more expressive:
                      <ul>
                        <li>Closures unified with function pointers</li>
                        <li>Tuples and multiple return values</li>
                        <li>Generics</li>
                        <li>Fast and concise iteration over a range or collection</li>
                        <li>Structs that support methods, extensions, protocols.</li>
                        <li>Functional programming patterns, e.g.: map and filter</li>
                      </ul>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-graph"></i> <a title="Command Your Data" href="docs/eloquent">Interactive Playgrounds</a></h2>
                    <p><img src="assets/img/playgrounds.png" alt=""  align ="right" style="width:100px;height:100px;" >Playgrounds make writing Swift code incredibly simple and fun. Type a line of code and the result appears immediately. If your code runs over time, for instance through a loop, you can watch its progress in the timeline assistant. The timeline displays variables in a graph, draws each step when composing a view, and can play an animated SpriteKit scene. When you’ve perfected your code in the playground, simply move that code into your project. With playgrounds, you can:</p>
                    <ul>
                      <li>Design a new algorithm, watching its results every step of the way</li>
                      <li>Create new tests, verifying they work before promoting into your test suite</li>
                      <li>Experiment with new APIs to hone your Swift coding skills</li>
                    </ul>
                    <p>
                      <b>Read-Eval-Print-Loop (REPL).</b>
                        The debugging console in Xcode includes an interactive version of the Swift language built right in. Use Swift syntax to evaluate and interact with your running app, or write new code to see how it works in a script-like environment. Available from within the Xcode console, or in Terminal.
                    </p>
                    <br>
                    <br>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-pencil-alt"></i> <a title="Beautiful Templating" href="docs/templates">Designed for Safety</a></h2>
                    <p>Swift eliminates entire classes of unsafe code. Variables are always initialized before use, arrays and integers are checked for overflow, and memory is managed automatically. Syntax is tuned to make it easy to define your intent — for example, simple three-character keywords define a variable (var) or constant (let).</p>
                    <p>The safe patterns in Swift are tuned for the powerful Cocoa and Cocoa Touch APIs. Understanding and properly handling cases where objects are nil is fundamental to the frameworks, and Swift code makes this extremely easy. Adding a single character can replace what used to be an entire line of code in Objective-C. This all works together to make building iOS and Mac apps easier and safer than ever before.</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-time"></i> <a title="Ready For Tomorrow" href="docs/routing">Fast and Powerful</a></h2>
                    <p>From its earliest conception, Swift was built to be fast. Using the high-performance LLVM compiler, Swift code is transformed into optimized native code, tuned to get the most out of modern Mac, iPhone, and iPad hardware. The syntax and standard library have also been tuned to make the most obvious way to write your code also perform the best.</p>
                    <p>Swift takes the best features from the C and Objective-C languages. It includes low-level primitives such as types, flow control, and operators. It also provides object-oriented features such as classes, protocols, and generics, giving Cocoa and Cocoa Touch developers the performance and power they demand.</p>
                    <br><br>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-cog"></i> <a title="Proven Foundation" href="http://www.symfony.com">Ready Today</a></h2>
                    <p><img src="assets/img/xcode.png" alt=""  align ="right" style="width:100px;height:100px;" >You can begin using Swift code immediately to implement new features in your app, or enhance existing ones. New Swift code co-exists along side your existing Objective-C files in the same project, making it easy to adopt. And when iOS 8 and OS X Yosemite are released this fall, you can submit apps that use Swift to the App Store and Mac App Store.</p>
                    <p>To get started with Swift, download Xcode 6 beta and follow the tutorials included in the documentation.</p>
                </li>
                <li class="one_quarter">
                    <ul class="links small">
          <li class="download"><a href="/xcode/downloads/" onclick="s_objectID=&quot;https://developer.apple.com/xcode/downloads/_1&quot;;return this.s_oc?this.s_oc(e):true">Xcode 6 beta</a></li>
          <li class="download"><a href="https://itunes.apple.com/us/book/the-swift-programming-language/id881256329?mt=11" onclick="s_objectID=&quot;https://itunes.apple.com/us/book/the-swift-programming-language/id881256329?mt=11_2&quot;;return this.s_oc?this.s_oc(e):true">The Swift Programming Language (iBooks Store)</a></li>
            <li class="document"><a href="https://developer.apple.com/library/prerelease/ios/documentation/Swift/Conceptual/Swift_Programming_Language/">The Swift Programming Language</a></li>
            <li><a href="https://developer.apple.com/library/prerelease/ios/documentation/Swift/Conceptual/BuildingCocoaApps/">Using Swift with Cocoa and Objective-C</a></li>
        </ul>
                </li>

            </ul>
        </article>
    </section>
    <!-- /page -->

</div>
<!-- /content -->

<!-- sponsors -->
<section id="sponsors">
   <article class="boxed">
	   <ul id="sponsor" class="nolist textcenter aligncenter">
	       <li class="animated fadeInDown">
	           <div class="sponsor">
	               <p>Looking for the Swift parallel scripting language? <a href="http://swift-lang.org/">Please visit http://swift-lang.org</a></p>
	           </div>
<!-- 	           <div class="sponsor-logo">
	               <a href="//cartalyst.com" title="Cartalyst" target="_blank">
	                   <img src="assets/img/sponsors/cartalyst.png" alt="Cartalyst" />
	               </a>
	           </div> -->
	       </li>
	   </ul>
   </article>
</section>
<!-- /sponsors -->

<!-- quotes -->
<!-- <section id="quotes">
   <article class="boxed">
       <ul id="quote" class="nolist textcenter aligncenter">
           <li class="animated flipInX">
               <div class="quote"><p>Laravel has changed my life. The best framework to quickly turn an idea into product.</p></div>
               <div class="person">Maksim Surguy</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel reignited my passion for code, reinforced my understanding of MVC, and made development fun again!</p></div>
               <div class="person">Jozef Maxted</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel kept me from leaving PHP.</p></div>
               <div class="person">Michael Hasselbring</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel helped me stop reinventing the wheel!</p></div>
               <div class="person">Ryan McDonough</div>
           </li>
       </ul>
   </article>
</section> -->
<!-- /quotes -->

<!-- footer -->
<footer id="foot" class="textcenter">
    <div class="boxed">

        <!-- nav -->
        <nav id="secondary">
            <div id="logo-foot">
	           <!-- <a href="//laravel.com"><img src="assets/img/developer.png" alt="swift" /></a> -->
	        </div>
            <ul>
                <li class="current-item"><a href="#">Welcome</a></li>
                <li><a href="docs" title="Documentation">Documentation</a></li>
                <li><a href="api/{{ DOCS_VERSION }}" title="Laravel Framework API">API</a></li>
                <li><a href="//github.com/laravel/laravel" title="Github">Github</a></li>
                <li><a href="//forums.laravel.io/" title="Laravel Forums">Forums</a></li>
                <li><a href="//twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
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
@endsection