<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_29ea1927a94c79197461b2283fb4e5bee33b92bbf0f580d1c8c523ba9d01e6cf extends Twig_Template
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
        $__internal_51545bb8b5c055c83fe999779da6e25b0de77b4e6c94f053c33d2e4cd70eb718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51545bb8b5c055c83fe999779da6e25b0de77b4e6c94f053c33d2e4cd70eb718->enter($__internal_51545bb8b5c055c83fe999779da6e25b0de77b4e6c94f053c33d2e4cd70eb718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_741b6d5b1cfc930a78551e3e3eac6276f1ce71c717a3ebe4e12ce5f17611ad90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741b6d5b1cfc930a78551e3e3eac6276f1ce71c717a3ebe4e12ce5f17611ad90->enter($__internal_741b6d5b1cfc930a78551e3e3eac6276f1ce71c717a3ebe4e12ce5f17611ad90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_51545bb8b5c055c83fe999779da6e25b0de77b4e6c94f053c33d2e4cd70eb718->leave($__internal_51545bb8b5c055c83fe999779da6e25b0de77b4e6c94f053c33d2e4cd70eb718_prof);

        
        $__internal_741b6d5b1cfc930a78551e3e3eac6276f1ce71c717a3ebe4e12ce5f17611ad90->leave($__internal_741b6d5b1cfc930a78551e3e3eac6276f1ce71c717a3ebe4e12ce5f17611ad90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
