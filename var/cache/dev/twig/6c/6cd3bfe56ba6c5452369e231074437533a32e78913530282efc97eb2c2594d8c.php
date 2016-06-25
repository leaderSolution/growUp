<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e80a545ce66bc2e5874fa7bfc53dab8ea803919533da77a36b281514d908c131 extends Twig_Template
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
        $__internal_bb0ed5bac628ad1fb46ac9e7ac8667f23d631109843ac44da26f98808b3eb1b5 = $this->env->getExtension("native_profiler");
        $__internal_bb0ed5bac628ad1fb46ac9e7ac8667f23d631109843ac44da26f98808b3eb1b5->enter($__internal_bb0ed5bac628ad1fb46ac9e7ac8667f23d631109843ac44da26f98808b3eb1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bb0ed5bac628ad1fb46ac9e7ac8667f23d631109843ac44da26f98808b3eb1b5->leave($__internal_bb0ed5bac628ad1fb46ac9e7ac8667f23d631109843ac44da26f98808b3eb1b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
