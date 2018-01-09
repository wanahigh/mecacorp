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
        $__internal_c9d008b411609f925adb488c5cb0cd7aeb5931bb7b6dea67807d3de228a797a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d008b411609f925adb488c5cb0cd7aeb5931bb7b6dea67807d3de228a797a3->enter($__internal_c9d008b411609f925adb488c5cb0cd7aeb5931bb7b6dea67807d3de228a797a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_aa7391a63a378bf77256e92126ddf44a1dd232d097ab3f32a424c9409f743065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7391a63a378bf77256e92126ddf44a1dd232d097ab3f32a424c9409f743065->enter($__internal_aa7391a63a378bf77256e92126ddf44a1dd232d097ab3f32a424c9409f743065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c9d008b411609f925adb488c5cb0cd7aeb5931bb7b6dea67807d3de228a797a3->leave($__internal_c9d008b411609f925adb488c5cb0cd7aeb5931bb7b6dea67807d3de228a797a3_prof);

        
        $__internal_aa7391a63a378bf77256e92126ddf44a1dd232d097ab3f32a424c9409f743065->leave($__internal_aa7391a63a378bf77256e92126ddf44a1dd232d097ab3f32a424c9409f743065_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
