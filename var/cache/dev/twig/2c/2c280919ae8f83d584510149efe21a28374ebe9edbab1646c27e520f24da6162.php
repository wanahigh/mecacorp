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
        $__internal_3ac0b2b420a11a943020da0dec47bc2a56988b593568b1a844651297aa742cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ac0b2b420a11a943020da0dec47bc2a56988b593568b1a844651297aa742cd8->enter($__internal_3ac0b2b420a11a943020da0dec47bc2a56988b593568b1a844651297aa742cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_777d9b010a0e80c798cea14071c21eb34e0a616fe3cfd9bc700cad90615fe2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777d9b010a0e80c798cea14071c21eb34e0a616fe3cfd9bc700cad90615fe2ae->enter($__internal_777d9b010a0e80c798cea14071c21eb34e0a616fe3cfd9bc700cad90615fe2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_3ac0b2b420a11a943020da0dec47bc2a56988b593568b1a844651297aa742cd8->leave($__internal_3ac0b2b420a11a943020da0dec47bc2a56988b593568b1a844651297aa742cd8_prof);

        
        $__internal_777d9b010a0e80c798cea14071c21eb34e0a616fe3cfd9bc700cad90615fe2ae->leave($__internal_777d9b010a0e80c798cea14071c21eb34e0a616fe3cfd9bc700cad90615fe2ae_prof);

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
", "@Framework/Form/attributes.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
