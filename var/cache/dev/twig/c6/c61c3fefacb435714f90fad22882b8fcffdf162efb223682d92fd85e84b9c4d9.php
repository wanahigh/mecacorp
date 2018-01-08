<?php

/* form_table_layout.html.twig */
class __TwigTemplate_ad36ec695a7c3daaf5e40df64268f3a2ed6ca2859a55809983d94805f6b4377b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa530105696632b6128bc78c2a741f9cb94875df3be67b6407e026cc1a8371bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa530105696632b6128bc78c2a741f9cb94875df3be67b6407e026cc1a8371bd->enter($__internal_fa530105696632b6128bc78c2a741f9cb94875df3be67b6407e026cc1a8371bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_e9cf87fb914ec4a9f9caaf3e7a2a6ee9c0a3aa5e71af09f63eee4c1bfd820455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cf87fb914ec4a9f9caaf3e7a2a6ee9c0a3aa5e71af09f63eee4c1bfd820455->enter($__internal_e9cf87fb914ec4a9f9caaf3e7a2a6ee9c0a3aa5e71af09f63eee4c1bfd820455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_fa530105696632b6128bc78c2a741f9cb94875df3be67b6407e026cc1a8371bd->leave($__internal_fa530105696632b6128bc78c2a741f9cb94875df3be67b6407e026cc1a8371bd_prof);

        
        $__internal_e9cf87fb914ec4a9f9caaf3e7a2a6ee9c0a3aa5e71af09f63eee4c1bfd820455->leave($__internal_e9cf87fb914ec4a9f9caaf3e7a2a6ee9c0a3aa5e71af09f63eee4c1bfd820455_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b09d2003f6971c1f3d3c46d1bbf7de8e944c520db97a1e0d4a06cd5493a32214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09d2003f6971c1f3d3c46d1bbf7de8e944c520db97a1e0d4a06cd5493a32214->enter($__internal_b09d2003f6971c1f3d3c46d1bbf7de8e944c520db97a1e0d4a06cd5493a32214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2789285add78602200fd7a2e5028c8caefdec71668a49e0f1580cf1e20e73c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2789285add78602200fd7a2e5028c8caefdec71668a49e0f1580cf1e20e73c33->enter($__internal_2789285add78602200fd7a2e5028c8caefdec71668a49e0f1580cf1e20e73c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_2789285add78602200fd7a2e5028c8caefdec71668a49e0f1580cf1e20e73c33->leave($__internal_2789285add78602200fd7a2e5028c8caefdec71668a49e0f1580cf1e20e73c33_prof);

        
        $__internal_b09d2003f6971c1f3d3c46d1bbf7de8e944c520db97a1e0d4a06cd5493a32214->leave($__internal_b09d2003f6971c1f3d3c46d1bbf7de8e944c520db97a1e0d4a06cd5493a32214_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_33f3a9efb039d0a6b1ebcd658d50728a61887e761ac41ba832646682a61a609c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f3a9efb039d0a6b1ebcd658d50728a61887e761ac41ba832646682a61a609c->enter($__internal_33f3a9efb039d0a6b1ebcd658d50728a61887e761ac41ba832646682a61a609c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0401b595d4e3c2c040921ef1ccc06a5fb0c953d913e79e0ea8e308e64241dfa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0401b595d4e3c2c040921ef1ccc06a5fb0c953d913e79e0ea8e308e64241dfa5->enter($__internal_0401b595d4e3c2c040921ef1ccc06a5fb0c953d913e79e0ea8e308e64241dfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_0401b595d4e3c2c040921ef1ccc06a5fb0c953d913e79e0ea8e308e64241dfa5->leave($__internal_0401b595d4e3c2c040921ef1ccc06a5fb0c953d913e79e0ea8e308e64241dfa5_prof);

        
        $__internal_33f3a9efb039d0a6b1ebcd658d50728a61887e761ac41ba832646682a61a609c->leave($__internal_33f3a9efb039d0a6b1ebcd658d50728a61887e761ac41ba832646682a61a609c_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_bc38ea2cceaf10d76eeeac301bf696b2fec9c0da675e77916eec22b375f7af9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc38ea2cceaf10d76eeeac301bf696b2fec9c0da675e77916eec22b375f7af9b->enter($__internal_bc38ea2cceaf10d76eeeac301bf696b2fec9c0da675e77916eec22b375f7af9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_6ab2a108c278bf44d36b27924b2fb766eb24cefc9e416baf1018c5e27bf7f356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab2a108c278bf44d36b27924b2fb766eb24cefc9e416baf1018c5e27bf7f356->enter($__internal_6ab2a108c278bf44d36b27924b2fb766eb24cefc9e416baf1018c5e27bf7f356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_6ab2a108c278bf44d36b27924b2fb766eb24cefc9e416baf1018c5e27bf7f356->leave($__internal_6ab2a108c278bf44d36b27924b2fb766eb24cefc9e416baf1018c5e27bf7f356_prof);

        
        $__internal_bc38ea2cceaf10d76eeeac301bf696b2fec9c0da675e77916eec22b375f7af9b->leave($__internal_bc38ea2cceaf10d76eeeac301bf696b2fec9c0da675e77916eec22b375f7af9b_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_f9cb455ed55e5dfa4ca5bf68ce2310b69a89d09a9b6dfe689148cd478176c3c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9cb455ed55e5dfa4ca5bf68ce2310b69a89d09a9b6dfe689148cd478176c3c4->enter($__internal_f9cb455ed55e5dfa4ca5bf68ce2310b69a89d09a9b6dfe689148cd478176c3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_b6a056d71463c03296fcd914415e6304ad172310b7e65dc7d5dd50a1f57017a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a056d71463c03296fcd914415e6304ad172310b7e65dc7d5dd50a1f57017a5->enter($__internal_b6a056d71463c03296fcd914415e6304ad172310b7e65dc7d5dd50a1f57017a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_b6a056d71463c03296fcd914415e6304ad172310b7e65dc7d5dd50a1f57017a5->leave($__internal_b6a056d71463c03296fcd914415e6304ad172310b7e65dc7d5dd50a1f57017a5_prof);

        
        $__internal_f9cb455ed55e5dfa4ca5bf68ce2310b69a89d09a9b6dfe689148cd478176c3c4->leave($__internal_f9cb455ed55e5dfa4ca5bf68ce2310b69a89d09a9b6dfe689148cd478176c3c4_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
