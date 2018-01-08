<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_436173ee8ba73bf034216d9717b472352793ffc9cb0f4c8f8f9387b946d90b6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9fb4832524271b4b9ec839bd3477b50efdc05263518d8e7fbef041381516114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9fb4832524271b4b9ec839bd3477b50efdc05263518d8e7fbef041381516114->enter($__internal_a9fb4832524271b4b9ec839bd3477b50efdc05263518d8e7fbef041381516114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_81f4a0582dfb2b686eda1f8de24262e31f131e1c4d3f5f20f072003047e2d78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f4a0582dfb2b686eda1f8de24262e31f131e1c4d3f5f20f072003047e2d78f->enter($__internal_81f4a0582dfb2b686eda1f8de24262e31f131e1c4d3f5f20f072003047e2d78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_a9fb4832524271b4b9ec839bd3477b50efdc05263518d8e7fbef041381516114->leave($__internal_a9fb4832524271b4b9ec839bd3477b50efdc05263518d8e7fbef041381516114_prof);

        
        $__internal_81f4a0582dfb2b686eda1f8de24262e31f131e1c4d3f5f20f072003047e2d78f->leave($__internal_81f4a0582dfb2b686eda1f8de24262e31f131e1c4d3f5f20f072003047e2d78f_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_f4f22bb58ae38600a0b76687688ce29997abddf35335940b3c583ac18883c6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f22bb58ae38600a0b76687688ce29997abddf35335940b3c583ac18883c6b5->enter($__internal_f4f22bb58ae38600a0b76687688ce29997abddf35335940b3c583ac18883c6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_1ee7b6dda87f820db38ed1a3d1ece3f3d75d588d3bf844f744c0155e1bb3e497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee7b6dda87f820db38ed1a3d1ece3f3d75d588d3bf844f744c0155e1bb3e497->enter($__internal_1ee7b6dda87f820db38ed1a3d1ece3f3d75d588d3bf844f744c0155e1bb3e497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_1ee7b6dda87f820db38ed1a3d1ece3f3d75d588d3bf844f744c0155e1bb3e497->leave($__internal_1ee7b6dda87f820db38ed1a3d1ece3f3d75d588d3bf844f744c0155e1bb3e497_prof);

        
        $__internal_f4f22bb58ae38600a0b76687688ce29997abddf35335940b3c583ac18883c6b5->leave($__internal_f4f22bb58ae38600a0b76687688ce29997abddf35335940b3c583ac18883c6b5_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e0f9c9f6e16ee79d7829ddbb2df4434d4c27cba442689ab4f14969b6a385868b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f9c9f6e16ee79d7829ddbb2df4434d4c27cba442689ab4f14969b6a385868b->enter($__internal_e0f9c9f6e16ee79d7829ddbb2df4434d4c27cba442689ab4f14969b6a385868b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8c211eeabf7eb281738f3a74e8582336d951a13a37cd7e36ad4d490e3550cf15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c211eeabf7eb281738f3a74e8582336d951a13a37cd7e36ad4d490e3550cf15->enter($__internal_8c211eeabf7eb281738f3a74e8582336d951a13a37cd7e36ad4d490e3550cf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_8c211eeabf7eb281738f3a74e8582336d951a13a37cd7e36ad4d490e3550cf15->leave($__internal_8c211eeabf7eb281738f3a74e8582336d951a13a37cd7e36ad4d490e3550cf15_prof);

        
        $__internal_e0f9c9f6e16ee79d7829ddbb2df4434d4c27cba442689ab4f14969b6a385868b->leave($__internal_e0f9c9f6e16ee79d7829ddbb2df4434d4c27cba442689ab4f14969b6a385868b_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_d1795fe97238d01ac238967c21ef57c489504ce9f394225fc5d2253948fd07c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1795fe97238d01ac238967c21ef57c489504ce9f394225fc5d2253948fd07c6->enter($__internal_d1795fe97238d01ac238967c21ef57c489504ce9f394225fc5d2253948fd07c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a5d784b62d09c0fca39f30eb83773e26818e0f0135d2defe053cebe16b763a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d784b62d09c0fca39f30eb83773e26818e0f0135d2defe053cebe16b763a40->enter($__internal_a5d784b62d09c0fca39f30eb83773e26818e0f0135d2defe053cebe16b763a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_a5d784b62d09c0fca39f30eb83773e26818e0f0135d2defe053cebe16b763a40->leave($__internal_a5d784b62d09c0fca39f30eb83773e26818e0f0135d2defe053cebe16b763a40_prof);

        
        $__internal_d1795fe97238d01ac238967c21ef57c489504ce9f394225fc5d2253948fd07c6->leave($__internal_d1795fe97238d01ac238967c21ef57c489504ce9f394225fc5d2253948fd07c6_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_87e93f2b323e7d7ad46e14a80bf2e45903820e86f049b3f6d13b8a0e152591aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e93f2b323e7d7ad46e14a80bf2e45903820e86f049b3f6d13b8a0e152591aa->enter($__internal_87e93f2b323e7d7ad46e14a80bf2e45903820e86f049b3f6d13b8a0e152591aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c449fc7d3f3d8ab049ff70fd79c3a64329c24c81fd29bb47e3d29406a41dcbd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c449fc7d3f3d8ab049ff70fd79c3a64329c24c81fd29bb47e3d29406a41dcbd7->enter($__internal_c449fc7d3f3d8ab049ff70fd79c3a64329c24c81fd29bb47e3d29406a41dcbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_c449fc7d3f3d8ab049ff70fd79c3a64329c24c81fd29bb47e3d29406a41dcbd7->leave($__internal_c449fc7d3f3d8ab049ff70fd79c3a64329c24c81fd29bb47e3d29406a41dcbd7_prof);

        
        $__internal_87e93f2b323e7d7ad46e14a80bf2e45903820e86f049b3f6d13b8a0e152591aa->leave($__internal_87e93f2b323e7d7ad46e14a80bf2e45903820e86f049b3f6d13b8a0e152591aa_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_bbcc32932bd749744f32276423c678abe516304158f611364f59a91548c3b95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbcc32932bd749744f32276423c678abe516304158f611364f59a91548c3b95c->enter($__internal_bbcc32932bd749744f32276423c678abe516304158f611364f59a91548c3b95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_c70afa10e5b8190288ec959cf2575acda49b40828ec4a0f85b30efe1faed02af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70afa10e5b8190288ec959cf2575acda49b40828ec4a0f85b30efe1faed02af->enter($__internal_c70afa10e5b8190288ec959cf2575acda49b40828ec4a0f85b30efe1faed02af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_c70afa10e5b8190288ec959cf2575acda49b40828ec4a0f85b30efe1faed02af->leave($__internal_c70afa10e5b8190288ec959cf2575acda49b40828ec4a0f85b30efe1faed02af_prof);

        
        $__internal_bbcc32932bd749744f32276423c678abe516304158f611364f59a91548c3b95c->leave($__internal_bbcc32932bd749744f32276423c678abe516304158f611364f59a91548c3b95c_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_dbd1dddac1af14aa655532539aec1864f23eb13b242ac0cdc406107da708e413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd1dddac1af14aa655532539aec1864f23eb13b242ac0cdc406107da708e413->enter($__internal_dbd1dddac1af14aa655532539aec1864f23eb13b242ac0cdc406107da708e413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_778ef0ef6e3bce076d6fd53da7f72a12ce968e0c15557744da797b9bbf564bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778ef0ef6e3bce076d6fd53da7f72a12ce968e0c15557744da797b9bbf564bd5->enter($__internal_778ef0ef6e3bce076d6fd53da7f72a12ce968e0c15557744da797b9bbf564bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_778ef0ef6e3bce076d6fd53da7f72a12ce968e0c15557744da797b9bbf564bd5->leave($__internal_778ef0ef6e3bce076d6fd53da7f72a12ce968e0c15557744da797b9bbf564bd5_prof);

        
        $__internal_dbd1dddac1af14aa655532539aec1864f23eb13b242ac0cdc406107da708e413->leave($__internal_dbd1dddac1af14aa655532539aec1864f23eb13b242ac0cdc406107da708e413_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_8dc123880977357c4200de52f6e9a7e75baeb20d54336bc5fa663dd95c7a0b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc123880977357c4200de52f6e9a7e75baeb20d54336bc5fa663dd95c7a0b21->enter($__internal_8dc123880977357c4200de52f6e9a7e75baeb20d54336bc5fa663dd95c7a0b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_b5820f5cc2017568a9e850bf65c83e70d6dd8ef439a5e989ce8de4a0643c6b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5820f5cc2017568a9e850bf65c83e70d6dd8ef439a5e989ce8de4a0643c6b5e->enter($__internal_b5820f5cc2017568a9e850bf65c83e70d6dd8ef439a5e989ce8de4a0643c6b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_b5820f5cc2017568a9e850bf65c83e70d6dd8ef439a5e989ce8de4a0643c6b5e->leave($__internal_b5820f5cc2017568a9e850bf65c83e70d6dd8ef439a5e989ce8de4a0643c6b5e_prof);

        
        $__internal_8dc123880977357c4200de52f6e9a7e75baeb20d54336bc5fa663dd95c7a0b21->leave($__internal_8dc123880977357c4200de52f6e9a7e75baeb20d54336bc5fa663dd95c7a0b21_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_410f9c5b0cf5b72d4749243d0fe0774ffdd4aad7001d1ec68d6de8cfcebbece0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410f9c5b0cf5b72d4749243d0fe0774ffdd4aad7001d1ec68d6de8cfcebbece0->enter($__internal_410f9c5b0cf5b72d4749243d0fe0774ffdd4aad7001d1ec68d6de8cfcebbece0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_10182a78bb34064bbbd4c486e5cafc2d06a1cf3e854ed88c95f6cd8a8f1a190f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10182a78bb34064bbbd4c486e5cafc2d06a1cf3e854ed88c95f6cd8a8f1a190f->enter($__internal_10182a78bb34064bbbd4c486e5cafc2d06a1cf3e854ed88c95f6cd8a8f1a190f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_10182a78bb34064bbbd4c486e5cafc2d06a1cf3e854ed88c95f6cd8a8f1a190f->leave($__internal_10182a78bb34064bbbd4c486e5cafc2d06a1cf3e854ed88c95f6cd8a8f1a190f_prof);

        
        $__internal_410f9c5b0cf5b72d4749243d0fe0774ffdd4aad7001d1ec68d6de8cfcebbece0->leave($__internal_410f9c5b0cf5b72d4749243d0fe0774ffdd4aad7001d1ec68d6de8cfcebbece0_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
