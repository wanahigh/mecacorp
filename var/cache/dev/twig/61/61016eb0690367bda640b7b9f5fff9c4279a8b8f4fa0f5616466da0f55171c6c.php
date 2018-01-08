<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_0db3a781764bbfc08dd08aee34f51016bdf04681250fde85aaf3ee6d74aaf487 extends Twig_Template
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
        $__internal_93d590f04b8aca8030caa2230f1b752f691329854fbf23e2f46a5b27f01bbb88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d590f04b8aca8030caa2230f1b752f691329854fbf23e2f46a5b27f01bbb88->enter($__internal_93d590f04b8aca8030caa2230f1b752f691329854fbf23e2f46a5b27f01bbb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_58e2bfedc2f7737dd47e0ddaa263796a75842add95fe46791577709353ef0b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e2bfedc2f7737dd47e0ddaa263796a75842add95fe46791577709353ef0b3c->enter($__internal_58e2bfedc2f7737dd47e0ddaa263796a75842add95fe46791577709353ef0b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_93d590f04b8aca8030caa2230f1b752f691329854fbf23e2f46a5b27f01bbb88->leave($__internal_93d590f04b8aca8030caa2230f1b752f691329854fbf23e2f46a5b27f01bbb88_prof);

        
        $__internal_58e2bfedc2f7737dd47e0ddaa263796a75842add95fe46791577709353ef0b3c->leave($__internal_58e2bfedc2f7737dd47e0ddaa263796a75842add95fe46791577709353ef0b3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/color_widget.html.php");
    }
}
