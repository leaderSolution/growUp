<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1560a087a7ba0eb8a21364e0bef0da3c638a8f142c49ce1559cdbf32d7b3d1f5 extends Twig_Template
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
        $__internal_e40cda2505c77c3923cc6469a1eb44d3f8e955059926fef1f77d9b132a9a7ac4 = $this->env->getExtension("native_profiler");
        $__internal_e40cda2505c77c3923cc6469a1eb44d3f8e955059926fef1f77d9b132a9a7ac4->enter($__internal_e40cda2505c77c3923cc6469a1eb44d3f8e955059926fef1f77d9b132a9a7ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e40cda2505c77c3923cc6469a1eb44d3f8e955059926fef1f77d9b132a9a7ac4->leave($__internal_e40cda2505c77c3923cc6469a1eb44d3f8e955059926fef1f77d9b132a9a7ac4_prof);

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
