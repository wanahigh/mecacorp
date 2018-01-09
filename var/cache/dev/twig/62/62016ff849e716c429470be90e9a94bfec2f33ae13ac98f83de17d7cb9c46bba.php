<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c5c3856688829222ea36720e36b940c9be267b0fb3d9da7a850090b00572f84e extends Twig_Template
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
        $__internal_6702791f14381ec3b083da71bc1360f96f40ff2d115f83a6d8dab20b53abe7c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6702791f14381ec3b083da71bc1360f96f40ff2d115f83a6d8dab20b53abe7c9->enter($__internal_6702791f14381ec3b083da71bc1360f96f40ff2d115f83a6d8dab20b53abe7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_c372c7e5577ce4dcf3567fd75a61d5ae8a9d635f557841b0bb6cce47161ff921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c372c7e5577ce4dcf3567fd75a61d5ae8a9d635f557841b0bb6cce47161ff921->enter($__internal_c372c7e5577ce4dcf3567fd75a61d5ae8a9d635f557841b0bb6cce47161ff921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6702791f14381ec3b083da71bc1360f96f40ff2d115f83a6d8dab20b53abe7c9->leave($__internal_6702791f14381ec3b083da71bc1360f96f40ff2d115f83a6d8dab20b53abe7c9_prof);

        
        $__internal_c372c7e5577ce4dcf3567fd75a61d5ae8a9d635f557841b0bb6cce47161ff921->leave($__internal_c372c7e5577ce4dcf3567fd75a61d5ae8a9d635f557841b0bb6cce47161ff921_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
