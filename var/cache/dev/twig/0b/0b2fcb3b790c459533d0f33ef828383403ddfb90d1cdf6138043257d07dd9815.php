<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_80426cbc711955738c8439c81332443fb4141726327bfca928ee64b1a6a599a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_701cb353966f1d1cb01844ded262693472823fa65bad9335c7fd048dfc923460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701cb353966f1d1cb01844ded262693472823fa65bad9335c7fd048dfc923460->enter($__internal_701cb353966f1d1cb01844ded262693472823fa65bad9335c7fd048dfc923460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_21563797c494c3151c1fb2166c57260d295b2ec419afd4a408cd94a6a075f750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21563797c494c3151c1fb2166c57260d295b2ec419afd4a408cd94a6a075f750->enter($__internal_21563797c494c3151c1fb2166c57260d295b2ec419afd4a408cd94a6a075f750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_701cb353966f1d1cb01844ded262693472823fa65bad9335c7fd048dfc923460->leave($__internal_701cb353966f1d1cb01844ded262693472823fa65bad9335c7fd048dfc923460_prof);

        
        $__internal_21563797c494c3151c1fb2166c57260d295b2ec419afd4a408cd94a6a075f750->leave($__internal_21563797c494c3151c1fb2166c57260d295b2ec419afd4a408cd94a6a075f750_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_890684268280a85c204824c896094c72157a7fe0aa119a514bdb87efd39f62c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890684268280a85c204824c896094c72157a7fe0aa119a514bdb87efd39f62c5->enter($__internal_890684268280a85c204824c896094c72157a7fe0aa119a514bdb87efd39f62c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_57981705e0898bc85b9051bc3cdca829e69ff15667c5ffd27148b017bfb82d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57981705e0898bc85b9051bc3cdca829e69ff15667c5ffd27148b017bfb82d26->enter($__internal_57981705e0898bc85b9051bc3cdca829e69ff15667c5ffd27148b017bfb82d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_57981705e0898bc85b9051bc3cdca829e69ff15667c5ffd27148b017bfb82d26->leave($__internal_57981705e0898bc85b9051bc3cdca829e69ff15667c5ffd27148b017bfb82d26_prof);

        
        $__internal_890684268280a85c204824c896094c72157a7fe0aa119a514bdb87efd39f62c5->leave($__internal_890684268280a85c204824c896094c72157a7fe0aa119a514bdb87efd39f62c5_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_8bc4bb3ad43492472eea3a2cf7492643f12fce35147ec914ac18cd2dc370b866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc4bb3ad43492472eea3a2cf7492643f12fce35147ec914ac18cd2dc370b866->enter($__internal_8bc4bb3ad43492472eea3a2cf7492643f12fce35147ec914ac18cd2dc370b866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_4e490e72139d0b18334b4624d6960bef9dff8be235090f530aad45ecf2046c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e490e72139d0b18334b4624d6960bef9dff8be235090f530aad45ecf2046c7c->enter($__internal_4e490e72139d0b18334b4624d6960bef9dff8be235090f530aad45ecf2046c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_4e490e72139d0b18334b4624d6960bef9dff8be235090f530aad45ecf2046c7c->leave($__internal_4e490e72139d0b18334b4624d6960bef9dff8be235090f530aad45ecf2046c7c_prof);

        
        $__internal_8bc4bb3ad43492472eea3a2cf7492643f12fce35147ec914ac18cd2dc370b866->leave($__internal_8bc4bb3ad43492472eea3a2cf7492643f12fce35147ec914ac18cd2dc370b866_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_25cf767933c6fb68b775889af358322cea8c8ea7b27e94407a3292cb6dad7422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25cf767933c6fb68b775889af358322cea8c8ea7b27e94407a3292cb6dad7422->enter($__internal_25cf767933c6fb68b775889af358322cea8c8ea7b27e94407a3292cb6dad7422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6b502d0db104a311c21a0f0ea00eac2d31743b5b35477a3b0060d21237c7dc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b502d0db104a311c21a0f0ea00eac2d31743b5b35477a3b0060d21237c7dc5e->enter($__internal_6b502d0db104a311c21a0f0ea00eac2d31743b5b35477a3b0060d21237c7dc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_6b502d0db104a311c21a0f0ea00eac2d31743b5b35477a3b0060d21237c7dc5e->leave($__internal_6b502d0db104a311c21a0f0ea00eac2d31743b5b35477a3b0060d21237c7dc5e_prof);

        
        $__internal_25cf767933c6fb68b775889af358322cea8c8ea7b27e94407a3292cb6dad7422->leave($__internal_25cf767933c6fb68b775889af358322cea8c8ea7b27e94407a3292cb6dad7422_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_fa528a0f688d66c2f3200130f306707a1660fe1cea6c6a5142c04ed7cb47ad54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa528a0f688d66c2f3200130f306707a1660fe1cea6c6a5142c04ed7cb47ad54->enter($__internal_fa528a0f688d66c2f3200130f306707a1660fe1cea6c6a5142c04ed7cb47ad54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_b60ab36a64975a15e698a014682c38aa18955a8c6060a8d513ac18e5919ce522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60ab36a64975a15e698a014682c38aa18955a8c6060a8d513ac18e5919ce522->enter($__internal_b60ab36a64975a15e698a014682c38aa18955a8c6060a8d513ac18e5919ce522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_b60ab36a64975a15e698a014682c38aa18955a8c6060a8d513ac18e5919ce522->leave($__internal_b60ab36a64975a15e698a014682c38aa18955a8c6060a8d513ac18e5919ce522_prof);

        
        $__internal_fa528a0f688d66c2f3200130f306707a1660fe1cea6c6a5142c04ed7cb47ad54->leave($__internal_fa528a0f688d66c2f3200130f306707a1660fe1cea6c6a5142c04ed7cb47ad54_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_957dedd5abfc73dd85ac2f006df226444ddd783c0227218e09494c5434549d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_957dedd5abfc73dd85ac2f006df226444ddd783c0227218e09494c5434549d03->enter($__internal_957dedd5abfc73dd85ac2f006df226444ddd783c0227218e09494c5434549d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_d206d363d7eb33a98883637a1241136fa60ba9290c36b54b4e37d89c3026d1b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d206d363d7eb33a98883637a1241136fa60ba9290c36b54b4e37d89c3026d1b9->enter($__internal_d206d363d7eb33a98883637a1241136fa60ba9290c36b54b4e37d89c3026d1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_d206d363d7eb33a98883637a1241136fa60ba9290c36b54b4e37d89c3026d1b9->leave($__internal_d206d363d7eb33a98883637a1241136fa60ba9290c36b54b4e37d89c3026d1b9_prof);

        
        $__internal_957dedd5abfc73dd85ac2f006df226444ddd783c0227218e09494c5434549d03->leave($__internal_957dedd5abfc73dd85ac2f006df226444ddd783c0227218e09494c5434549d03_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_c9d73e3f6f9820c99f9428bd16470066ab62ac4230b69941af4561577fb8e744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d73e3f6f9820c99f9428bd16470066ab62ac4230b69941af4561577fb8e744->enter($__internal_c9d73e3f6f9820c99f9428bd16470066ab62ac4230b69941af4561577fb8e744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_b5bbe2e18b4244bed8a18f5d837f51addbfb97ab8a30448e31fb923e814710e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5bbe2e18b4244bed8a18f5d837f51addbfb97ab8a30448e31fb923e814710e9->enter($__internal_b5bbe2e18b4244bed8a18f5d837f51addbfb97ab8a30448e31fb923e814710e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_b5bbe2e18b4244bed8a18f5d837f51addbfb97ab8a30448e31fb923e814710e9->leave($__internal_b5bbe2e18b4244bed8a18f5d837f51addbfb97ab8a30448e31fb923e814710e9_prof);

        
        $__internal_c9d73e3f6f9820c99f9428bd16470066ab62ac4230b69941af4561577fb8e744->leave($__internal_c9d73e3f6f9820c99f9428bd16470066ab62ac4230b69941af4561577fb8e744_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_fbfb2c7e29c6667868d370905c0b8093b69549832f2f5dafb4ac255ef5120cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbfb2c7e29c6667868d370905c0b8093b69549832f2f5dafb4ac255ef5120cc7->enter($__internal_fbfb2c7e29c6667868d370905c0b8093b69549832f2f5dafb4ac255ef5120cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_d09724cb8a43a948db994689608f134eedab4375a1915209a04cfbf51ef95696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09724cb8a43a948db994689608f134eedab4375a1915209a04cfbf51ef95696->enter($__internal_d09724cb8a43a948db994689608f134eedab4375a1915209a04cfbf51ef95696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_d09724cb8a43a948db994689608f134eedab4375a1915209a04cfbf51ef95696->leave($__internal_d09724cb8a43a948db994689608f134eedab4375a1915209a04cfbf51ef95696_prof);

        
        $__internal_fbfb2c7e29c6667868d370905c0b8093b69549832f2f5dafb4ac255ef5120cc7->leave($__internal_fbfb2c7e29c6667868d370905c0b8093b69549832f2f5dafb4ac255ef5120cc7_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_fb0a0d35eabe4d0d20dc21f04b65546480871c63f1448cac1071a21be8fc86ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0a0d35eabe4d0d20dc21f04b65546480871c63f1448cac1071a21be8fc86ac->enter($__internal_fb0a0d35eabe4d0d20dc21f04b65546480871c63f1448cac1071a21be8fc86ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_857bd5b6eccf1b089e93736593e885ac70866833b10a2b36d71e80e8d539fa8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857bd5b6eccf1b089e93736593e885ac70866833b10a2b36d71e80e8d539fa8a->enter($__internal_857bd5b6eccf1b089e93736593e885ac70866833b10a2b36d71e80e8d539fa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_857bd5b6eccf1b089e93736593e885ac70866833b10a2b36d71e80e8d539fa8a->leave($__internal_857bd5b6eccf1b089e93736593e885ac70866833b10a2b36d71e80e8d539fa8a_prof);

        
        $__internal_fb0a0d35eabe4d0d20dc21f04b65546480871c63f1448cac1071a21be8fc86ac->leave($__internal_fb0a0d35eabe4d0d20dc21f04b65546480871c63f1448cac1071a21be8fc86ac_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
