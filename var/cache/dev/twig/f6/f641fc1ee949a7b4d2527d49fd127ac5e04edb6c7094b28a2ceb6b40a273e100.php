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
        $__internal_053e3bfaac5509d77cd393eca2f432ae29d9d0d47aa68d127e6f1192403821bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_053e3bfaac5509d77cd393eca2f432ae29d9d0d47aa68d127e6f1192403821bc->enter($__internal_053e3bfaac5509d77cd393eca2f432ae29d9d0d47aa68d127e6f1192403821bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_8545ce583a554b5041ee715c72a8631a0c7d5db91c49f6d0ee1bdcab35fa05cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8545ce583a554b5041ee715c72a8631a0c7d5db91c49f6d0ee1bdcab35fa05cf->enter($__internal_8545ce583a554b5041ee715c72a8631a0c7d5db91c49f6d0ee1bdcab35fa05cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_053e3bfaac5509d77cd393eca2f432ae29d9d0d47aa68d127e6f1192403821bc->leave($__internal_053e3bfaac5509d77cd393eca2f432ae29d9d0d47aa68d127e6f1192403821bc_prof);

        
        $__internal_8545ce583a554b5041ee715c72a8631a0c7d5db91c49f6d0ee1bdcab35fa05cf->leave($__internal_8545ce583a554b5041ee715c72a8631a0c7d5db91c49f6d0ee1bdcab35fa05cf_prof);

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
", "@Framework/Form/button_row.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
