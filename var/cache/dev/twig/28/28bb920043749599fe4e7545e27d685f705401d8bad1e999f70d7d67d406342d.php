<?php

/* GrowupFrontendBundle::base.html.twig */
class __TwigTemplate_ecb7f045de0f77930f23bbe8a7eadd8a5531ce5c72f7ff86e6a209139e87ff56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'profile' => array($this, 'block_profile'),
            'home' => array($this, 'block_home'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98d60f0a3a3a38683555af7556fe0a19b5eef4717ff637ff2a864f9ba8df0eed = $this->env->getExtension("native_profiler");
        $__internal_98d60f0a3a3a38683555af7556fe0a19b5eef4717ff637ff2a864f9ba8df0eed->enter($__internal_98d60f0a3a3a38683555af7556fe0a19b5eef4717ff637ff2a864f9ba8df0eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GrowupFrontendBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>GrowUp - Start your Startup</title>

    <!-- Bootstrap Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">

    <!-- Plugin CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/css/animate.min.css"), "html", null, true);
        echo "\" type=\"text/css\">

    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/css/creative.css"), "html", null, true);
        echo "\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->


</head>
<body id=\"page-top\">
<nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand page-scroll\" href=\"#page-top\">GrowUp</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a class=\"page-scroll\" href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("home_page");
        echo "\">Home</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#services\">Ideas</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#portfolio\">Projects</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#contact\">Services</a>
                </li>
                <li class=\"dropdown\">
                        <a >

                            <span class=\"caret\"></span>
                        </a>
                    ";
        // line 70
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true))) {
            // line 71
            echo "                       <li class=\"dropdown\"> <a href=\"\" class=\"dropdown-toggle\"  id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>

                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                        <li><a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("candidate_profile");
            echo "\">My profile</a> </li>

                      <li><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a> </li>

                    </ul>
                    </li>
                    ";
        } else {
            // line 81
            echo "                        <li><a class=\"page-scroll fa fa-user fa-2x\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
                    ";
        }
        // line 83
        echo "
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>


    </div>
    <!-- /.container-fluid -->
</nav>
";
        // line 94
        $this->displayBlock('profile', $context, $blocks);
        // line 95
        $this->displayBlock('home', $context, $blocks);
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo "

<!-- jQuery -->

<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/jquery.js"), "html", null, true);
        echo "\"></script> <!-- Jquery -->


<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

<!-- Plugin JavaScript -->
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/jquery.fittext.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/wow.min.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/creative.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/profile.js"), "html", null, true);
        echo "\"></script>



</body>

