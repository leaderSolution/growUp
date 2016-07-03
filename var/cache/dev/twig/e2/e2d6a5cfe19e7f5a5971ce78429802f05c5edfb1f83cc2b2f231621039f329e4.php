<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d7477da8b20e505ce064a14a84f782a0a72000e0c993f8335870e31e83f8b474 extends Twig_Template
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
        $__internal_3dbb447ad3e0ce4608f83c48b1ee7a6c4ab01e2bf83bd78dbab15cd825b50952 = $this->env->getExtension("native_profiler");
        $__internal_3dbb447ad3e0ce4608f83c48b1ee7a6c4ab01e2bf83bd78dbab15cd825b50952->enter($__internal_3dbb447ad3e0ce4608f83c48b1ee7a6c4ab01e2bf83bd78dbab15cd825b50952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3dbb447ad3e0ce4608f83c48b1ee7a6c4ab01e2bf83bd78dbab15cd825b50952->leave($__internal_3dbb447ad3e0ce4608f83c48b1ee7a6c4ab01e2bf83bd78dbab15cd825b50952_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
