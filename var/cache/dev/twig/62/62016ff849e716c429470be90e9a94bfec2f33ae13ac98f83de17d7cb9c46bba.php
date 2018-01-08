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
        $__internal_67b2457f02ccba8de60eaaf1430beb5b8d73a19b5e0e7a5c4bf21de6e6c0411a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b2457f02ccba8de60eaaf1430beb5b8d73a19b5e0e7a5c4bf21de6e6c0411a->enter($__internal_67b2457f02ccba8de60eaaf1430beb5b8d73a19b5e0e7a5c4bf21de6e6c0411a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_f160609502d14ce95ca6051e03e36e214fb16c7252062777db259b506f95efe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f160609502d14ce95ca6051e03e36e214fb16c7252062777db259b506f95efe8->enter($__internal_f160609502d14ce95ca6051e03e36e214fb16c7252062777db259b506f95efe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_67b2457f02ccba8de60eaaf1430beb5b8d73a19b5e0e7a5c4bf21de6e6c0411a->leave($__internal_67b2457f02ccba8de60eaaf1430beb5b8d73a19b5e0e7a5c4bf21de6e6c0411a_prof);

        
        $__internal_f160609502d14ce95ca6051e03e36e214fb16c7252062777db259b506f95efe8->leave($__internal_f160609502d14ce95ca6051e03e36e214fb16c7252062777db259b506f95efe8_prof);

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
", "@Framework/FormTable/button_row.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
