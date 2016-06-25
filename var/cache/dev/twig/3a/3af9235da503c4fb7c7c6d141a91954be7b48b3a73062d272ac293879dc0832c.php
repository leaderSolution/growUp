<?php

/* @IvoryCKEditor/Form/_ckeditor_javascript.html.php */
class __TwigTemplate_665ea4fe6b4293a9e8b7ebcf88963f8a4b5b1e53e082e004ba7009373a41ae64 extends Twig_Template
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
        $__internal_378388113ccff7dbd119ff7dde9738b7e5b3850ca7ad9f0dadae430b84ff80ae = $this->env->getExtension("native_profiler");
        $__internal_378388113ccff7dbd119ff7dde9738b7e5b3850ca7ad9f0dadae430b84ff80ae->enter($__internal_378388113ccff7dbd119ff7dde9738b7e5b3850ca7ad9f0dadae430b84ff80ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/_ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$autoload) : ?>
    <script type=\"text/javascript\">
        var CKEDITOR_BASEPATH = \"<?php echo \$view['ivory_ckeditor']->renderBasePath(\$base_path); ?>\";
    </script>
    <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$js_path); ?>\"></script>
    <?php if (\$jquery) : ?>
        <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$jquery_path); ?>\"></script>
    <?php endif; ?>
<?php endif; ?>
<script type=\"text/javascript\">
    <?php if (\$jquery) : ?>
        \$(function () {
    <?php endif; ?>

    <?php if (\$require_js) : ?>
        require(['ckeditor'], function() {
    <?php endif; ?>

    <?php echo \$view['ivory_ckeditor']->renderDestroy(\$id); ?>

    <?php foreach (\$plugins as \$pluginName => \$plugin): ?>
        <?php echo \$view['ivory_ckeditor']->renderPlugin(\$pluginName, \$plugin); ?>
    <?php endforeach; ?>

    <?php foreach (\$styles as \$styleName => \$style): ?>
        <?php echo \$view['ivory_ckeditor']->renderStylesSet(\$styleName, \$style); ?>
    <?php endforeach; ?>

    <?php foreach (\$templates as \$templateName => \$template): ?>
        <?php echo \$view['ivory_ckeditor']->renderTemplate(\$templateName, \$template); ?>
    <?php endforeach; ?>

    <?php \$view['slots']->set('ckeditor_widget_extra', '') ?>

    <?php echo \$view['ivory_ckeditor']->renderWidget(
        \$id,
        \$config,
        array(
            'auto_inline'  => \$auto_inline,
            'inline'       => \$inline,
            'input_sync'   => \$input_sync,
            'filebrowsers' => \$filebrowsers,
        )
    ); ?>

    <?php if (\$require_js) : ?>
        });
    <?php endif; ?>

    <?php if (\$jquery) : ?>
        });
    <?php endif; ?>
</script>
";
        
        $__internal_378388113ccff7dbd119ff7dde9738b7e5b3850ca7ad9f0dadae430b84ff80ae->leave($__internal_378388113ccff7dbd119ff7dde9738b7e5b3850ca7ad9f0dadae430b84ff80ae_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/_ckeditor_javascript.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($autoload) : ?>*/
/*     <script type="text/javascript">*/
/*         var CKEDITOR_BASEPATH = "<?php echo $view['ivory_ckeditor']->renderBasePath($base_path); ?>";*/
/*     </script>*/
/*     <script type="text/javascript" src="<?php echo $view['ivory_ckeditor']->renderJsPath($js_path); ?>"></script>*/
/*     <?php if ($jquery) : ?>*/
/*         <script type="text/javascript" src="<?php echo $view['ivory_ckeditor']->renderJsPath($jquery_path); ?>"></script>*/
/*     <?php endif; ?>*/
/* <?php endif; ?>*/
/* <script type="text/javascript">*/
/*     <?php if ($jquery) : ?>*/
/*         $(function () {*/
/*     <?php endif; ?>*/
/* */
/*     <?php if ($require_js) : ?>*/
/*         require(['ckeditor'], function() {*/
/*     <?php endif; ?>*/
/* */
/*     <?php echo $view['ivory_ckeditor']->renderDestroy($id); ?>*/
/* */
/*     <?php foreach ($plugins as $pluginName => $plugin): ?>*/
/*         <?php echo $view['ivory_ckeditor']->renderPlugin($pluginName, $plugin); ?>*/
/*     <?php endforeach; ?>*/
/* */
/*     <?php foreach ($styles as $styleName => $style): ?>*/
/*         <?php echo $view['ivory_ckeditor']->renderStylesSet($styleName, $style); ?>*/
/*     <?php endforeach; ?>*/
/* */
/*     <?php foreach ($templates as $templateName => $template): ?>*/
/*         <?php echo $view['ivory_ckeditor']->renderTemplate($templateName, $template); ?>*/
/*     <?php endforeach; ?>*/
/* */
/*     <?php $view['slots']->set('ckeditor_widget_extra', '') ?>*/
/* */
/*     <?php echo $view['ivory_ckeditor']->renderWidget(*/
/*         $id,*/
/*         $config,*/
/*         array(*/
/*             'auto_inline'  => $auto_inline,*/
/*             'inline'       => $inline,*/
/*             'input_sync'   => $input_sync,*/
/*             'filebrowsers' => $filebrowsers,*/
/*         )*/
/*     ); ?>*/
/* */
/*     <?php if ($require_js) : ?>*/
/*         });*/
/*     <?php endif; ?>*/
/* */
/*     <?php if ($jquery) : ?>*/
/*         });*/
/*     <?php endif; ?>*/
/* </script>*/
/* */