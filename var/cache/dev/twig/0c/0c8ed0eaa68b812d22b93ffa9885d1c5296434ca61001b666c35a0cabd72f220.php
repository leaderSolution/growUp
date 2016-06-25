<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_887f333327b4be4271f85abc4b2b62f1fc0e2cf29d4f6481592b43c4f446245e extends Twig_Template
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
        $__internal_6457de212c6628966ccdb19590e2e8b3fc9887f6081ee46a0962529396459af2 = $this->env->getExtension("native_profiler");
        $__internal_6457de212c6628966ccdb19590e2e8b3fc9887f6081ee46a0962529396459af2->enter($__internal_6457de212c6628966ccdb19590e2e8b3fc9887f6081ee46a0962529396459af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6457de212c6628966ccdb19590e2e8b3fc9887f6081ee46a0962529396459af2->leave($__internal_6457de212c6628966ccdb19590e2e8b3fc9887f6081ee46a0962529396459af2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
