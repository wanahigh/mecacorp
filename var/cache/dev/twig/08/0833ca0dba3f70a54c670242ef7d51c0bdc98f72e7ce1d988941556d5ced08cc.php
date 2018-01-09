<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ce76c4ff3c9762b85122b59e7dadd2975a15006874fd7211de8e11e3323bbdb2 extends Twig_Template
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
        $__internal_d65fb14bc3d9edb4581b54f98ad71ec94609fc9044f0796a68781ed11f33e072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65fb14bc3d9edb4581b54f98ad71ec94609fc9044f0796a68781ed11f33e072->enter($__internal_d65fb14bc3d9edb4581b54f98ad71ec94609fc9044f0796a68781ed11f33e072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_456d935815b819470550598fec7fb5d154ccb7f6b74ed1189362b496c105c743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456d935815b819470550598fec7fb5d154ccb7f6b74ed1189362b496c105c743->enter($__internal_456d935815b819470550598fec7fb5d154ccb7f6b74ed1189362b496c105c743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d65fb14bc3d9edb4581b54f98ad71ec94609fc9044f0796a68781ed11f33e072->leave($__internal_d65fb14bc3d9edb4581b54f98ad71ec94609fc9044f0796a68781ed11f33e072_prof);

        
        $__internal_456d935815b819470550598fec7fb5d154ccb7f6b74ed1189362b496c105c743->leave($__internal_456d935815b819470550598fec7fb5d154ccb7f6b74ed1189362b496c105c743_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
