<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4ad9e16d8ba3b81fb203fcd895c29bc344206fda20eb928563b5dfa63a9ab230 extends Twig_Template
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
        $__internal_c61e7559cd5220c095b6cd1c55d77f0213722cabf81c405fcec8d35f0464b636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61e7559cd5220c095b6cd1c55d77f0213722cabf81c405fcec8d35f0464b636->enter($__internal_c61e7559cd5220c095b6cd1c55d77f0213722cabf81c405fcec8d35f0464b636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_15af6629040d0deff3e1c30334f1b997a5de455716c184e40410b21c893aeaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15af6629040d0deff3e1c30334f1b997a5de455716c184e40410b21c893aeaa4->enter($__internal_15af6629040d0deff3e1c30334f1b997a5de455716c184e40410b21c893aeaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c61e7559cd5220c095b6cd1c55d77f0213722cabf81c405fcec8d35f0464b636->leave($__internal_c61e7559cd5220c095b6cd1c55d77f0213722cabf81c405fcec8d35f0464b636_prof);

        
        $__internal_15af6629040d0deff3e1c30334f1b997a5de455716c184e40410b21c893aeaa4->leave($__internal_15af6629040d0deff3e1c30334f1b997a5de455716c184e40410b21c893aeaa4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
