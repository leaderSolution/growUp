<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_cbb9a413815a21aaa685a56d6532d57c7a4172430fc6e51afd09bc5381c57b9c extends Twig_Template
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
        $__internal_bceeb2d343d53bf88c5d1b0dee7d4d044fdc8d283edbb905d62303c5dfeaa46e = $this->env->getExtension("native_profiler");
        $__internal_bceeb2d343d53bf88c5d1b0dee7d4d044fdc8d283edbb905d62303c5dfeaa46e->enter($__internal_bceeb2d343d53bf88c5d1b0dee7d4d044fdc8d283edbb905d62303c5dfeaa46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_bceeb2d343d53bf88c5d1b0dee7d4d044fdc8d283edbb905d62303c5dfeaa46e->leave($__internal_bceeb2d343d53bf88c5d1b0dee7d4d044fdc8d283edbb905d62303c5dfeaa46e_prof);

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
