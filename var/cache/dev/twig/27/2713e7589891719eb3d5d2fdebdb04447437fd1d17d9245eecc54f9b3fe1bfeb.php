<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_4c91cd0530434e789bebc1125d53cbffb1b0cdede9009a8abb758da1dcba61aa extends Twig_Template
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
        $__internal_97329019bd2da1a776db2cd5060c5178178db0b64490fb0bfe6496ffb93a35ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97329019bd2da1a776db2cd5060c5178178db0b64490fb0bfe6496ffb93a35ef->enter($__internal_97329019bd2da1a776db2cd5060c5178178db0b64490fb0bfe6496ffb93a35ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_dcd86fbd6254fcfc8318a64d7e8397547bb9a899fc121bc819c34ab3dbc700ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd86fbd6254fcfc8318a64d7e8397547bb9a899fc121bc819c34ab3dbc700ae->enter($__internal_dcd86fbd6254fcfc8318a64d7e8397547bb9a899fc121bc819c34ab3dbc700ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_97329019bd2da1a776db2cd5060c5178178db0b64490fb0bfe6496ffb93a35ef->leave($__internal_97329019bd2da1a776db2cd5060c5178178db0b64490fb0bfe6496ffb93a35ef_prof);

        
        $__internal_dcd86fbd6254fcfc8318a64d7e8397547bb9a899fc121bc819c34ab3dbc700ae->leave($__internal_dcd86fbd6254fcfc8318a64d7e8397547bb9a899fc121bc819c34ab3dbc700ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
