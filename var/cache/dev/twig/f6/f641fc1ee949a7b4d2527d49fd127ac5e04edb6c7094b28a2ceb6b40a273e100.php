<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_46c3f759967b6ff6b0a20bdbaf01f9e625674567f00de7b9aaf8af92ec8ae03f extends Twig_Template
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
        $__internal_e7d73ac43cc944ee2e93f0723cdb7a21020635afd40d4b18cc23f72551cf8c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d73ac43cc944ee2e93f0723cdb7a21020635afd40d4b18cc23f72551cf8c77->enter($__internal_e7d73ac43cc944ee2e93f0723cdb7a21020635afd40d4b18cc23f72551cf8c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_990b61e66199b53348cf7bc13043d782278a2568cb83dc7bf81d1e64eeaea7e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990b61e66199b53348cf7bc13043d782278a2568cb83dc7bf81d1e64eeaea7e3->enter($__internal_990b61e66199b53348cf7bc13043d782278a2568cb83dc7bf81d1e64eeaea7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e7d73ac43cc944ee2e93f0723cdb7a21020635afd40d4b18cc23f72551cf8c77->leave($__internal_e7d73ac43cc944ee2e93f0723cdb7a21020635afd40d4b18cc23f72551cf8c77_prof);

        
        $__internal_990b61e66199b53348cf7bc13043d782278a2568cb83dc7bf81d1e64eeaea7e3->leave($__internal_990b61e66199b53348cf7bc13043d782278a2568cb83dc7bf81d1e64eeaea7e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
