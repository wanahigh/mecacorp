<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_f6188786af38a32fa07c4f61e38bfd207b7556d7914168071e04ee4ea46a865d extends Twig_Template
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
        $__internal_e714b3bdc84903b10128f7883c2bdfb7b600bffd023af8b0e3e6ad9c6acd682b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e714b3bdc84903b10128f7883c2bdfb7b600bffd023af8b0e3e6ad9c6acd682b->enter($__internal_e714b3bdc84903b10128f7883c2bdfb7b600bffd023af8b0e3e6ad9c6acd682b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_5be61ad4f7677a98624fa57c763f565938827a2478b8af69eb2f62b3f454aca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be61ad4f7677a98624fa57c763f565938827a2478b8af69eb2f62b3f454aca7->enter($__internal_5be61ad4f7677a98624fa57c763f565938827a2478b8af69eb2f62b3f454aca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e714b3bdc84903b10128f7883c2bdfb7b600bffd023af8b0e3e6ad9c6acd682b->leave($__internal_e714b3bdc84903b10128f7883c2bdfb7b600bffd023af8b0e3e6ad9c6acd682b_prof);

        
        $__internal_5be61ad4f7677a98624fa57c763f565938827a2478b8af69eb2f62b3f454aca7->leave($__internal_5be61ad4f7677a98624fa57c763f565938827a2478b8af69eb2f62b3f454aca7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
