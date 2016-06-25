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
        $__internal_7b5d9aa44e3725fc39ae3d6333cc8609c4094b9aacda348ff95d8700501ebb29 = $this->env->getExtension("native_profiler");
        $__internal_7b5d9aa44e3725fc39ae3d6333cc8609c4094b9aacda348ff95d8700501ebb29->enter($__internal_7b5d9aa44e3725fc39ae3d6333cc8609c4094b9aacda348ff95d8700501ebb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_7b5d9aa44e3725fc39ae3d6333cc8609c4094b9aacda348ff95d8700501ebb29->leave($__internal_7b5d9aa44e3725fc39ae3d6333cc8609c4094b9aacda348ff95d8700501ebb29_prof);

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
