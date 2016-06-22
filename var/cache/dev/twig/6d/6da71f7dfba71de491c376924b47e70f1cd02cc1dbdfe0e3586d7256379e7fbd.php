<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_9df4d40fdc4e08f99d3d648d4bb4aab4c137ed3b6fd5c3bfcc9c0f22cc745190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'login' => array($this, 'block_login'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4ef115ddf8f54eba793843e4d2bc755022bfc60f0f9241a9d4a9e0661d772c8 = $this->env->getExtension("native_profiler");
        $__internal_d4ef115ddf8f54eba793843e4d2bc755022bfc60f0f9241a9d4a9e0661d772c8->enter($__internal_d4ef115ddf8f54eba793843e4d2bc755022bfc60f0f9241a9d4a9e0661d772c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>GrowUp Login </title>

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Roboto:400,100,300,500\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/css/form-elements.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/css/style.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->


</head>

<body>

<!-- Top content -->
<div class=\"top-content\">

    <div class=\"inner-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8 col-sm-offset-2 text\">
                    <h1><strong>GrowUp</strong></h1>
                    <div class=\"description\">
                        <p>
                            with your startUp
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-8 col-sm-offset-2  form-box\">

                      ";
        // line 49
        $this->displayBlock('login', $context, $blocks);
        // line 50
        echo "                        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 51
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-sm-offset-3 social-login\">
                    <h3>...or login with:</h3>
                    <div class=\"social-login-buttons\">
                        <a class=\"btn btn-link-2\" href=\"#\">
                            <i class=\"fa fa-facebook\"></i> Facebook
                        </a>
                        <a class=\"btn btn-link-2\" href=\"#\">
                            <i class=\"fa fa-twitter\"></i> Twitter
                        </a>
                        <a class=\"btn btn-link-2\" href=\"#\">
                            <i class=\"fa fa-google-plus\"></i> Google Plus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Javascript -->

<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/jquery.backstretch.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/scripts.js"), "html", null, true);
        echo "\"></script>
<script>
    jQuery(document).ready(function() {
        var image_path = '";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/img/backgrounds/1.jpg"), "html", null, true);
        echo "';
        jQuery.backstretch(image_path);});

</script>
<!--[if lt IE 10]>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/js/placeholder.js"), "html", null, true);
        echo " \"></script>
<![endif]-->

</body>

</html>";
        
        $__internal_d4ef115ddf8f54eba793843e4d2bc755022bfc60f0f9241a9d4a9e0661d772c8->leave($__internal_d4ef115ddf8f54eba793843e4d2bc755022bfc60f0f9241a9d4a9e0661d772c8_prof);

    }

    // line 49
    public function block_login($context, array $blocks = array())
    {
        $__internal_6100d2252d106bc89e0e59f826c603338ebff7a53b7f05f8764ab71d2d208df4 = $this->env->getExtension("native_profiler");
        $__internal_6100d2252d106bc89e0e59f826c603338ebff7a53b7f05f8764ab71d2d208df4->enter($__internal_6100d2252d106bc89e0e59f826c603338ebff7a53b7f05f8764ab71d2d208df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        
        $__internal_6100d2252d106bc89e0e59f826c603338ebff7a53b7f05f8764ab71d2d208df4->leave($__internal_6100d2252d106bc89e0e59f826c603338ebff7a53b7f05f8764ab71d2d208df4_prof);

    }

    // line 50
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e2e2baf0279aa19f2fbd9185864d0d529a0d4fcb452351b8921051a00707b73 = $this->env->getExtension("native_profiler");
        $__internal_4e2e2baf0279aa19f2fbd9185864d0d529a0d4fcb452351b8921051a00707b73->enter($__internal_4e2e2baf0279aa19f2fbd9185864d0d529a0d4fcb452351b8921051a00707b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_4e2e2baf0279aa19f2fbd9185864d0d529a0d4fcb452351b8921051a00707b73->leave($__internal_4e2e2baf0279aa19f2fbd9185864d0d529a0d4fcb452351b8921051a00707b73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 50,  159 => 49,  146 => 89,  138 => 84,  132 => 81,  128 => 80,  124 => 79,  120 => 78,  91 => 51,  88 => 50,  86 => 49,  51 => 17,  47 => 16,  43 => 15,  39 => 14,  24 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>GrowUp Login </title>*/
/* */
/*     <!-- CSS -->*/
/*     <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/growupfrontend/css/bootstrap.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/growupfrontend/font-awesome/css/font-awesome.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/growupfrontend/css/form-elements.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/growupfrontend/css/style.css') }}">*/
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
/* */
/* <body>*/
/* */
/* <!-- Top content -->*/
/* <div class="top-content">*/
/* */
/*     <div class="inner-bg">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-8 col-sm-offset-2 text">*/
/*                     <h1><strong>GrowUp</strong></h1>*/
/*                     <div class="description">*/
/*                         <p>*/
/*                             with your startUp*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-8 col-sm-offset-2  form-box">*/
/* */
/*                       {% block login %}{% endblock %}*/
/*                         {% block fos_user_content %}{% endblock fos_user_content %}*/
/* */
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6 col-sm-offset-3 social-login">*/
/*                     <h3>...or login with:</h3>*/
/*                     <div class="social-login-buttons">*/
/*                         <a class="btn btn-link-2" href="#">*/
/*                             <i class="fa fa-facebook"></i> Facebook*/
/*                         </a>*/
/*                         <a class="btn btn-link-2" href="#">*/
/*                             <i class="fa fa-twitter"></i> Twitter*/
/*                         </a>*/
/*                         <a class="btn btn-link-2" href="#">*/
/*                             <i class="fa fa-google-plus"></i> Google Plus*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* */
/* <!-- Javascript -->*/
/* */
/* <script src="{{ asset('bundles/growupfrontend/js/jquery-1.11.1.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/growupfrontend/js/bootstrap.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/growupfrontend/js/jquery.backstretch.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/growupfrontend/js/scripts.js') }}"></script>*/
/* <script>*/
/*     jQuery(document).ready(function() {*/
/*         var image_path = '{{ asset('bundles/growupfrontend/img/backgrounds/1.jpg') }}';*/
/*         jQuery.backstretch(image_path);});*/
/* */
/* </script>*/
/* <!--[if lt IE 10]>*/
/* <script src="{{ asset('bundles/growupfrontend/js/placeholder.js')}} "></script>*/
/* <![endif]-->*/
/* */
/* </body>*/
/* */
/* </html>*/
