<?php

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_b5c6cb5f0f00e89c6a30653842fb22cf71d4b971fb9324a73e2da9c8558b063b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ee75301ed9829fb87f507eb21ae44c43888a5422ffe091927d1ed105097c832 = $this->env->getExtension("native_profiler");
        $__internal_3ee75301ed9829fb87f507eb21ae44c43888a5422ffe091927d1ed105097c832->enter($__internal_3ee75301ed9829fb87f507eb21ae44c43888a5422ffe091927d1ed105097c832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee75301ed9829fb87f507eb21ae44c43888a5422ffe091927d1ed105097c832->leave($__internal_3ee75301ed9829fb87f507eb21ae44c43888a5422ffe091927d1ed105097c832_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dfd86ac9c647759c28e022d0e7ed9cc2d40eadee6b159b2146702d021ea923fe = $this->env->getExtension("native_profiler");
        $__internal_dfd86ac9c647759c28e022d0e7ed9cc2d40eadee6b159b2146702d021ea923fe->enter($__internal_dfd86ac9c647759c28e022d0e7ed9cc2d40eadee6b159b2146702d021ea923fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["time"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array())) ? (sprintf("%0.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()))) : ("n/a"));
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url"))));
        echo "
";
        
        $__internal_dfd86ac9c647759c28e022d0e7ed9cc2d40eadee6b159b2146702d021ea923fe->leave($__internal_dfd86ac9c647759c28e022d0e7ed9cc2d40eadee6b159b2146702d021ea923fe_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a9368251550c3adbb70c87557a5032017ae290f2b7445cb41edc1907d0674849 = $this->env->getExtension("native_profiler");
        $__internal_a9368251550c3adbb70c87557a5032017ae290f2b7445cb41edc1907d0674849->enter($__internal_a9368251550c3adbb70c87557a5032017ae290f2b7445cb41edc1907d0674849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 35
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "</span>
        <strong>Twig</strong>
    </span>
";
        
        $__internal_a9368251550c3adbb70c87557a5032017ae290f2b7445cb41edc1907d0674849->leave($__internal_a9368251550c3adbb70c87557a5032017ae290f2b7445cb41edc1907d0674849_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc11fd0473f215f30a7339f78f82598df3618d57a17dc2eb6aeabb4a6b24eabb = $this->env->getExtension("native_profiler");
        $__internal_bc11fd0473f215f30a7339f78f82598df3618d57a17dc2eb6aeabb4a6b24eabb->enter($__internal_bc11fd0473f215f30a7339f78f82598df3618d57a17dc2eb6aeabb4a6b24eabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()) == 0)) {
            // line 42
            echo "        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    ";
        } else {
            // line 48
            echo "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 52
            echo twig_escape_filter($this->env, sprintf("%0.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array()));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 87
                echo "                <tr>
                    <td>";
                // line 88
                echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                echo "</td>
                    <td class=\"font-normal\">";
                // line 89
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "htmlcallgraph", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_bc11fd0473f215f30a7339f78f82598df3618d57a17dc2eb6aeabb4a6b24eabb->leave($__internal_bc11fd0473f215f30a7339f78f82598df3618d57a17dc2eb6aeabb4a6b24eabb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 98,  216 => 92,  207 => 89,  203 => 88,  200 => 87,  196 => 86,  174 => 67,  166 => 62,  158 => 57,  150 => 52,  144 => 48,  136 => 42,  133 => 41,  127 => 40,  116 => 35,  113 => 34,  107 => 33,  98 => 30,  95 => 29,  89 => 26,  82 => 22,  75 => 18,  68 => 14,  64 => 12,  62 => 11,  59 => 10,  53 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set time = collector.templatecount ? '%0.0f'|format(collector.time) : 'n/a' %}*/
/*     {% set icon %}*/
/*         {{ include('@WebProfiler/Icon/twig.svg') }}*/
/*         <span class="sf-toolbar-value">{{ time }}</span>*/
/*         <span class="sf-toolbar-label">ms</span>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Render Time</b>*/
/*             <span>{{ time }} ms</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Template Calls</b>*/
/*             <span class="sf-toolbar-status">{{ collector.templatecount }}</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Block Calls</b>*/
/*             <span class="sf-toolbar-status">{{ collector.blockcount }}</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Macro Calls</b>*/
/*             <span class="sf-toolbar-status">{{ collector.macrocount }}</span>*/
/*         </div>*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/twig.svg') }}</span>*/
/*         <strong>Twig</strong>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {% if collector.templatecount == 0 %}*/
/*         <h2>Twig</h2>*/
/* */
/*         <div class="empty">*/
/*             <p>No Twig templates were rendered for this request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <h2>Twig Metrics</h2>*/
/* */
/*         <div class="metrics">*/
/*             <div class="metric">*/
/*                 <span class="value">{{ '%0.0f'|format(collector.time) }} <span class="unit">ms</span></span>*/
/*                 <span class="label">Render time</span>*/
/*             </div>*/
/* */
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.templatecount }}</span>*/
/*                 <span class="label">Template calls</span>*/
/*             </div>*/
/* */
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.blockcount }}</span>*/
/*                 <span class="label">Block calls</span>*/
/*             </div>*/
/* */
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.macrocount }}</span>*/
/*                 <span class="label">Macro calls</span>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <p class="help">*/
/*             Render time includes sub-requests rendering time (if any).*/
/*         </p>*/
/* */
/*         <h2>Rendered Templates</h2>*/
/* */
/*         <table>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th scope="col">Template Name</th>*/
/*                     <th scope="col">Render Count</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for template, count in collector.templates %}*/
/*                 <tr>*/
/*                     <td>{{ template }}</td>*/
/*                     <td class="font-normal">{{ count }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/* */
/*         <h2>Rendering Call Graph</h2>*/
/* */
/*         <div id="twig-dump">*/
/*             {{ collector.htmlcallgraph }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
