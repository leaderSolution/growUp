<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a91670f21a05ef867dbd7533d93f94a95c306d25b3d33449c2d9fa572619ba1f extends Twig_Template
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
        $__internal_4211ba964070374bc1cde858e7153a929ce8d4355122e9d0fb2bad84cf243e60 = $this->env->getExtension("native_profiler");
        $__internal_4211ba964070374bc1cde858e7153a929ce8d4355122e9d0fb2bad84cf243e60->enter($__internal_4211ba964070374bc1cde858e7153a929ce8d4355122e9d0fb2bad84cf243e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4211ba964070374bc1cde858e7153a929ce8d4355122e9d0fb2bad84cf243e60->leave($__internal_4211ba964070374bc1cde858e7153a929ce8d4355122e9d0fb2bad84cf243e60_prof);

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
