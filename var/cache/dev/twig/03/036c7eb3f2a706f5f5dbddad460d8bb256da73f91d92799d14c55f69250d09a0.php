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
        $__internal_1ac8a0575f458e2c28dae5604699ebf922b05e8738d8d9b47d516f66f09f551a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac8a0575f458e2c28dae5604699ebf922b05e8738d8d9b47d516f66f09f551a->enter($__internal_1ac8a0575f458e2c28dae5604699ebf922b05e8738d8d9b47d516f66f09f551a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_cc688b94017fdd6601b488ad622ba2874fcfb15fbad6ea992908e29a19a3fe45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc688b94017fdd6601b488ad622ba2874fcfb15fbad6ea992908e29a19a3fe45->enter($__internal_cc688b94017fdd6601b488ad622ba2874fcfb15fbad6ea992908e29a19a3fe45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1ac8a0575f458e2c28dae5604699ebf922b05e8738d8d9b47d516f66f09f551a->leave($__internal_1ac8a0575f458e2c28dae5604699ebf922b05e8738d8d9b47d516f66f09f551a_prof);

        
        $__internal_cc688b94017fdd6601b488ad622ba2874fcfb15fbad6ea992908e29a19a3fe45->leave($__internal_cc688b94017fdd6601b488ad622ba2874fcfb15fbad6ea992908e29a19a3fe45_prof);

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
