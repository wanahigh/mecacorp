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
        $__internal_f52bb716993e0c4245a1dbcfd7255090a9a7b5ed36a7b1b6df44ac3ce54f941a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52bb716993e0c4245a1dbcfd7255090a9a7b5ed36a7b1b6df44ac3ce54f941a->enter($__internal_f52bb716993e0c4245a1dbcfd7255090a9a7b5ed36a7b1b6df44ac3ce54f941a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_dfc61480b3cc397ad54b577975831d5dd318c43c8edb6f041332017a62be7b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc61480b3cc397ad54b577975831d5dd318c43c8edb6f041332017a62be7b68->enter($__internal_dfc61480b3cc397ad54b577975831d5dd318c43c8edb6f041332017a62be7b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f52bb716993e0c4245a1dbcfd7255090a9a7b5ed36a7b1b6df44ac3ce54f941a->leave($__internal_f52bb716993e0c4245a1dbcfd7255090a9a7b5ed36a7b1b6df44ac3ce54f941a_prof);

        
        $__internal_dfc61480b3cc397ad54b577975831d5dd318c43c8edb6f041332017a62be7b68->leave($__internal_dfc61480b3cc397ad54b577975831d5dd318c43c8edb6f041332017a62be7b68_prof);

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
", "@Framework/Form/form_row.html.php", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
