<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_22f5431c383bec2fbfb3276008024d2904473e302062fa3d5f87e18451c5f376 extends Twig_Template
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
        $__internal_f4cb7e042fe3b7b9c3b390773a917082106e2796db3447d0d3afb9db2d9f398c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4cb7e042fe3b7b9c3b390773a917082106e2796db3447d0d3afb9db2d9f398c->enter($__internal_f4cb7e042fe3b7b9c3b390773a917082106e2796db3447d0d3afb9db2d9f398c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_fbe2adb2e3459a169a9a52716253ee9bec00d6ccfd12c670e08c55ce197d766f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe2adb2e3459a169a9a52716253ee9bec00d6ccfd12c670e08c55ce197d766f->enter($__internal_fbe2adb2e3459a169a9a52716253ee9bec00d6ccfd12c670e08c55ce197d766f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f4cb7e042fe3b7b9c3b390773a917082106e2796db3447d0d3afb9db2d9f398c->leave($__internal_f4cb7e042fe3b7b9c3b390773a917082106e2796db3447d0d3afb9db2d9f398c_prof);

        
        $__internal_fbe2adb2e3459a169a9a52716253ee9bec00d6ccfd12c670e08c55ce197d766f->leave($__internal_fbe2adb2e3459a169a9a52716253ee9bec00d6ccfd12c670e08c55ce197d766f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
