<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_dc4cce6eb1fecca8ac3240e9870e4e7f05dbcf2107541cd629db1a0230691b81 extends Twig_Template
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
        $__internal_ea740f01a14d1e708b76a78e390ef743d536605d5c05f223015b6f872c9047bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea740f01a14d1e708b76a78e390ef743d536605d5c05f223015b6f872c9047bc->enter($__internal_ea740f01a14d1e708b76a78e390ef743d536605d5c05f223015b6f872c9047bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_35c91e12ccada3b35dc376a567fcb174f6fb15765cdda52878aa4884537b5f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c91e12ccada3b35dc376a567fcb174f6fb15765cdda52878aa4884537b5f74->enter($__internal_35c91e12ccada3b35dc376a567fcb174f6fb15765cdda52878aa4884537b5f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_ea740f01a14d1e708b76a78e390ef743d536605d5c05f223015b6f872c9047bc->leave($__internal_ea740f01a14d1e708b76a78e390ef743d536605d5c05f223015b6f872c9047bc_prof);

        
        $__internal_35c91e12ccada3b35dc376a567fcb174f6fb15765cdda52878aa4884537b5f74->leave($__internal_35c91e12ccada3b35dc376a567fcb174f6fb15765cdda52878aa4884537b5f74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
