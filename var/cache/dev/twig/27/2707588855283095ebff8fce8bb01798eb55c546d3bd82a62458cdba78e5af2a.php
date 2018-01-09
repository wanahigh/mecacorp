<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_38c4471a2cdf8447a28e672e16fa0c667e22b5725c80977a9ee61d37f761a5da extends Twig_Template
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
        $__internal_ff71f7bf42689ab1897b87f659bf330c9eb0c4cd2dfd92aa58d289bc65868259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff71f7bf42689ab1897b87f659bf330c9eb0c4cd2dfd92aa58d289bc65868259->enter($__internal_ff71f7bf42689ab1897b87f659bf330c9eb0c4cd2dfd92aa58d289bc65868259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_63d1e8e49f957cb7df32759c589668b862de851bafbb50c2ea15295be677b71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d1e8e49f957cb7df32759c589668b862de851bafbb50c2ea15295be677b71e->enter($__internal_63d1e8e49f957cb7df32759c589668b862de851bafbb50c2ea15295be677b71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ff71f7bf42689ab1897b87f659bf330c9eb0c4cd2dfd92aa58d289bc65868259->leave($__internal_ff71f7bf42689ab1897b87f659bf330c9eb0c4cd2dfd92aa58d289bc65868259_prof);

        
        $__internal_63d1e8e49f957cb7df32759c589668b862de851bafbb50c2ea15295be677b71e->leave($__internal_63d1e8e49f957cb7df32759c589668b862de851bafbb50c2ea15295be677b71e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
