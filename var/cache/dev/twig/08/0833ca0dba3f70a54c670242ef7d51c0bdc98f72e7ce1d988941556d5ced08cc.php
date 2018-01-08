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
        $__internal_f95dd69aa8d0403bc86eb173e02dedda1e03412e3b6451ce2d6eed550b32a322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95dd69aa8d0403bc86eb173e02dedda1e03412e3b6451ce2d6eed550b32a322->enter($__internal_f95dd69aa8d0403bc86eb173e02dedda1e03412e3b6451ce2d6eed550b32a322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c26c9ef080e5ca00f4ab5df292c7523c9b7a6f5192587df5b3547a6c2eab993e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26c9ef080e5ca00f4ab5df292c7523c9b7a6f5192587df5b3547a6c2eab993e->enter($__internal_c26c9ef080e5ca00f4ab5df292c7523c9b7a6f5192587df5b3547a6c2eab993e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f95dd69aa8d0403bc86eb173e02dedda1e03412e3b6451ce2d6eed550b32a322->leave($__internal_f95dd69aa8d0403bc86eb173e02dedda1e03412e3b6451ce2d6eed550b32a322_prof);

        
        $__internal_c26c9ef080e5ca00f4ab5df292c7523c9b7a6f5192587df5b3547a6c2eab993e->leave($__internal_c26c9ef080e5ca00f4ab5df292c7523c9b7a6f5192587df5b3547a6c2eab993e_prof);

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
", "@Framework/Form/form_row.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
