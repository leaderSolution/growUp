<?php

/* ::base.html.twig */
class __TwigTemplate_ed1b43dc63dc889c2520252cc3e176c218405889741e6b961fa207a4ee4d81b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'profile' => array($this, 'block_profile'),
            'home' => array($this, 'block_home'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a90dce7c447799d9b0feed36848011d3305cd2a301371d55d5864ced0cd29076 = $this->env->getExtension("native_profiler");
        $__internal_a90dce7c447799d9b0feed36848011d3305cd2a301371d55d5864ced0cd29076->enter($__internal_a90dce7c447799d9b0feed36848011d3305cd2a301371d55d5864ced0cd29076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 53
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
        // line 69
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true))) {
            // line 70
            echo "                       <li class=\"dropdown\"> <a href=\"\" class=\"dropdown-toggle\"  id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>

                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                        <li><a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("candidate_profile");
            echo "\">My profile</a> </li>

                      <li><a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a> </li>

                    </ul>
                    </li>
                    ";
        } else {
            // line 80
            echo "                        <li><a class=\"page-scroll fa fa-user fa-2x\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
                    ";
        }
        // line 82
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
        // line 93
        $this->displayBlock('profile', $context, $blocks);
        // line 94
        $this->displayBlock('home', $context, $blocks);
        // line 95
        echo "<!-- jQuery -->
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/jquery.js"), "html", null, true);
        echo "\"></script> <!-- Jquery -->


<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Plugin JavaScript -->
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/jquery.fittext.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/wow.min.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/creative.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/profile.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/css/editor.css"), "html", null, true);
        echo "\"type=\"text/css\" rel=\"stylesheet\"/>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/editor.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready( function() {
        \$(\"#txtEditor\").Editor();
    });
</script>

</body>

</html>";
        
        $__internal_a90dce7c447799d9b0feed36848011d3305cd2a301371d55d5864ced0cd29076->leave($__internal_a90dce7c447799d9b0feed36848011d3305cd2a301371d55d5864ced0cd29076_prof);

    }

    // line 93
    public function block_profile($context, array $blocks = array())
    {
        $__internal_1d586be132b0521fad4e604c8ebebf794d00bbaea35509dddfec58d90ff737a1 = $this->env->getExtension("native_profiler");
        $__internal_1d586be132b0521fad4e604c8ebebf794d00bbaea35509dddfec58d90ff737a1->enter($__internal_1d586be132b0521fad4e604c8ebebf794d00bbaea35509dddfec58d90ff737a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        
        $__internal_1d586be132b0521fad4e604c8ebebf794d00bbaea35509dddfec58d90ff737a1->leave($__internal_1d586be132b0521fad4e604c8ebebf794d00bbaea35509dddfec58d90ff737a1_prof);

    }

    // line 94
    public function block_home($context, array $blocks = array())
    {
        $__internal_bebee70e6f8115b10410f0588873acd9d6ecbe4f466fae75ece40219862dbd23 = $this->env->getExtension("native_profiler");
        $__internal_bebee70e6f8115b10410f0588873acd9d6ecbe4f466fae75ece40219862dbd23->enter($__internal_bebee70e6f8115b10410f0588873acd9d6ecbe4f466fae75ece40219862dbd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "home"));

        
        $__internal_bebee70e6f8115b10410f0588873acd9d6ecbe4f466fae75ece40219862dbd23->leave($__internal_bebee70e6f8115b10410f0588873acd9d6ecbe4f466fae75ece40219862dbd23_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 94,  213 => 93,  196 => 111,  192 => 110,  188 => 109,  184 => 108,  178 => 105,  174 => 104,  170 => 103,  164 => 100,  157 => 96,  154 => 95,  152 => 94,  150 => 93,  137 => 82,  131 => 80,  123 => 75,  118 => 73,  111 => 70,  109 => 69,  90 => 53,  59 => 25,  53 => 22,  47 => 19,  39 => 14,  24 => 1,);
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
/* <!-- jQuery -->*/
/* <script src="{{ asset ('bundles/growupfrontend/js/jquery.js') }}"></script> <!-- Jquery -->*/
/* */
/* */
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="{{ asset ('bundles/growupfrontend/js/bootstrap.min.js') }}"></script>*/
/* */
/* <!-- Plugin JavaScript -->*/
/* <script src="{{ asset ('bundles/growupfrontend/js/jquery.easing.min.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/jquery.fittext.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/wow.min.js') }}"></script>*/
/* */
/* <!-- Custom Theme JavaScript -->*/
/* <script src="{{ asset ('bundles/growupfrontend/js/creative.js') }}"></script>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/profile.js') }}"></script>*/
/* <link href="{{ asset ('bundles/growupfrontend/css/editor.css') }}"type="text/css" rel="stylesheet"/>*/
/* <script src="{{ asset ('bundles/growupfrontend/js/editor.js') }}"></script>*/
/* <script type="text/javascript">*/
/*     $(document).ready( function() {*/
/*         $("#txtEditor").Editor();*/
/*     });*/
/* </script>*/
/* */
/* </body>*/
/* */
/* </html>*/
