<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_c855ce57489032cb913b6672709fe435040831449f641269abc6aeaca77c8742 extends Twig_Template
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
        $__internal_a15e98e3cd05fa81f88658fbc63fb1806f7f342e4bef9a8c5b3ffad5641a04cc = $this->env->getExtension("native_profiler");
        $__internal_a15e98e3cd05fa81f88658fbc63fb1806f7f342e4bef9a8c5b3ffad5641a04cc->enter($__internal_a15e98e3cd05fa81f88658fbc63fb1806f7f342e4bef9a8c5b3ffad5641a04cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_a15e98e3cd05fa81f88658fbc63fb1806f7f342e4bef9a8c5b3ffad5641a04cc->leave($__internal_a15e98e3cd05fa81f88658fbc63fb1806f7f342e4bef9a8c5b3ffad5641a04cc_prof);

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
