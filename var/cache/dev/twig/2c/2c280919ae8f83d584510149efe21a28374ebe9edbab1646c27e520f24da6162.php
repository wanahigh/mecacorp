<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a7c735149267ccee2f143b171693503e3a032dd2ed16c927f0dabb7526b50964 extends Twig_Template
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
        $__internal_4b5528e714aab23231841c7f1177b621c3e53cfaab85c61481d39e46b6e4694f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5528e714aab23231841c7f1177b621c3e53cfaab85c61481d39e46b6e4694f->enter($__internal_4b5528e714aab23231841c7f1177b621c3e53cfaab85c61481d39e46b6e4694f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a2a89721659d871965b701ae52a76162e0887817843d841eb3edc95947d532e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a89721659d871965b701ae52a76162e0887817843d841eb3edc95947d532e3->enter($__internal_a2a89721659d871965b701ae52a76162e0887817843d841eb3edc95947d532e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4b5528e714aab23231841c7f1177b621c3e53cfaab85c61481d39e46b6e4694f->leave($__internal_4b5528e714aab23231841c7f1177b621c3e53cfaab85c61481d39e46b6e4694f_prof);

        
        $__internal_a2a89721659d871965b701ae52a76162e0887817843d841eb3edc95947d532e3->leave($__internal_a2a89721659d871965b701ae52a76162e0887817843d841eb3edc95947d532e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
