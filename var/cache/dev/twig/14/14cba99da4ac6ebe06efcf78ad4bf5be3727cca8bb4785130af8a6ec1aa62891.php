<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4de3a994662428de48376fcf2681c33696b3e203ffd82bb9376a158f5ac3c63b extends Twig_Template
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
        $__internal_88f514e02bedc9d507a8764b4d170f0e49f89df83f521ae77568a78b6b7477f3 = $this->env->getExtension("native_profiler");
        $__internal_88f514e02bedc9d507a8764b4d170f0e49f89df83f521ae77568a78b6b7477f3->enter($__internal_88f514e02bedc9d507a8764b4d170f0e49f89df83f521ae77568a78b6b7477f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_88f514e02bedc9d507a8764b4d170f0e49f89df83f521ae77568a78b6b7477f3->leave($__internal_88f514e02bedc9d507a8764b4d170f0e49f89df83f521ae77568a78b6b7477f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
