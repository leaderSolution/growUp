<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a84bbc2589e74b8bd187a85b2bbb326f49b4f60fc659ef5056f8b9feadaab08c extends Twig_Template
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
        $__internal_267a31a010d44feda57469e57e3102dd113ec51f8be99a35527ddedf2c83886d = $this->env->getExtension("native_profiler");
        $__internal_267a31a010d44feda57469e57e3102dd113ec51f8be99a35527ddedf2c83886d->enter($__internal_267a31a010d44feda57469e57e3102dd113ec51f8be99a35527ddedf2c83886d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_267a31a010d44feda57469e57e3102dd113ec51f8be99a35527ddedf2c83886d->leave($__internal_267a31a010d44feda57469e57e3102dd113ec51f8be99a35527ddedf2c83886d_prof);

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
