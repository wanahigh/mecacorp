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
        $__internal_66f175d80fefde24ae6fa4ec86ded3169627fb085b8a46c4e30f04bfe82e8111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f175d80fefde24ae6fa4ec86ded3169627fb085b8a46c4e30f04bfe82e8111->enter($__internal_66f175d80fefde24ae6fa4ec86ded3169627fb085b8a46c4e30f04bfe82e8111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_28738002dff2ffef02d1743a784a5d35d9a9fb0b8d1d02ad80eaa15697c0722a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28738002dff2ffef02d1743a784a5d35d9a9fb0b8d1d02ad80eaa15697c0722a->enter($__internal_28738002dff2ffef02d1743a784a5d35d9a9fb0b8d1d02ad80eaa15697c0722a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_66f175d80fefde24ae6fa4ec86ded3169627fb085b8a46c4e30f04bfe82e8111->leave($__internal_66f175d80fefde24ae6fa4ec86ded3169627fb085b8a46c4e30f04bfe82e8111_prof);

        
        $__internal_28738002dff2ffef02d1743a784a5d35d9a9fb0b8d1d02ad80eaa15697c0722a->leave($__internal_28738002dff2ffef02d1743a784a5d35d9a9fb0b8d1d02ad80eaa15697c0722a_prof);

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
", "@Framework/Form/form_label.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
