<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_5473d1dc68a1f86a9c712de28b8e6c51c3e10773d754bb047c2b282a9996583f extends Twig_Template
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
        $__internal_49a4422dcf49b481f91238b0bf1f3b5ed21e88eed6ebc364fe009f6ec9d24eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a4422dcf49b481f91238b0bf1f3b5ed21e88eed6ebc364fe009f6ec9d24eb7->enter($__internal_49a4422dcf49b481f91238b0bf1f3b5ed21e88eed6ebc364fe009f6ec9d24eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_61c7b1544c0fa3cb9effc4ce590caddde8dec804b60fd096544765f371aea4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c7b1544c0fa3cb9effc4ce590caddde8dec804b60fd096544765f371aea4dd->enter($__internal_61c7b1544c0fa3cb9effc4ce590caddde8dec804b60fd096544765f371aea4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_49a4422dcf49b481f91238b0bf1f3b5ed21e88eed6ebc364fe009f6ec9d24eb7->leave($__internal_49a4422dcf49b481f91238b0bf1f3b5ed21e88eed6ebc364fe009f6ec9d24eb7_prof);

        
        $__internal_61c7b1544c0fa3cb9effc4ce590caddde8dec804b60fd096544765f371aea4dd->leave($__internal_61c7b1544c0fa3cb9effc4ce590caddde8dec804b60fd096544765f371aea4dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