</html>";
        
        $__internal_98d60f0a3a3a38683555af7556fe0a19b5eef4717ff637ff2a864f9ba8df0eed->leave($__internal_98d60f0a3a3a38683555af7556fe0a19b5eef4717ff637ff2a864f9ba8df0eed_prof);

    }

    // line 94
    public function block_profile($context, array $blocks = array())
    {
        $__internal_521b592031b7e0ce00d790e1bbd9b27108ee485f08fd7fd75227acb8eafbf605 = $this->env->getExtension("native_profiler");
        $__internal_521b592031b7e0ce00d790e1bbd9b27108ee485f08fd7fd75227acb8eafbf605->enter($__internal_521b592031b7e0ce00d790e1bbd9b27108ee485f08fd7fd75227acb8eafbf605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        
        $__internal_521b592031b7e0ce00d790e1bbd9b27108ee485f08fd7fd75227acb8eafbf605->leave($__internal_521b592031b7e0ce00d790e1bbd9b27108ee485f08fd7fd75227acb8eafbf605_prof);

    }

    // line 95
    public function block_home($context, array $blocks = array())
    {
        $__internal_7c133a2539db1494b6f954f415ea1890c3276390c0295500b54b17b4caafd235 = $this->env->getExtension("native_profiler");
        $__internal_7c133a2539db1494b6f954f415ea1890c3276390c0295500b54b17b4caafd235->enter($__internal_7c133a2539db1494b6f954f415ea1890c3276390c0295500b54b17b4caafd235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "home"));

        
        $__internal_7c133a2539db1494b6f954f415ea1890c3276390c0295500b54b17b4caafd235->leave($__internal_7c133a2539db1494b6f954f415ea1890c3276390c0295500b54b17b4caafd235_prof);

    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        $__internal_91fa493f7d556e01b9372c89f998c4da9e9358b3a27a2745d24a4fb46ffdd245 = $this->env->getExtension("native_profiler");
        $__internal_91fa493f7d556e01b9372c89f998c4da9e9358b3a27a2745d24a4fb46ffdd245->enter($__internal_91fa493f7d556e01b9372c89f998c4da9e9358b3a27a2745d24a4fb46ffdd245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_91fa493f7d556e01b9372c89f998c4da9e9358b3a27a2745d24a4fb46ffdd245->leave($__internal_91fa493f7d556e01b9372c89f998c4da9e9358b3a27a2745d24a4fb46ffdd245_prof);

    }

    public function getTemplateName()
    {
        return "GrowupFrontendBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 96,  220 => 95,  209 => 94,  195 => 114,  191 => 113,  185 => 110,  181 => 109,  177 => 108,  171 => 105,  164 => 101,  158 => 97,  156 => 96,  154 => 95,  152 => 94,  139 => 83,  133 => 81,  125 => 76,  120 => 74,  113 => 71,  111 => 70,  92 => 54,  60 => 25,  54 => 22,  48 => 19,  40 => 14,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>GrowUp - Start your Startup</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/growupfrontend/css/bootstrap.min.css') }}" type="text/css">*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>*/
/*     <link rel="stylesheet" href="{{ asset ('bundles/growupfrontend/font-awesome/css/font-awesome.min.css') }}" type="text/css">*/
/* */
/*     <!-- Plugin CSS -->*/
/*     <link rel="stylesheet" href="{{ asset ('bundles/growupfrontend/css/animate.min.css') }}" type="text/css">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link rel="stylesheet" href="{{ asset ('bundles/growupfrontend/css/creative.css') }}" type="text/css">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* */
/* </head>*/
/* <body id="page-top">*/
/* <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">*/
/*     <div class="container-fluid">*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand page-scroll" href="#page-top">GrowUp</a>*/
/*         </div>*/
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li>*/
/*                     <a class="page-scroll" href="{{ path('home_page') }}">Home</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="page-scroll" href="#services">Ideas</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="page-scroll" href="#portfolio">Projects</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="page-scroll" href="#contact">Services</a>*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                         <a >*/
/* */
/*                             <span class="caret"></span>*/
/*                         </a>*/
/*                     {% if is_granted("ROLE_USER") and app.user  is defined  %}*/
/*                        <li class="dropdown"> <a href="" class="dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> {{ app.user.username }}</a>*/
/* */
/*                     <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                         <li><a href="{{ path('candidate_profile') }}">My profile</a> </li>*/
/* */
/*                       <li><a href="{{ path('fos_user_security_logout') }}">Logout</a> </li>*/
/* */
/*                     </ul>*/
/*                     </li>*/
/*                     {% else %}*/
/*                         <li><a class="page-scroll fa fa-user fa-2x" href="{{ path("fos_user_security_login") }}">Login</a></li>*/
/*                     {% endif %}*/
/* */
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*         <!-- /.navbar-collapse -->*/
/*     </div>*/
/* */
/* */
/*     </div>*/
/*     <!-- /.container-fluid -->*/
/* </nav>*/
/* {% block profile %}{% endblock %}*/
/* {% block home %}{% endblock %}*/
/* {% block body %}{% endblock %}*/
/* */
/* */
/* <!-- jQuery -->*/
/* */
/* <script src="{{ asset ('bundles/growupfrontend/js/jquery.js') }}"></script> <!-- Jquery -->*/
/* */
/* */
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="{{ asset ('bundles/growupfrontend/js/bootstrap.js') }}"></script>*/
/* */
/* <!-- Plugin JavaScript -->*/
/* <script src="{{ asset ('bundles/growupfrontend/js/jquery.easing.min.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/jquery.fittext.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/wow.min.js') }}"></script>*/
/* */
/* <!-- Custom Theme JavaScript -->*/
/* <script src="{{ asset ('bundles/growupfrontend/js/creative.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/profile.js') }}"></script>*/
/* */
/* */
/* */
/* </body>*/
/* */
/* </html>*/
