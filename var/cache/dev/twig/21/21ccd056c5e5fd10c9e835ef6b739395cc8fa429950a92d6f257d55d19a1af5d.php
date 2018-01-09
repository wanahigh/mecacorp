<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d6f9dfafaecda196cb169290856e9e7b85ee9737e1def44c50346eaad9fd3a1a extends Twig_Template
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
        $__internal_92d1475bd62fd50fcd27c9da0b613c55ceda55360a9a5e61621405cd53ab2ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92d1475bd62fd50fcd27c9da0b613c55ceda55360a9a5e61621405cd53ab2ef5->enter($__internal_92d1475bd62fd50fcd27c9da0b613c55ceda55360a9a5e61621405cd53ab2ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c28f87cfa6ac0e35671b26ac8dc0e3568ac2618132f75bbbeaf889338c207a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28f87cfa6ac0e35671b26ac8dc0e3568ac2618132f75bbbeaf889338c207a39->enter($__internal_c28f87cfa6ac0e35671b26ac8dc0e3568ac2618132f75bbbeaf889338c207a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_92d1475bd62fd50fcd27c9da0b613c55ceda55360a9a5e61621405cd53ab2ef5->leave($__internal_92d1475bd62fd50fcd27c9da0b613c55ceda55360a9a5e61621405cd53ab2ef5_prof);

        
        $__internal_c28f87cfa6ac0e35671b26ac8dc0e3568ac2618132f75bbbeaf889338c207a39->leave($__internal_c28f87cfa6ac0e35671b26ac8dc0e3568ac2618132f75bbbeaf889338c207a39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
