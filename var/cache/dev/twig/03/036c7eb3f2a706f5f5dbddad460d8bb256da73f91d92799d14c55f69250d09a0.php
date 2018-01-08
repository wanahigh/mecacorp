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
        $__internal_e34a50df4fcfd54d6353ad90f16e2efbae7e18e9725fbd7b90dbdd037fda4082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e34a50df4fcfd54d6353ad90f16e2efbae7e18e9725fbd7b90dbdd037fda4082->enter($__internal_e34a50df4fcfd54d6353ad90f16e2efbae7e18e9725fbd7b90dbdd037fda4082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_cf8481fd26be78312629c3d9f8a48a4c3058a70735e0ee825df299e52f2f5b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8481fd26be78312629c3d9f8a48a4c3058a70735e0ee825df299e52f2f5b15->enter($__internal_cf8481fd26be78312629c3d9f8a48a4c3058a70735e0ee825df299e52f2f5b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e34a50df4fcfd54d6353ad90f16e2efbae7e18e9725fbd7b90dbdd037fda4082->leave($__internal_e34a50df4fcfd54d6353ad90f16e2efbae7e18e9725fbd7b90dbdd037fda4082_prof);

        
        $__internal_cf8481fd26be78312629c3d9f8a48a4c3058a70735e0ee825df299e52f2f5b15->leave($__internal_cf8481fd26be78312629c3d9f8a48a4c3058a70735e0ee825df299e52f2f5b15_prof);

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
", "@Framework/Form/reset_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
