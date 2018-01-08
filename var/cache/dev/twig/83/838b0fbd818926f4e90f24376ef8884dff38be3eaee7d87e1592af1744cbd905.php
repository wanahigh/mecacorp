<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_15f069cedc5222e085e91114fd34d50f5d96f1c14f7b7ec92fa092cef29c5355 extends Twig_Template
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
        $__internal_cb20e2b7a92b7fd49cf490257c0f13d71a859bc5deeac34d99ca346f9822f5f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb20e2b7a92b7fd49cf490257c0f13d71a859bc5deeac34d99ca346f9822f5f5->enter($__internal_cb20e2b7a92b7fd49cf490257c0f13d71a859bc5deeac34d99ca346f9822f5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_7f5c8c908a5097e4af60317b213f30d1890695091351c28776c752fbc52b3b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5c8c908a5097e4af60317b213f30d1890695091351c28776c752fbc52b3b2c->enter($__internal_7f5c8c908a5097e4af60317b213f30d1890695091351c28776c752fbc52b3b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_cb20e2b7a92b7fd49cf490257c0f13d71a859bc5deeac34d99ca346f9822f5f5->leave($__internal_cb20e2b7a92b7fd49cf490257c0f13d71a859bc5deeac34d99ca346f9822f5f5_prof);

        
        $__internal_7f5c8c908a5097e4af60317b213f30d1890695091351c28776c752fbc52b3b2c->leave($__internal_7f5c8c908a5097e4af60317b213f30d1890695091351c28776c752fbc52b3b2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
