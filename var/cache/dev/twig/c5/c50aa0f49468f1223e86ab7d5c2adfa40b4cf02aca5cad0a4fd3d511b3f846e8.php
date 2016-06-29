<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_2a58fe42c5cbfd9600885762055ff66c20189c54a32c8194b2858ba0f832c0dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
            'ckeditor_javascript' => array($this, 'block_ckeditor_javascript'),
            '_ckeditor_javascript' => array($this, 'block__ckeditor_javascript'),
            'ckeditor_widget_extra' => array($this, 'block_ckeditor_widget_extra'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd75bdcc9a40ea9d787d59458ae1a7fe32a8b35c5f48797961998ff89e21d33e = $this->env->getExtension("native_profiler");
        $__internal_fd75bdcc9a40ea9d787d59458ae1a7fe32a8b35c5f48797961998ff89e21d33e->enter($__internal_fd75bdcc9a40ea9d787d59458ae1a7fe32a8b35c5f48797961998ff89e21d33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig"));

        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('ckeditor_javascript', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('_ckeditor_javascript', $context, $blocks);
        
        $__internal_fd75bdcc9a40ea9d787d59458ae1a7fe32a8b35c5f48797961998ff89e21d33e->leave($__internal_fd75bdcc9a40ea9d787d59458ae1a7fe32a8b35c5f48797961998ff89e21d33e_prof);

    }

    // line 1
    public function block_ckeditor_widget($context, array $blocks = array())
    {
        $__internal_1509fe365f80fee7a1ed109d09ac97772d02162e264f547793ab2d78449eacea = $this->env->getExtension("native_profiler");
        $__internal_1509fe365f80fee7a1ed109d09ac97772d02162e264f547793ab2d78449eacea->enter($__internal_1509fe365f80fee7a1ed109d09ac97772d02162e264f547793ab2d78449eacea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if (((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable")) &&  !(isset($context["async"]) ? $context["async"] : $this->getContext($context, "async")))) {
            // line 5
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_1509fe365f80fee7a1ed109d09ac97772d02162e264f547793ab2d78449eacea->leave($__internal_1509fe365f80fee7a1ed109d09ac97772d02162e264f547793ab2d78449eacea_prof);

    }

    // line 9
    public function block_ckeditor_javascript($context, array $blocks = array())
    {
        $__internal_519b2476b8c7103b8ebff476fa9437ee75d8723a7eed1e4e19f8042782712918 = $this->env->getExtension("native_profiler");
        $__internal_519b2476b8c7103b8ebff476fa9437ee75d8723a7eed1e4e19f8042782712918->enter($__internal_519b2476b8c7103b8ebff476fa9437ee75d8723a7eed1e4e19f8042782712918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_javascript"));

        // line 10
        echo "    ";
        if (((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable")) && (isset($context["async"]) ? $context["async"] : $this->getContext($context, "async")))) {
            // line 11
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_519b2476b8c7103b8ebff476fa9437ee75d8723a7eed1e4e19f8042782712918->leave($__internal_519b2476b8c7103b8ebff476fa9437ee75d8723a7eed1e4e19f8042782712918_prof);

    }

    // line 15
    public function block__ckeditor_javascript($context, array $blocks = array())
    {
        $__internal_69825a63f4b642b61ae27c72257a89796ec87a71e775ce10be0834d707bba36e = $this->env->getExtension("native_profiler");
        $__internal_69825a63f4b642b61ae27c72257a89796ec87a71e775ce10be0834d707bba36e->enter($__internal_69825a63f4b642b61ae27c72257a89796ec87a71e775ce10be0834d707bba36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_ckeditor_javascript"));

        // line 16
        echo "    ";
        if ((isset($context["autoload"]) ? $context["autoload"] : $this->getContext($context, "autoload"))) {
            // line 17
            echo "        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"";
            // line 18
            echo $this->env->getExtension('ivory_ckeditor')->renderBasePath((isset($context["base_path"]) ? $context["base_path"] : $this->getContext($context, "base_path")));
            echo "\";
        </script>
        <script type=\"text/javascript\" src=\"";
            // line 20
            echo $this->env->getExtension('ivory_ckeditor')->renderJsPath((isset($context["js_path"]) ? $context["js_path"] : $this->getContext($context, "js_path")));
            echo "\"></script>
        ";
            // line 21
            if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
                // line 22
                echo "            <script type=\"text/javascript\" src=\"";
                echo $this->env->getExtension('ivory_ckeditor')->renderJsPath((isset($context["jquery_path"]) ? $context["jquery_path"] : $this->getContext($context, "jquery_path")));
                echo "\"></script>
        ";
            }
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <script type=\"text/javascript\">
        ";
        // line 26
        if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
            // line 27
            echo "            \$(function () {
        ";
        }
        // line 29
        echo "
        ";
        // line 30
        if ((isset($context["require_js"]) ? $context["require_js"] : $this->getContext($context, "require_js"))) {
            // line 31
            echo "            require(['ckeditor'], function() {
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        echo $this->env->getExtension('ivory_ckeditor')->renderDestroy((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        echo "

        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
            // line 37
            echo "            ";
            echo $this->env->getExtension('ivory_ckeditor')->renderPlugin($context["plugin_name"], $context["plugin"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : $this->getContext($context, "styles")));
        foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
            // line 41
            echo "            ";
            echo $this->env->getExtension('ivory_ckeditor')->renderStylesSet($context["style_name"], $context["style"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
            // line 45
            echo "            ";
            echo $this->env->getExtension('ivory_ckeditor')->renderTemplate($context["template_name"], $context["template"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
        ";
        // line 48
        $this->displayBlock('ckeditor_widget_extra', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        echo $this->env->getExtension('ivory_ckeditor')->renderWidget((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), array("auto_inline" =>         // line 51
(isset($context["auto_inline"]) ? $context["auto_inline"] : $this->getContext($context, "auto_inline")), "inline" =>         // line 52
(isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "input_sync" =>         // line 53
(isset($context["input_sync"]) ? $context["input_sync"] : $this->getContext($context, "input_sync")), "filebrowsers" =>         // line 54
(isset($context["filebrowsers"]) ? $context["filebrowsers"] : $this->getContext($context, "filebrowsers"))));
        // line 55
        echo "

        ";
        // line 57
        if ((isset($context["require_js"]) ? $context["require_js"] : $this->getContext($context, "require_js"))) {
            // line 58
            echo "            });
        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
            // line 62
            echo "            });
        ";
        }
        // line 64
        echo "    </script>
";
        
        $__internal_69825a63f4b642b61ae27c72257a89796ec87a71e775ce10be0834d707bba36e->leave($__internal_69825a63f4b642b61ae27c72257a89796ec87a71e775ce10be0834d707bba36e_prof);

    }

    // line 48
    public function block_ckeditor_widget_extra($context, array $blocks = array())
    {
        $__internal_d6a07f64c67ea4f304fa88f3453315ffe4882d0783a251eb8a75efaa47009da9 = $this->env->getExtension("native_profiler");
        $__internal_d6a07f64c67ea4f304fa88f3453315ffe4882d0783a251eb8a75efaa47009da9->enter($__internal_d6a07f64c67ea4f304fa88f3453315ffe4882d0783a251eb8a75efaa47009da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget_extra"));

        
        $__internal_d6a07f64c67ea4f304fa88f3453315ffe4882d0783a251eb8a75efaa47009da9->leave($__internal_d6a07f64c67ea4f304fa88f3453315ffe4882d0783a251eb8a75efaa47009da9_prof);

    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  234 => 48,  226 => 64,  222 => 62,  220 => 61,  217 => 60,  213 => 58,  211 => 57,  207 => 55,  205 => 54,  204 => 53,  203 => 52,  202 => 51,  201 => 50,  198 => 49,  196 => 48,  193 => 47,  184 => 45,  180 => 44,  177 => 43,  168 => 41,  164 => 40,  161 => 39,  152 => 37,  148 => 36,  143 => 34,  140 => 33,  136 => 31,  134 => 30,  131 => 29,  127 => 27,  125 => 26,  122 => 25,  119 => 24,  113 => 22,  111 => 21,  107 => 20,  102 => 18,  99 => 17,  96 => 16,  90 => 15,  79 => 11,  76 => 10,  70 => 9,  59 => 5,  57 => 4,  49 => 2,  43 => 1,  36 => 15,  33 => 14,  31 => 9,  28 => 8,  26 => 1,);
    }
}
/* {% block ckeditor_widget %}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* */
/*     {% if enable and not async %}*/
/*         {{ block('_ckeditor_javascript') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block ckeditor_javascript %}*/
/*     {% if enable and async %}*/
/*         {{ block('_ckeditor_javascript') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block _ckeditor_javascript %}*/
/*     {% if autoload %}*/
/*         <script type="text/javascript">*/
/*             var CKEDITOR_BASEPATH = "{{ ckeditor_base_path(base_path) }}";*/
/*         </script>*/
/*         <script type="text/javascript" src="{{ ckeditor_js_path(js_path) }}"></script>*/
/*         {% if jquery %}*/
/*             <script type="text/javascript" src="{{ ckeditor_js_path(jquery_path) }}"></script>*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     <script type="text/javascript">*/
/*         {% if jquery %}*/
/*             $(function () {*/
/*         {% endif %}*/
/* */
/*         {% if require_js %}*/
/*             require(['ckeditor'], function() {*/
/*         {% endif %}*/
/* */
/*         {{ ckeditor_destroy(id) }}*/
/* */
/*         {% for plugin_name, plugin in plugins %}*/
/*             {{ ckeditor_plugin(plugin_name, plugin) }}*/
/*         {% endfor %}*/
/* */
/*         {% for style_name, style in styles %}*/
/*             {{ ckeditor_styles_set(style_name, style) }}*/
/*         {% endfor %}*/
/* */
/*         {% for template_name, template in templates %}*/
/*             {{ ckeditor_template(template_name, template) }}*/
/*         {% endfor %}*/
/* */
/*         {% block ckeditor_widget_extra %}{% endblock ckeditor_widget_extra %}*/
/* */
/*         {{ ckeditor_widget(id, config, {*/
/*             auto_inline: auto_inline,*/
/*             inline: inline,*/
/*             input_sync: input_sync,*/
/*             filebrowsers: filebrowsers*/
/*         }) }}*/
/* */
/*         {% if require_js %}*/
/*             });*/
/*         {% endif %}*/
/* */
/*         {% if jquery %}*/
/*             });*/
/*         {% endif %}*/
/*     </script>*/
/* {% endblock %}*/
/* */
