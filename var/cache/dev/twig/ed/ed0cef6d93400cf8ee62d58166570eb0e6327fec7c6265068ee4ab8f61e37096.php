<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_37870e464e39ac2d6285e9f5503c73ca1a0ea4b5a7538c3aa069dcea95b386e4 extends Twig_Template
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
        $__internal_10b158ce12648e9c1e1dcf4ebc6f6642581845276d25839273e0a099f7e2a4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b158ce12648e9c1e1dcf4ebc6f6642581845276d25839273e0a099f7e2a4c7->enter($__internal_10b158ce12648e9c1e1dcf4ebc6f6642581845276d25839273e0a099f7e2a4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_f014ce73208f6386bd0bec3d3fe0143050c85b2234b125e2e95567c02e6dfca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f014ce73208f6386bd0bec3d3fe0143050c85b2234b125e2e95567c02e6dfca4->enter($__internal_f014ce73208f6386bd0bec3d3fe0143050c85b2234b125e2e95567c02e6dfca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_10b158ce12648e9c1e1dcf4ebc6f6642581845276d25839273e0a099f7e2a4c7->leave($__internal_10b158ce12648e9c1e1dcf4ebc6f6642581845276d25839273e0a099f7e2a4c7_prof);

        
        $__internal_f014ce73208f6386bd0bec3d3fe0143050c85b2234b125e2e95567c02e6dfca4->leave($__internal_f014ce73208f6386bd0bec3d3fe0143050c85b2234b125e2e95567c02e6dfca4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
