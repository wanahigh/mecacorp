<?php

/* ::materialize_layout.html.twig */
class __TwigTemplate_3d7d3c3a85178511a3fe9230684c6c76ba3549fb17cc3a4b071e33dd802a46e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "::materialize_layout.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'button_widget' => array($this, 'block_button_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_371f774493b442529a437b40dc371cb4f154a872f538437d5ec53b7a6c39370b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371f774493b442529a437b40dc371cb4f154a872f538437d5ec53b7a6c39370b->enter($__internal_371f774493b442529a437b40dc371cb4f154a872f538437d5ec53b7a6c39370b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materialize_layout.html.twig"));

        $__internal_4e03021d8f7a25ed55987c75f038e60ee82ee211e88564012d97e22d913db4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e03021d8f7a25ed55987c75f038e60ee82ee211e88564012d97e22d913db4c3->enter($__internal_4e03021d8f7a25ed55987c75f038e60ee82ee211e88564012d97e22d913db4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materialize_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_371f774493b442529a437b40dc371cb4f154a872f538437d5ec53b7a6c39370b->leave($__internal_371f774493b442529a437b40dc371cb4f154a872f538437d5ec53b7a6c39370b_prof);

        
        $__internal_4e03021d8f7a25ed55987c75f038e60ee82ee211e88564012d97e22d913db4c3->leave($__internal_4e03021d8f7a25ed55987c75f038e60ee82ee211e88564012d97e22d913db4c3_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9eee9b0eb960c4fd21ea1db243582f94d4ea157dae99c377c5ace31f5ecd7138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eee9b0eb960c4fd21ea1db243582f94d4ea157dae99c377c5ace31f5ecd7138->enter($__internal_9eee9b0eb960c4fd21ea1db243582f94d4ea157dae99c377c5ace31f5ecd7138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9bdc9d1a38b8497c92f235be6330eeb29501faf1a77d3d27cf57870e716faed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdc9d1a38b8497c92f235be6330eeb29501faf1a77d3d27cf57870e716faed6->enter($__internal_9bdc9d1a38b8497c92f235be6330eeb29501faf1a77d3d27cf57870e716faed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<div class=\"row";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 4, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 4, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"input-field col s12\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'widget');
        // line 7
        echo twig_escape_filter($this->env,  -        // line 8
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'label'), "html", null, true);
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo "</div>
    </div>";
        
        $__internal_9bdc9d1a38b8497c92f235be6330eeb29501faf1a77d3d27cf57870e716faed6->leave($__internal_9bdc9d1a38b8497c92f235be6330eeb29501faf1a77d3d27cf57870e716faed6_prof);

        
        $__internal_9eee9b0eb960c4fd21ea1db243582f94d4ea157dae99c377c5ace31f5ecd7138->leave($__internal_9eee9b0eb960c4fd21ea1db243582f94d4ea157dae99c377c5ace31f5ecd7138_prof);

    }

    // line 14
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_7e0c16f98fe6545ab371f378deebf9ef3e6c7d272278db628478a5fd12de3044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0c16f98fe6545ab371f378deebf9ef3e6c7d272278db628478a5fd12de3044->enter($__internal_7e0c16f98fe6545ab371f378deebf9ef3e6c7d272278db628478a5fd12de3044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d47180647d2da3672d3c940214dd7e4c84558e2674d602f9bdaade09b667bfc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47180647d2da3672d3c940214dd7e4c84558e2674d602f9bdaade09b667bfc1->enter($__internal_d47180647d2da3672d3c940214dd7e4c84558e2674d602f9bdaade09b667bfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 15
        echo "    ";
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 15, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 16
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 16, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")))));
        }
        // line 18
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        // line 19
        if (array_key_exists("tooltip", $context)) {
            // line 20
            echo "        <span class=\"material-icons dp48 tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "tooltip" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
            echo "\">error
        </span>
    ";
        }
        
        $__internal_d47180647d2da3672d3c940214dd7e4c84558e2674d602f9bdaade09b667bfc1->leave($__internal_d47180647d2da3672d3c940214dd7e4c84558e2674d602f9bdaade09b667bfc1_prof);

        
        $__internal_7e0c16f98fe6545ab371f378deebf9ef3e6c7d272278db628478a5fd12de3044->leave($__internal_7e0c16f98fe6545ab371f378deebf9ef3e6c7d272278db628478a5fd12de3044_prof);

    }

    // line 26
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_1a710a1adeb295fad87449e68d70c0cfa84d6edac2afca6924a4bfdbb89d99c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a710a1adeb295fad87449e68d70c0cfa84d6edac2afca6924a4bfdbb89d99c1->enter($__internal_1a710a1adeb295fad87449e68d70c0cfa84d6edac2afca6924a4bfdbb89d99c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c8447739a886e36d76a44ef3c0b604a5373d8fb4c8625100009185ebbe5e6abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8447739a886e36d76a44ef3c0b604a5373d8fb4c8625100009185ebbe5e6abc->enter($__internal_c8447739a886e36d76a44ef3c0b604a5373d8fb4c8625100009185ebbe5e6abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 27
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 27, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))));
        // line 28
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c8447739a886e36d76a44ef3c0b604a5373d8fb4c8625100009185ebbe5e6abc->leave($__internal_c8447739a886e36d76a44ef3c0b604a5373d8fb4c8625100009185ebbe5e6abc_prof);

        
        $__internal_1a710a1adeb295fad87449e68d70c0cfa84d6edac2afca6924a4bfdbb89d99c1->leave($__internal_1a710a1adeb295fad87449e68d70c0cfa84d6edac2afca6924a4bfdbb89d99c1_prof);

    }

    // line 31
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_51ba57a6e86fec2217701f99a684ee37b952297269a0097fff7c76b324705533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ba57a6e86fec2217701f99a684ee37b952297269a0097fff7c76b324705533->enter($__internal_51ba57a6e86fec2217701f99a684ee37b952297269a0097fff7c76b324705533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_133c5b97aab425392239a67f77db660df4a340bc7ba75a74f5b6563759d09c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133c5b97aab425392239a67f77db660df4a340bc7ba75a74f5b6563759d09c32->enter($__internal_133c5b97aab425392239a67f77db660df4a340bc7ba75a74f5b6563759d09c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 32
        echo "<div class=\"row ";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 32, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), 'widget');
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label');
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), 'errors');
        // line 36
        echo "</div>";
        
        $__internal_133c5b97aab425392239a67f77db660df4a340bc7ba75a74f5b6563759d09c32->leave($__internal_133c5b97aab425392239a67f77db660df4a340bc7ba75a74f5b6563759d09c32_prof);

        
        $__internal_51ba57a6e86fec2217701f99a684ee37b952297269a0097fff7c76b324705533->leave($__internal_51ba57a6e86fec2217701f99a684ee37b952297269a0097fff7c76b324705533_prof);

    }

    // line 39
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a3eca555621105cc79b4d09b02e02617f5216b77f7fdb3006459dfb6745edb1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3eca555621105cc79b4d09b02e02617f5216b77f7fdb3006459dfb6745edb1a->enter($__internal_a3eca555621105cc79b4d09b02e02617f5216b77f7fdb3006459dfb6745edb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_823f92b38885a3d810fc0909ad64bb6d3db6e08a96660923ceef931e9b7b4c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823f92b38885a3d810fc0909ad64bb6d3db6e08a96660923ceef931e9b7b4c68->enter($__internal_823f92b38885a3d810fc0909ad64bb6d3db6e08a96660923ceef931e9b7b4c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 40
        echo "<input type=\"checkbox\" class=\"filled-in\"";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 40, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_823f92b38885a3d810fc0909ad64bb6d3db6e08a96660923ceef931e9b7b4c68->leave($__internal_823f92b38885a3d810fc0909ad64bb6d3db6e08a96660923ceef931e9b7b4c68_prof);

        
        $__internal_a3eca555621105cc79b4d09b02e02617f5216b77f7fdb3006459dfb6745edb1a->leave($__internal_a3eca555621105cc79b4d09b02e02617f5216b77f7fdb3006459dfb6745edb1a_prof);

    }

    // line 44
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_47756af5bed8b85a96cd1ae93a7a8084fe956b54b1e84f2b69ac78165d9f0066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47756af5bed8b85a96cd1ae93a7a8084fe956b54b1e84f2b69ac78165d9f0066->enter($__internal_47756af5bed8b85a96cd1ae93a7a8084fe956b54b1e84f2b69ac78165d9f0066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_171c291312372aad4ac66810365f5d9391083f439f73f173a077fd692440304a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171c291312372aad4ac66810365f5d9391083f439f73f173a077fd692440304a->enter($__internal_171c291312372aad4ac66810365f5d9391083f439f73f173a077fd692440304a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 45
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 45, $this->getSourceContext()); })()) === false)) {
            // line 46
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 46, $this->getSourceContext()); })())) {
                // line 47
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 47, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 47, $this->getSourceContext()); })())));
            }
            // line 49
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 49, $this->getSourceContext()); })())) {
                // line 50
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 50, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 52
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 52, $this->getSourceContext()); })()))) {
                // line 53
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 53, $this->getSourceContext()); })()))) {
                    // line 54
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 54, $this->getSourceContext()); })()), array("%name%" =>                     // line 55
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 55, $this->getSourceContext()); })()), "%id%" =>                     // line 56
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 56, $this->getSourceContext()); })())));
                } else {
                    // line 59
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 59, $this->getSourceContext()); })()));
                }
            }
            // line 62
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 62, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 63
            echo ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 63, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 63, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 63, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 63, $this->getSourceContext()); })()))));
            echo "
        </label>";
        }
        
        $__internal_171c291312372aad4ac66810365f5d9391083f439f73f173a077fd692440304a->leave($__internal_171c291312372aad4ac66810365f5d9391083f439f73f173a077fd692440304a_prof);

        
        $__internal_47756af5bed8b85a96cd1ae93a7a8084fe956b54b1e84f2b69ac78165d9f0066->leave($__internal_47756af5bed8b85a96cd1ae93a7a8084fe956b54b1e84f2b69ac78165d9f0066_prof);

    }

    // line 68
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1962a9b21c0e722f5ba78b3df3348acc9801ac491b805bd582c10117023e7e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1962a9b21c0e722f5ba78b3df3348acc9801ac491b805bd582c10117023e7e6c->enter($__internal_1962a9b21c0e722f5ba78b3df3348acc9801ac491b805bd582c10117023e7e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8d03deaa2d1c2f881ba7f5a87440ff5f9c741e5848415db4ab07e86466ba4aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d03deaa2d1c2f881ba7f5a87440ff5f9c741e5848415db4ab07e86466ba4aba->enter($__internal_8d03deaa2d1c2f881ba7f5a87440ff5f9c741e5848415db4ab07e86466ba4aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 69
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 69, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 70
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_8d03deaa2d1c2f881ba7f5a87440ff5f9c741e5848415db4ab07e86466ba4aba->leave($__internal_8d03deaa2d1c2f881ba7f5a87440ff5f9c741e5848415db4ab07e86466ba4aba_prof);

        
        $__internal_1962a9b21c0e722f5ba78b3df3348acc9801ac491b805bd582c10117023e7e6c->leave($__internal_1962a9b21c0e722f5ba78b3df3348acc9801ac491b805bd582c10117023e7e6c_prof);

    }

    // line 73
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_9a1e6b24c099326d28ed0cfa338e71d1b779d08938497209aa2490e17a7e041f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a1e6b24c099326d28ed0cfa338e71d1b779d08938497209aa2490e17a7e041f->enter($__internal_9a1e6b24c099326d28ed0cfa338e71d1b779d08938497209aa2490e17a7e041f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_bf7a4b478b60968d5f3a04e2706e680928ee7167a21fc35fb05a46b0a97876a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7a4b478b60968d5f3a04e2706e680928ee7167a21fc35fb05a46b0a97876a5->enter($__internal_bf7a4b478b60968d5f3a04e2706e680928ee7167a21fc35fb05a46b0a97876a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 74
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 74, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 74, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 74, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 74, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 74, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 75
            $context["required"] = false;
        }
        // line 77
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 77, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 78
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 78, $this->getSourceContext()); })()))) {
            // line 79
            echo "<option value=\"\"";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 79, $this->getSourceContext()); })())) {
                echo " disabled=\"disabled\" ";
                if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 79, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 79, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 79, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 79, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 79, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 79, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 81
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 81, $this->getSourceContext()); })())) > 0)) {
            // line 82
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 82, $this->getSourceContext()); })());
            // line 83
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 84
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 84, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 84, $this->getSourceContext()); })())))) {
                // line 85
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 85, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 88
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 88, $this->getSourceContext()); })());
        // line 89
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 90
        echo "</select>";
        
        $__internal_bf7a4b478b60968d5f3a04e2706e680928ee7167a21fc35fb05a46b0a97876a5->leave($__internal_bf7a4b478b60968d5f3a04e2706e680928ee7167a21fc35fb05a46b0a97876a5_prof);

        
        $__internal_9a1e6b24c099326d28ed0cfa338e71d1b779d08938497209aa2490e17a7e041f->leave($__internal_9a1e6b24c099326d28ed0cfa338e71d1b779d08938497209aa2490e17a7e041f_prof);

    }

    // line 93
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_14cd10a7fdfd83d6e65f0f09364081ea33acb28f5dde513ec618bb1e16d1227b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14cd10a7fdfd83d6e65f0f09364081ea33acb28f5dde513ec618bb1e16d1227b->enter($__internal_14cd10a7fdfd83d6e65f0f09364081ea33acb28f5dde513ec618bb1e16d1227b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_a8528ab93635b337ec4cda0b983ea92035f88a27815b96602bdf37275b0f5cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8528ab93635b337ec4cda0b983ea92035f88a27815b96602bdf37275b0f5cbd->enter($__internal_a8528ab93635b337ec4cda0b983ea92035f88a27815b96602bdf37275b0f5cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 94
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 94, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 95
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_a8528ab93635b337ec4cda0b983ea92035f88a27815b96602bdf37275b0f5cbd->leave($__internal_a8528ab93635b337ec4cda0b983ea92035f88a27815b96602bdf37275b0f5cbd_prof);

        
        $__internal_14cd10a7fdfd83d6e65f0f09364081ea33acb28f5dde513ec618bb1e16d1227b->leave($__internal_14cd10a7fdfd83d6e65f0f09364081ea33acb28f5dde513ec618bb1e16d1227b_prof);

    }

    // line 98
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_c44ee4b8e6562bcae318d65053b60d8871cbe4a044593529d03c0c562ab43cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44ee4b8e6562bcae318d65053b60d8871cbe4a044593529d03c0c562ab43cb5->enter($__internal_c44ee4b8e6562bcae318d65053b60d8871cbe4a044593529d03c0c562ab43cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_1f697417b705d7ea4fc8b085a8e6b363da314a798d98416e9d7722bb0b2a8721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f697417b705d7ea4fc8b085a8e6b363da314a798d98416e9d7722bb0b2a8721->enter($__internal_1f697417b705d7ea4fc8b085a8e6b363da314a798d98416e9d7722bb0b2a8721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 99
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 99, $this->getSourceContext()); })())) > 0)) {
            // line 100
            echo "<ul>";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 101, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 102
                echo "<li class=\"error\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "</ul>";
        }
        
        $__internal_1f697417b705d7ea4fc8b085a8e6b363da314a798d98416e9d7722bb0b2a8721->leave($__internal_1f697417b705d7ea4fc8b085a8e6b363da314a798d98416e9d7722bb0b2a8721_prof);

        
        $__internal_c44ee4b8e6562bcae318d65053b60d8871cbe4a044593529d03c0c562ab43cb5->leave($__internal_c44ee4b8e6562bcae318d65053b60d8871cbe4a044593529d03c0c562ab43cb5_prof);

    }

    public function getTemplateName()
    {
        return "::materialize_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 104,  386 => 102,  382 => 101,  380 => 100,  378 => 99,  369 => 98,  358 => 95,  356 => 94,  347 => 93,  337 => 90,  335 => 89,  333 => 88,  327 => 85,  325 => 84,  323 => 83,  321 => 82,  319 => 81,  307 => 79,  305 => 78,  298 => 77,  295 => 75,  293 => 74,  284 => 73,  274 => 70,  272 => 69,  263 => 68,  250 => 63,  234 => 62,  230 => 59,  227 => 56,  226 => 55,  225 => 54,  223 => 53,  221 => 52,  218 => 50,  216 => 49,  213 => 47,  211 => 46,  209 => 45,  200 => 44,  180 => 40,  171 => 39,  161 => 36,  159 => 35,  157 => 34,  155 => 33,  149 => 32,  140 => 31,  130 => 28,  128 => 27,  119 => 26,  105 => 21,  102 => 20,  100 => 19,  98 => 18,  95 => 16,  92 => 15,  83 => 14,  72 => 10,  70 => 9,  68 => 8,  67 => 7,  65 => 6,  58 => 4,  49 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'form_div_layout.html.twig' %}

{% block form_row -%}
    <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        <div class=\"input-field col s12\">
            {{- form_widget(form) -}}
            {{
            - form_label(form) -}}
            {{- form_errors(form) -}}
        </div>
    </div>
{%- endblock form_row %}

{% block form_widget_simple %}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default(''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
    {% if tooltip is defined %}
        <span class=\"material-icons dp48 tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"{{ tooltip }}\">error
        </span>
    {% endif %}
{% endblock form_widget_simple %}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default(''))|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_row -%}
    <div class=\"row {% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block checkbox_widget -%}
    <input type=\"checkbox\" class=\"filled-in\"{{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget %}

{# Checkbox label is raw here #}
{%- block checkbox_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ translation_domain is same as(false) ? label|raw : label|trans({}, translation_domain)|raw }}
        </label>
    {%- endif -%}
{%- endblock -%}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('waves-effect waves-light') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required %} disabled=\"disabled\" {% if value is empty %} selected=\"selected\"{% endif %}{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ 'materialize-textarea')|trim}) %}
    {{ parent() }}
{%- endblock -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        <ul>
            {%- for error in errors -%}
                <li class=\"error\">{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    {%- endif -%}
{%- endblock form_errors -%}", "::materialize_layout.html.twig", "/var/www/monsite1/mecacorp/app/Resources/views/materialize_layout.html.twig");
    }
}
