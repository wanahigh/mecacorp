<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a53b28e5982f8080752e8e67c145d751751bb7a624aff73eb0e417a7e0704424 extends Twig_Template
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
        $__internal_49a15d71a32687648281d04942bdd98721ad6fd6d11b1fd8122dab8e80a59a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a15d71a32687648281d04942bdd98721ad6fd6d11b1fd8122dab8e80a59a39->enter($__internal_49a15d71a32687648281d04942bdd98721ad6fd6d11b1fd8122dab8e80a59a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_bf7f6f0147b4750629135dfe8539e59a0a3261af6b6133b4e66f2675e6a99f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7f6f0147b4750629135dfe8539e59a0a3261af6b6133b4e66f2675e6a99f42->enter($__internal_bf7f6f0147b4750629135dfe8539e59a0a3261af6b6133b4e66f2675e6a99f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_49a15d71a32687648281d04942bdd98721ad6fd6d11b1fd8122dab8e80a59a39->leave($__internal_49a15d71a32687648281d04942bdd98721ad6fd6d11b1fd8122dab8e80a59a39_prof);

        
        $__internal_bf7f6f0147b4750629135dfe8539e59a0a3261af6b6133b4e66f2675e6a99f42->leave($__internal_bf7f6f0147b4750629135dfe8539e59a0a3261af6b6133b4e66f2675e6a99f42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
