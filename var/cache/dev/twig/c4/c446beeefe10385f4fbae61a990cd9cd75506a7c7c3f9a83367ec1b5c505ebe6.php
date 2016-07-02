<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_af4d22ea0387d1a043da0c42d0fd84319dfbe51b11b33510d7286b6d6371038d extends Twig_Template
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
        $__internal_1d9b7cb557c6f32f7e53e26abe4be1f9baa3339bf8dbae0ae8dc7c9b1e79c698 = $this->env->getExtension("native_profiler");
        $__internal_1d9b7cb557c6f32f7e53e26abe4be1f9baa3339bf8dbae0ae8dc7c9b1e79c698->enter($__internal_1d9b7cb557c6f32f7e53e26abe4be1f9baa3339bf8dbae0ae8dc7c9b1e79c698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        
        $__internal_1d9b7cb557c6f32f7e53e26abe4be1f9baa3339bf8dbae0ae8dc7c9b1e79c698->leave($__internal_1d9b7cb557c6f32f7e53e26abe4be1f9baa3339bf8dbae0ae8dc7c9b1e79c698_prof);

    }

    // line 49
    public function block_login($context, array $blocks = array())
    {
        $__internal_3312b064701c839a9c6aa1e98981cc5170264a8fee3367125af639eb4001636f = $this->env->getExtension("native_profiler");
        $__internal_3312b064701c839a9c6aa1e98981cc5170264a8fee3367125af639eb4001636f->enter($__internal_3312b064701c839a9c6aa1e98981cc5170264a8fee3367125af639eb4001636f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        
        $__internal_3312b064701c839a9c6aa1e98981cc5170264a8fee3367125af639eb4001636f->leave($__internal_3312b064701c839a9c6aa1e98981cc5170264a8fee3367125af639eb4001636f_prof);

    }

    // line 50
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6744260ee4c4f543ea5476dd486ae63a7cd01d794ad2c3772aba65857701730d = $this->env->getExtension("native_profiler");
        $__internal_6744260ee4c4f543ea5476dd486ae63a7cd01d794ad2c3772aba65857701730d->enter($__internal_6744260ee4c4f543ea5476dd486ae63a7cd01d794ad2c3772aba65857701730d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_6744260ee4c4f543ea5476dd486ae63a7cd01d794ad2c3772aba65857701730d->leave($__internal_6744260ee4c4f543ea5476dd486ae63a7cd01d794ad2c3772aba65857701730d_prof);

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
