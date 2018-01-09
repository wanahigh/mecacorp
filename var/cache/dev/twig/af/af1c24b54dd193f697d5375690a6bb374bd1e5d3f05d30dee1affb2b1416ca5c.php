<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f7a5d2b9f086c8a79fe4d93dab60f4b3a9c5e7b70cd07131bae128eca5120a2e extends Twig_Template
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
        $__internal_d5c68d3f38a11422ca2c2d6ed8f9ca6bf5da5998a109e05ddf5807fb528158ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c68d3f38a11422ca2c2d6ed8f9ca6bf5da5998a109e05ddf5807fb528158ca->enter($__internal_d5c68d3f38a11422ca2c2d6ed8f9ca6bf5da5998a109e05ddf5807fb528158ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4d2019f5c295d8bebd38fe8c36ffe18e01147f2c880b7f779eb7afa34a8190e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2019f5c295d8bebd38fe8c36ffe18e01147f2c880b7f779eb7afa34a8190e5->enter($__internal_4d2019f5c295d8bebd38fe8c36ffe18e01147f2c880b7f779eb7afa34a8190e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d5c68d3f38a11422ca2c2d6ed8f9ca6bf5da5998a109e05ddf5807fb528158ca->leave($__internal_d5c68d3f38a11422ca2c2d6ed8f9ca6bf5da5998a109e05ddf5807fb528158ca_prof);

        
        $__internal_4d2019f5c295d8bebd38fe8c36ffe18e01147f2c880b7f779eb7afa34a8190e5->leave($__internal_4d2019f5c295d8bebd38fe8c36ffe18e01147f2c880b7f779eb7afa34a8190e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
