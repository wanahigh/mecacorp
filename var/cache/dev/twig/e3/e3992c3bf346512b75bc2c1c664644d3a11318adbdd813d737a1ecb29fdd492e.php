<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_061980cc0a41bd25ca39e50f1ba24a846607bc0c8b28faec05f362cd55acf155 extends Twig_Template
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
        $__internal_22b1cda3b050db04182affbef714f9c19e78f9da26051d01b8a3dce5a94d7050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b1cda3b050db04182affbef714f9c19e78f9da26051d01b8a3dce5a94d7050->enter($__internal_22b1cda3b050db04182affbef714f9c19e78f9da26051d01b8a3dce5a94d7050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_5982cb9675dc71073e65cdecb67780a00b3c2aa7a7223d3ad51fe78ddd438747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5982cb9675dc71073e65cdecb67780a00b3c2aa7a7223d3ad51fe78ddd438747->enter($__internal_5982cb9675dc71073e65cdecb67780a00b3c2aa7a7223d3ad51fe78ddd438747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_22b1cda3b050db04182affbef714f9c19e78f9da26051d01b8a3dce5a94d7050->leave($__internal_22b1cda3b050db04182affbef714f9c19e78f9da26051d01b8a3dce5a94d7050_prof);

        
        $__internal_5982cb9675dc71073e65cdecb67780a00b3c2aa7a7223d3ad51fe78ddd438747->leave($__internal_5982cb9675dc71073e65cdecb67780a00b3c2aa7a7223d3ad51fe78ddd438747_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
