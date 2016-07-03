<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_dc60c87afa24a359c8b26ea7b7d56f579643da02684e4b65f4e4e74c040cc4c2 extends Twig_Template
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
        $__internal_bfb93ab4e08a0ad3087556a84ae35c8294b286cb20a8635140fbb0a3e81da8dc = $this->env->getExtension("native_profiler");
        $__internal_bfb93ab4e08a0ad3087556a84ae35c8294b286cb20a8635140fbb0a3e81da8dc->enter($__internal_bfb93ab4e08a0ad3087556a84ae35c8294b286cb20a8635140fbb0a3e81da8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_bfb93ab4e08a0ad3087556a84ae35c8294b286cb20a8635140fbb0a3e81da8dc->leave($__internal_bfb93ab4e08a0ad3087556a84ae35c8294b286cb20a8635140fbb0a3e81da8dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
