<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8d04ce0684012f4ff1a95b103c081235fb3bd82af8ba75ffbccadadc71f3afee extends Twig_Template
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
        $__internal_3026b2c095f071e219b943317cb5d4153a4884ef17b673442492662b2b3546ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3026b2c095f071e219b943317cb5d4153a4884ef17b673442492662b2b3546ee->enter($__internal_3026b2c095f071e219b943317cb5d4153a4884ef17b673442492662b2b3546ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8a1ab8a6d97bb874f36cf3883cb405c963015c4dbe4277e99c10dbd00710ddb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1ab8a6d97bb874f36cf3883cb405c963015c4dbe4277e99c10dbd00710ddb6->enter($__internal_8a1ab8a6d97bb874f36cf3883cb405c963015c4dbe4277e99c10dbd00710ddb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3026b2c095f071e219b943317cb5d4153a4884ef17b673442492662b2b3546ee->leave($__internal_3026b2c095f071e219b943317cb5d4153a4884ef17b673442492662b2b3546ee_prof);

        
        $__internal_8a1ab8a6d97bb874f36cf3883cb405c963015c4dbe4277e99c10dbd00710ddb6->leave($__internal_8a1ab8a6d97bb874f36cf3883cb405c963015c4dbe4277e99c10dbd00710ddb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
