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
        $__internal_55ac1c438f3c977c4a33cc9ef5883a533e585abb3b5d610a5b5c86f0ec13dee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ac1c438f3c977c4a33cc9ef5883a533e585abb3b5d610a5b5c86f0ec13dee2->enter($__internal_55ac1c438f3c977c4a33cc9ef5883a533e585abb3b5d610a5b5c86f0ec13dee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_c8fa9902895641e0ee79c5951858281055fb9d7d8f68bd492a0e7a773e7ccfc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fa9902895641e0ee79c5951858281055fb9d7d8f68bd492a0e7a773e7ccfc3->enter($__internal_c8fa9902895641e0ee79c5951858281055fb9d7d8f68bd492a0e7a773e7ccfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_55ac1c438f3c977c4a33cc9ef5883a533e585abb3b5d610a5b5c86f0ec13dee2->leave($__internal_55ac1c438f3c977c4a33cc9ef5883a533e585abb3b5d610a5b5c86f0ec13dee2_prof);

        
        $__internal_c8fa9902895641e0ee79c5951858281055fb9d7d8f68bd492a0e7a773e7ccfc3->leave($__internal_c8fa9902895641e0ee79c5951858281055fb9d7d8f68bd492a0e7a773e7ccfc3_prof);

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
", "@Framework/Form/form_start.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
