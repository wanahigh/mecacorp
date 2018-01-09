<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d0d833b348cff4b8a70395a3d76be8b0fb3687803093f8b05790d377d09ea136 extends Twig_Template
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
        $__internal_4fc6a1789facf6a98fed7e9e5281cbcf1e52a2b05c909105442da95114f5d710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fc6a1789facf6a98fed7e9e5281cbcf1e52a2b05c909105442da95114f5d710->enter($__internal_4fc6a1789facf6a98fed7e9e5281cbcf1e52a2b05c909105442da95114f5d710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_dc2b78d2d57d0cf8055c04a03dbcc84005d245b48400bdd4e369bb8f72fae2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2b78d2d57d0cf8055c04a03dbcc84005d245b48400bdd4e369bb8f72fae2a0->enter($__internal_dc2b78d2d57d0cf8055c04a03dbcc84005d245b48400bdd4e369bb8f72fae2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4fc6a1789facf6a98fed7e9e5281cbcf1e52a2b05c909105442da95114f5d710->leave($__internal_4fc6a1789facf6a98fed7e9e5281cbcf1e52a2b05c909105442da95114f5d710_prof);

        
        $__internal_dc2b78d2d57d0cf8055c04a03dbcc84005d245b48400bdd4e369bb8f72fae2a0->leave($__internal_dc2b78d2d57d0cf8055c04a03dbcc84005d245b48400bdd4e369bb8f72fae2a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
