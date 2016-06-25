<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6b1f42a26c55bfce16bd426f4208cf72c7ad03c585c8659ba1c5a2941292e391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_614db72e983c1cd435ddd7ce4ecbcaf9dca71293461e3625bb75fe563d2da2db = $this->env->getExtension("native_profiler");
        $__internal_614db72e983c1cd435ddd7ce4ecbcaf9dca71293461e3625bb75fe563d2da2db->enter($__internal_614db72e983c1cd435ddd7ce4ecbcaf9dca71293461e3625bb75fe563d2da2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_614db72e983c1cd435ddd7ce4ecbcaf9dca71293461e3625bb75fe563d2da2db->leave($__internal_614db72e983c1cd435ddd7ce4ecbcaf9dca71293461e3625bb75fe563d2da2db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
