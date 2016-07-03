<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_46b93f1f2c7e7f79516fc25b41fadd6efc11371647c351db47c1bd05cd9dbca2 extends Twig_Template
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
        $__internal_7a729861368d5461e6608520173e16b48bb81c484e28553eb235aa584cc69f9e = $this->env->getExtension("native_profiler");
        $__internal_7a729861368d5461e6608520173e16b48bb81c484e28553eb235aa584cc69f9e->enter($__internal_7a729861368d5461e6608520173e16b48bb81c484e28553eb235aa584cc69f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7a729861368d5461e6608520173e16b48bb81c484e28553eb235aa584cc69f9e->leave($__internal_7a729861368d5461e6608520173e16b48bb81c484e28553eb235aa584cc69f9e_prof);

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
