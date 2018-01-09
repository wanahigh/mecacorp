<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6de2fa242f8a1f8aac6c1384eb09f6ddffbc592b2a5d80cff232f2dbd8d0bdf6 extends Twig_Template
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
        $__internal_1574d73edf9a233c2a04b9ea05b59f6baef20426b87d41c3b4cb0b63f439b41b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1574d73edf9a233c2a04b9ea05b59f6baef20426b87d41c3b4cb0b63f439b41b->enter($__internal_1574d73edf9a233c2a04b9ea05b59f6baef20426b87d41c3b4cb0b63f439b41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_8384e714fa1957c40c92ed61e356aebde0dd21b3e8aa0cf6f412b31d9e055a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8384e714fa1957c40c92ed61e356aebde0dd21b3e8aa0cf6f412b31d9e055a8a->enter($__internal_8384e714fa1957c40c92ed61e356aebde0dd21b3e8aa0cf6f412b31d9e055a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1574d73edf9a233c2a04b9ea05b59f6baef20426b87d41c3b4cb0b63f439b41b->leave($__internal_1574d73edf9a233c2a04b9ea05b59f6baef20426b87d41c3b4cb0b63f439b41b_prof);

        
        $__internal_8384e714fa1957c40c92ed61e356aebde0dd21b3e8aa0cf6f412b31d9e055a8a->leave($__internal_8384e714fa1957c40c92ed61e356aebde0dd21b3e8aa0cf6f412b31d9e055a8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
