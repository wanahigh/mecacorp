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
        $__internal_a85dad578598c585ea590989cd26f895c8aefe4320e7e41671ecfe9b32e841c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a85dad578598c585ea590989cd26f895c8aefe4320e7e41671ecfe9b32e841c8->enter($__internal_a85dad578598c585ea590989cd26f895c8aefe4320e7e41671ecfe9b32e841c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_cfe639a44aa2bc5c705676070d80ebb6a2c69730c169f65748e6948f4c8602d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe639a44aa2bc5c705676070d80ebb6a2c69730c169f65748e6948f4c8602d9->enter($__internal_cfe639a44aa2bc5c705676070d80ebb6a2c69730c169f65748e6948f4c8602d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a85dad578598c585ea590989cd26f895c8aefe4320e7e41671ecfe9b32e841c8->leave($__internal_a85dad578598c585ea590989cd26f895c8aefe4320e7e41671ecfe9b32e841c8_prof);

        
        $__internal_cfe639a44aa2bc5c705676070d80ebb6a2c69730c169f65748e6948f4c8602d9->leave($__internal_cfe639a44aa2bc5c705676070d80ebb6a2c69730c169f65748e6948f4c8602d9_prof);

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
", "@Framework/Form/button_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
