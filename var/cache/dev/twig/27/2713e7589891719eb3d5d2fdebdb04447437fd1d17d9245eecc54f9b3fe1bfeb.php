<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_4c91cd0530434e789bebc1125d53cbffb1b0cdede9009a8abb758da1dcba61aa extends Twig_Template
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
        $__internal_941bf35f77fc68720c8b2745db686d3f0e1beb1ff5e640e88d8a398d931ba4dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941bf35f77fc68720c8b2745db686d3f0e1beb1ff5e640e88d8a398d931ba4dd->enter($__internal_941bf35f77fc68720c8b2745db686d3f0e1beb1ff5e640e88d8a398d931ba4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_18ec5adfcccdc88c48c22d5dadfb3a7b3eb6de09c2784b3ac973b42fe21bb3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ec5adfcccdc88c48c22d5dadfb3a7b3eb6de09c2784b3ac973b42fe21bb3f9->enter($__internal_18ec5adfcccdc88c48c22d5dadfb3a7b3eb6de09c2784b3ac973b42fe21bb3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_941bf35f77fc68720c8b2745db686d3f0e1beb1ff5e640e88d8a398d931ba4dd->leave($__internal_941bf35f77fc68720c8b2745db686d3f0e1beb1ff5e640e88d8a398d931ba4dd_prof);

        
        $__internal_18ec5adfcccdc88c48c22d5dadfb3a7b3eb6de09c2784b3ac973b42fe21bb3f9->leave($__internal_18ec5adfcccdc88c48c22d5dadfb3a7b3eb6de09c2784b3ac973b42fe21bb3f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
