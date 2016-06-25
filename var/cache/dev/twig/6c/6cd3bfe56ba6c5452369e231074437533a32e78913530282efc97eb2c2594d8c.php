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
        $__internal_439007befbd8dac34000ae1872d84da8d47bb5916d4f300f23c8c36b3ecd3416 = $this->env->getExtension("native_profiler");
        $__internal_439007befbd8dac34000ae1872d84da8d47bb5916d4f300f23c8c36b3ecd3416->enter($__internal_439007befbd8dac34000ae1872d84da8d47bb5916d4f300f23c8c36b3ecd3416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_439007befbd8dac34000ae1872d84da8d47bb5916d4f300f23c8c36b3ecd3416->leave($__internal_439007befbd8dac34000ae1872d84da8d47bb5916d4f300f23c8c36b3ecd3416_prof);

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
