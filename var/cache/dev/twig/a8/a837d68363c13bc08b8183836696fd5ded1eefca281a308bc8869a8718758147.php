<?php

/* GrowupFrontendBundle::base.html.twig */
class __TwigTemplate_ad749f0150130878491aca8f1b8e3cf42c798e1fbe11f5a9307b56970f799fb6 extends Twig_Template
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
        $__internal_20b92c2dc34facbe2d757ee98b6e389b659c9e3db8235ffacd819136b966b1b5 = $this->env->getExtension("native_profiler");
        $__internal_20b92c2dc34facbe2d757ee98b6e389b659c9e3db8235ffacd819136b966b1b5->enter($__internal_20b92c2dc34facbe2d757ee98b6e389b659c9e3db8235ffacd819136b966b1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GrowupFrontendBundle::base.html.twig"));

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

    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/css/modification.css"), "html", null, true);
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
        // line 56
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
        // line 72
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true))) {
            // line 73
            echo "                       <li class=\"dropdown\"> <a href=\"\" class=\"dropdown-toggle\"  id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>

                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                        <li><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("candidate_profile");
            echo "\">My profile</a> </li>

                      <li><a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a> </li>

                    </ul>
                    </li>
                    ";
        } else {
            // line 83
            echo "                        <li><a class=\"page-scroll fa fa-user fa-2x\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
                    ";
        }
        // line 85
        echo "

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>


    </div>
    <!-- /.container-fluid -->
</nav>
";
        // line 96
        $this->displayBlock('profile', $context, $blocks);
        // line 97
        $this->displayBlock('home', $context, $blocks);
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "

<!-- jQuery -->

<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/jquery.js"), "html", null, true);
        echo "\"></script> <!-- Jquery -->


<!-- Bootstrap Core JavaScript -->

<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/dropdown.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/affix.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/button.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/alert.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/modal.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/popover.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/scrollspy.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/tab.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/tooltip.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/transition.js"), "html", null, true);
        echo "\"></script>



<!-- Plugin JavaScript -->
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/jquery.fittext.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/wow.min.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/ajax_front.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/creative.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/profile.js"), "html", null, true);
        echo "\"></script>



</body>

</html>";
        
        $__internal_20b92c2dc34facbe2d757ee98b6e389b659c9e3db8235ffacd819136b966b1b5->leave($__internal_20b92c2dc34facbe2d757ee98b6e389b659c9e3db8235ffacd819136b966b1b5_prof);

    }

    // line 96
    public function block_profile($context, array $blocks = array())
    {
        $__internal_e11f32158e71c5587dc4f7da59edad5300706fd06212bc39deb4dbe888305603 = $this->env->getExtension("native_profiler");
        $__internal_e11f32158e71c5587dc4f7da59edad5300706fd06212bc39deb4dbe888305603->enter($__internal_e11f32158e71c5587dc4f7da59edad5300706fd06212bc39deb4dbe888305603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        
        $__internal_e11f32158e71c5587dc4f7da59edad5300706fd06212bc39deb4dbe888305603->leave($__internal_e11f32158e71c5587dc4f7da59edad5300706fd06212bc39deb4dbe888305603_prof);

    }

    // line 97
    public function block_home($context, array $blocks = array())
    {
        $__internal_19da30b67dbc53185c88c41fd3b1db03eb6daa378c297453ab7e43cbd24ac9e8 = $this->env->getExtension("native_profiler");
        $__internal_19da30b67dbc53185c88c41fd3b1db03eb6daa378c297453ab7e43cbd24ac9e8->enter($__internal_19da30b67dbc53185c88c41fd3b1db03eb6daa378c297453ab7e43cbd24ac9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "home"));

        
        $__internal_19da30b67dbc53185c88c41fd3b1db03eb6daa378c297453ab7e43cbd24ac9e8->leave($__internal_19da30b67dbc53185c88c41fd3b1db03eb6daa378c297453ab7e43cbd24ac9e8_prof);

    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        $__internal_86c4470e0444b5669dcc1df69ced2a6cccff8a9ebcfdd694ea3ef9c4b4f67408 = $this->env->getExtension("native_profiler");
        $__internal_86c4470e0444b5669dcc1df69ced2a6cccff8a9ebcfdd694ea3ef9c4b4f67408->enter($__internal_86c4470e0444b5669dcc1df69ced2a6cccff8a9ebcfdd694ea3ef9c4b4f67408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_86c4470e0444b5669dcc1df69ced2a6cccff8a9ebcfdd694ea3ef9c4b4f67408->leave($__internal_86c4470e0444b5669dcc1df69ced2a6cccff8a9ebcfdd694ea3ef9c4b4f67408_prof);

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
        return array (  288 => 98,  277 => 97,  266 => 96,  252 => 132,  248 => 131,  244 => 130,  240 => 129,  234 => 126,  230 => 125,  226 => 124,  218 => 119,  214 => 118,  210 => 117,  205 => 115,  201 => 114,  197 => 113,  193 => 112,  189 => 111,  185 => 110,  181 => 109,  177 => 108,  169 => 103,  163 => 99,  161 => 98,  159 => 97,  157 => 96,  144 => 85,  138 => 83,  130 => 78,  125 => 76,  118 => 73,  116 => 72,  97 => 56,  65 => 27,  60 => 25,  54 => 22,  48 => 19,  40 => 14,  25 => 1,);
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
/*     <link rel="stylesheet" href="{{ asset ('bundles/growupfrontend/css/modification.css') }}" type="text/css">*/
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
/* */
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
/* */
/* <script src="{{ asset ('bundles/growupfrontend/js/dropdown.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/affix.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/button.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/alert.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/collapse.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/modal.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/popover.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/scrollspy.js') }}"></script>*/
/* */
/* <script src="{{ asset ('bundles/growupfrontend/js/tab.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/tooltip.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/transition.js') }}"></script>*/
/* */
/* */
/* */
/* <!-- Plugin JavaScript -->*/
/* <script src="{{ asset ('bundles/growupfrontend/js/jquery.easing.min.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/jquery.fittext.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/wow.min.js') }}"></script>*/
/* */
/* <!-- Custom Theme JavaScript -->*/
/* <script src="{{ asset('bundles/growupfrontend/js/ajax_front.js') }}"></script>*/
/* <script src="{{ asset('bundles/growupfrontend/js/bootbox.min.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/creative.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/profile.js') }}"></script>*/
/* */
/* */
/* */
/* </body>*/
/* */
/* </html>*/
