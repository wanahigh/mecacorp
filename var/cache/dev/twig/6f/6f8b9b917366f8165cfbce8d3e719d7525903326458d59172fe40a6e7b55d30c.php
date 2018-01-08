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
        $__internal_cbd03604ffde15ccc9a6b30a0a7287e801a4e7bb99827ba41f1b533b4ef5e539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd03604ffde15ccc9a6b30a0a7287e801a4e7bb99827ba41f1b533b4ef5e539->enter($__internal_cbd03604ffde15ccc9a6b30a0a7287e801a4e7bb99827ba41f1b533b4ef5e539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3b70d3502a7e34841216c29a73f6fcc3336192c6a14dab4f96cf1be195757965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b70d3502a7e34841216c29a73f6fcc3336192c6a14dab4f96cf1be195757965->enter($__internal_3b70d3502a7e34841216c29a73f6fcc3336192c6a14dab4f96cf1be195757965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_cbd03604ffde15ccc9a6b30a0a7287e801a4e7bb99827ba41f1b533b4ef5e539->leave($__internal_cbd03604ffde15ccc9a6b30a0a7287e801a4e7bb99827ba41f1b533b4ef5e539_prof);

        
        $__internal_3b70d3502a7e34841216c29a73f6fcc3336192c6a14dab4f96cf1be195757965->leave($__internal_3b70d3502a7e34841216c29a73f6fcc3336192c6a14dab4f96cf1be195757965_prof);

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
", "@Framework/Form/form_enctype.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
