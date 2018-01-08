<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_5720d3caf1c7578feb036e3508052a69c8e666331ff2b08e97376754a56c2c03 extends Twig_Template
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
        $__internal_f0eb452cd66c6866607609c8daaad02f6b673ed6ec2a4f78390d523debb627d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0eb452cd66c6866607609c8daaad02f6b673ed6ec2a4f78390d523debb627d0->enter($__internal_f0eb452cd66c6866607609c8daaad02f6b673ed6ec2a4f78390d523debb627d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_583a17fe8b44d8b39b797432742bc4b6e86d2b39d474d2318fa606597ad1b647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583a17fe8b44d8b39b797432742bc4b6e86d2b39d474d2318fa606597ad1b647->enter($__internal_583a17fe8b44d8b39b797432742bc4b6e86d2b39d474d2318fa606597ad1b647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f0eb452cd66c6866607609c8daaad02f6b673ed6ec2a4f78390d523debb627d0->leave($__internal_f0eb452cd66c6866607609c8daaad02f6b673ed6ec2a4f78390d523debb627d0_prof);

        
        $__internal_583a17fe8b44d8b39b797432742bc4b6e86d2b39d474d2318fa606597ad1b647->leave($__internal_583a17fe8b44d8b39b797432742bc4b6e86d2b39d474d2318fa606597ad1b647_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
