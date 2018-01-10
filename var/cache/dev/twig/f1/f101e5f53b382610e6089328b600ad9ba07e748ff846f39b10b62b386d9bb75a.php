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
        $__internal_70d5d16894db71b7bce6c73357963e987d5b4dcccca6eeda20b822889e004a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d5d16894db71b7bce6c73357963e987d5b4dcccca6eeda20b822889e004a58->enter($__internal_70d5d16894db71b7bce6c73357963e987d5b4dcccca6eeda20b822889e004a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_00049e20936af8899a47db8888a71d4044cbce7cdd294a285fb7de932639bda2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00049e20936af8899a47db8888a71d4044cbce7cdd294a285fb7de932639bda2->enter($__internal_00049e20936af8899a47db8888a71d4044cbce7cdd294a285fb7de932639bda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_70d5d16894db71b7bce6c73357963e987d5b4dcccca6eeda20b822889e004a58->leave($__internal_70d5d16894db71b7bce6c73357963e987d5b4dcccca6eeda20b822889e004a58_prof);

        
        $__internal_00049e20936af8899a47db8888a71d4044cbce7cdd294a285fb7de932639bda2->leave($__internal_00049e20936af8899a47db8888a71d4044cbce7cdd294a285fb7de932639bda2_prof);

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
