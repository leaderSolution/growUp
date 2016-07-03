<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_09dc97361040556fc7f83f67039903f1a9c402b1340a20d7b89332469784f161 extends Twig_Template
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
        $__internal_31d731b4c82e38157cc1e5f9c15c52cee440ce6fa36bfa198cbbcc714263d65b = $this->env->getExtension("native_profiler");
        $__internal_31d731b4c82e38157cc1e5f9c15c52cee440ce6fa36bfa198cbbcc714263d65b->enter($__internal_31d731b4c82e38157cc1e5f9c15c52cee440ce6fa36bfa198cbbcc714263d65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_31d731b4c82e38157cc1e5f9c15c52cee440ce6fa36bfa198cbbcc714263d65b->leave($__internal_31d731b4c82e38157cc1e5f9c15c52cee440ce6fa36bfa198cbbcc714263d65b_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'attributes') ?>><?php echo htmlspecialchars($value) ?></textarea>*/
/* */
/* <?php if ($enable && !$async) : ?>*/
/*     <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>*/
/* <?php endif; ?>*/
/* */
