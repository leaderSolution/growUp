<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e7f02a31bb7d49cd2959a74a6685986f3599521b134fbea1c5728f9907002091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9c1ac2ad7c200c36d2b6702a6820d113918ec237a1eb26b8a664e59cca74bed = $this->env->getExtension("native_profiler");
        $__internal_e9c1ac2ad7c200c36d2b6702a6820d113918ec237a1eb26b8a664e59cca74bed->enter($__internal_e9c1ac2ad7c200c36d2b6702a6820d113918ec237a1eb26b8a664e59cca74bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9c1ac2ad7c200c36d2b6702a6820d113918ec237a1eb26b8a664e59cca74bed->leave($__internal_e9c1ac2ad7c200c36d2b6702a6820d113918ec237a1eb26b8a664e59cca74bed_prof);

    }

    // line 4
    public function block_login($context, array $blocks = array())
    {
        $__internal_c5d9181d0c0b07e718d5cfa7d4bf4817cdc8f3a05cfcb6f6caf8bdf4ea7866bc = $this->env->getExtension("native_profiler");
        $__internal_c5d9181d0c0b07e718d5cfa7d4bf4817cdc8f3a05cfcb6f6caf8bdf4ea7866bc->enter($__internal_c5d9181d0c0b07e718d5cfa7d4bf4817cdc8f3a05cfcb6f6caf8bdf4ea7866bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 5
        echo "<div class=\"form-top\">
    <div class=\"form-top-left\">
        <h3>Login to our site</h3>
        <p>Enter your username and password to log on:</p>
    </div>
    <div class=\"form-top-right\">
        <i class=\"fa fa-lock\"></i>
    </div>
</div>
<div class=\"form-bottom\">

";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "    <div xmlns=\"http://www.w3.org/1999/html\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 19
        echo "

<form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"login-form\" role=\"form\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
<div class=\"form-group\">
    <input type=\"text\" placeholder=\"Username...\" class=\"form-username form-control\"  id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" /></div>
<div class=\"form-group\">
    <input type=\"password\" placeholder=\"Password...\" class=\"form-password form-control\"  id=\"password\" name=\"_password\" required=\"required\" /></div>

    <div class=\"form-group\"> <input  type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\" class=\"label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
</div>
    <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
</form>


</div>
";
        
        $__internal_c5d9181d0c0b07e718d5cfa7d4bf4817cdc8f3a05cfcb6f6caf8bdf4ea7866bc->leave($__internal_c5d9181d0c0b07e718d5cfa7d4bf4817cdc8f3a05cfcb6f6caf8bdf4ea7866bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 31,  82 => 29,  74 => 24,  69 => 22,  65 => 21,  61 => 19,  55 => 17,  53 => 16,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block login %}*/
/* <div class="form-top">*/
/*     <div class="form-top-left">*/
/*         <h3>Login to our site</h3>*/
/*         <p>Enter your username and password to log on:</p>*/
/*     </div>*/
/*     <div class="form-top-right">*/
/*         <i class="fa fa-lock"></i>*/
/*     </div>*/
/* </div>*/
/* <div class="form-bottom">*/
/* */
/* {% if error %}*/
/*     <div xmlns="http://www.w3.org/1999/html">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post" class="login-form" role="form">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* <div class="form-group">*/
/*     <input type="text" placeholder="Username..." class="form-username form-control"  id="username" name="_username" value="{{ last_username }}" required="required" /></div>*/
/* <div class="form-group">*/
/*     <input type="password" placeholder="Password..." class="form-password form-control"  id="password" name="_password" required="required" /></div>*/
/* */
/*     <div class="form-group"> <input  type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me" class="label">{{ 'security.login.remember_me'|trans }}</label>*/
/* </div>*/
/*     <button type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="btn">{{ 'security.login.submit'|trans }}</button>*/
/* </form>*/
/* */
/* */
/* </div>*/
/* {% endblock  %}*/
