<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2b6a26dec08dcea7a9d95afeda98d482db28a1ee8a33ca5d5b56cf49a9ffe1f1 extends Twig_Template
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
        $__internal_9c72e9a09ca87930a78f0dc743aeaade2ab05652a31afdb117f676664ea723ce = $this->env->getExtension("native_profiler");
        $__internal_9c72e9a09ca87930a78f0dc743aeaade2ab05652a31afdb117f676664ea723ce->enter($__internal_9c72e9a09ca87930a78f0dc743aeaade2ab05652a31afdb117f676664ea723ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9c72e9a09ca87930a78f0dc743aeaade2ab05652a31afdb117f676664ea723ce->leave($__internal_9c72e9a09ca87930a78f0dc743aeaade2ab05652a31afdb117f676664ea723ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
