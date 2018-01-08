<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7355ad611ff64c47efe91de44831e4453b487f1f8b1d8f9687b73c312a104c25 extends Twig_Template
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
        $__internal_fd81e62ab62903190f536bdb86c38727a917b320ea7605761d39bb7c9dee03c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd81e62ab62903190f536bdb86c38727a917b320ea7605761d39bb7c9dee03c8->enter($__internal_fd81e62ab62903190f536bdb86c38727a917b320ea7605761d39bb7c9dee03c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b4ba68013e673dc2662fe69723db3012466123b4ead7f7c09ba50578aac756b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ba68013e673dc2662fe69723db3012466123b4ead7f7c09ba50578aac756b2->enter($__internal_b4ba68013e673dc2662fe69723db3012466123b4ead7f7c09ba50578aac756b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_fd81e62ab62903190f536bdb86c38727a917b320ea7605761d39bb7c9dee03c8->leave($__internal_fd81e62ab62903190f536bdb86c38727a917b320ea7605761d39bb7c9dee03c8_prof);

        
        $__internal_b4ba68013e673dc2662fe69723db3012466123b4ead7f7c09ba50578aac756b2->leave($__internal_b4ba68013e673dc2662fe69723db3012466123b4ead7f7c09ba50578aac756b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
