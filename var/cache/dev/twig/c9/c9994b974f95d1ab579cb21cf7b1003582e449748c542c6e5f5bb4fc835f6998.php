<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8ce4e74b32beab2d545d141706f12376bbdb3c30791df5f2be0f23b26afdf50c extends Twig_Template
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
        $__internal_4dd088288ce9c7bace4e93ec75f924140acec7b9de6d3170d2db1000302cdff7 = $this->env->getExtension("native_profiler");
        $__internal_4dd088288ce9c7bace4e93ec75f924140acec7b9de6d3170d2db1000302cdff7->enter($__internal_4dd088288ce9c7bace4e93ec75f924140acec7b9de6d3170d2db1000302cdff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4dd088288ce9c7bace4e93ec75f924140acec7b9de6d3170d2db1000302cdff7->leave($__internal_4dd088288ce9c7bace4e93ec75f924140acec7b9de6d3170d2db1000302cdff7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
