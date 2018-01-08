<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_5b8ebab558dec65a360873461827b7abcd9ce6d216906857dc56cc15e6574189 extends Twig_Template
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
        $__internal_dd59291d6dc79fef946c7a3e59ec4dc17dcb209cb1580cbe5fc7ece55d14263e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd59291d6dc79fef946c7a3e59ec4dc17dcb209cb1580cbe5fc7ece55d14263e->enter($__internal_dd59291d6dc79fef946c7a3e59ec4dc17dcb209cb1580cbe5fc7ece55d14263e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_68020c1d55c4e8124a4e0b297a692085331003b3df3a5c7734475e132ddd7a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68020c1d55c4e8124a4e0b297a692085331003b3df3a5c7734475e132ddd7a20->enter($__internal_68020c1d55c4e8124a4e0b297a692085331003b3df3a5c7734475e132ddd7a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_dd59291d6dc79fef946c7a3e59ec4dc17dcb209cb1580cbe5fc7ece55d14263e->leave($__internal_dd59291d6dc79fef946c7a3e59ec4dc17dcb209cb1580cbe5fc7ece55d14263e_prof);

        
        $__internal_68020c1d55c4e8124a4e0b297a692085331003b3df3a5c7734475e132ddd7a20->leave($__internal_68020c1d55c4e8124a4e0b297a692085331003b3df3a5c7734475e132ddd7a20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
