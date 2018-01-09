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
        $__internal_41d91adb34cbb28e9e79d343e5f52d10d3dea504d130962b6414f2ccb9e865d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41d91adb34cbb28e9e79d343e5f52d10d3dea504d130962b6414f2ccb9e865d7->enter($__internal_41d91adb34cbb28e9e79d343e5f52d10d3dea504d130962b6414f2ccb9e865d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_7314f0163719d3ce55755f8e5e65da5315dba049d1b991aaf54d99a855e16aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7314f0163719d3ce55755f8e5e65da5315dba049d1b991aaf54d99a855e16aed->enter($__internal_7314f0163719d3ce55755f8e5e65da5315dba049d1b991aaf54d99a855e16aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_41d91adb34cbb28e9e79d343e5f52d10d3dea504d130962b6414f2ccb9e865d7->leave($__internal_41d91adb34cbb28e9e79d343e5f52d10d3dea504d130962b6414f2ccb9e865d7_prof);

        
        $__internal_7314f0163719d3ce55755f8e5e65da5315dba049d1b991aaf54d99a855e16aed->leave($__internal_7314f0163719d3ce55755f8e5e65da5315dba049d1b991aaf54d99a855e16aed_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ea2603300e4983280d317ce7ef6cd2955fad48f1aef7f090d0dfbb6a1671c102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2603300e4983280d317ce7ef6cd2955fad48f1aef7f090d0dfbb6a1671c102->enter($__internal_ea2603300e4983280d317ce7ef6cd2955fad48f1aef7f090d0dfbb6a1671c102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_32a175278558121d53a7a77f041e8c02902487443392300970f9d153a0909612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a175278558121d53a7a77f041e8c02902487443392300970f9d153a0909612->enter($__internal_32a175278558121d53a7a77f041e8c02902487443392300970f9d153a0909612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_32a175278558121d53a7a77f041e8c02902487443392300970f9d153a0909612->leave($__internal_32a175278558121d53a7a77f041e8c02902487443392300970f9d153a0909612_prof);

        
        $__internal_ea2603300e4983280d317ce7ef6cd2955fad48f1aef7f090d0dfbb6a1671c102->leave($__internal_ea2603300e4983280d317ce7ef6cd2955fad48f1aef7f090d0dfbb6a1671c102_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_84ae1f3e541c1c475731d5e73402781376e8cec96af89c5ac28bbbcdcf95d11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ae1f3e541c1c475731d5e73402781376e8cec96af89c5ac28bbbcdcf95d11d->enter($__internal_84ae1f3e541c1c475731d5e73402781376e8cec96af89c5ac28bbbcdcf95d11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_248df119bd150aa251c730d6c91a5d4218c52a791431d0a6eb57c73c02cf590c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248df119bd150aa251c730d6c91a5d4218c52a791431d0a6eb57c73c02cf590c->enter($__internal_248df119bd150aa251c730d6c91a5d4218c52a791431d0a6eb57c73c02cf590c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_248df119bd150aa251c730d6c91a5d4218c52a791431d0a6eb57c73c02cf590c->leave($__internal_248df119bd150aa251c730d6c91a5d4218c52a791431d0a6eb57c73c02cf590c_prof);

        
        $__internal_84ae1f3e541c1c475731d5e73402781376e8cec96af89c5ac28bbbcdcf95d11d->leave($__internal_84ae1f3e541c1c475731d5e73402781376e8cec96af89c5ac28bbbcdcf95d11d_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_d16ed2af4c2c8cb711d904c0d07886d56c71beed2ff0d382507e56aee08a3a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16ed2af4c2c8cb711d904c0d07886d56c71beed2ff0d382507e56aee08a3a56->enter($__internal_d16ed2af4c2c8cb711d904c0d07886d56c71beed2ff0d382507e56aee08a3a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_1e01c3c74e5919931cd39f164846567d9288792d72be6ff3165d87b58ace6ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e01c3c74e5919931cd39f164846567d9288792d72be6ff3165d87b58ace6ddc->enter($__internal_1e01c3c74e5919931cd39f164846567d9288792d72be6ff3165d87b58ace6ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_1e01c3c74e5919931cd39f164846567d9288792d72be6ff3165d87b58ace6ddc->leave($__internal_1e01c3c74e5919931cd39f164846567d9288792d72be6ff3165d87b58ace6ddc_prof);

        
        $__internal_d16ed2af4c2c8cb711d904c0d07886d56c71beed2ff0d382507e56aee08a3a56->leave($__internal_d16ed2af4c2c8cb711d904c0d07886d56c71beed2ff0d382507e56aee08a3a56_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_047c1fc90047e93bf7b5916bb1684fd1a681386adde00466d51e71de1e4fe05f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_047c1fc90047e93bf7b5916bb1684fd1a681386adde00466d51e71de1e4fe05f->enter($__internal_047c1fc90047e93bf7b5916bb1684fd1a681386adde00466d51e71de1e4fe05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_6c5f14a8b4855eb2688afac55b94eda9780accead8ecf45c0bc834ec4e456d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5f14a8b4855eb2688afac55b94eda9780accead8ecf45c0bc834ec4e456d0c->enter($__internal_6c5f14a8b4855eb2688afac55b94eda9780accead8ecf45c0bc834ec4e456d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_6c5f14a8b4855eb2688afac55b94eda9780accead8ecf45c0bc834ec4e456d0c->leave($__internal_6c5f14a8b4855eb2688afac55b94eda9780accead8ecf45c0bc834ec4e456d0c_prof);

        
        $__internal_047c1fc90047e93bf7b5916bb1684fd1a681386adde00466d51e71de1e4fe05f->leave($__internal_047c1fc90047e93bf7b5916bb1684fd1a681386adde00466d51e71de1e4fe05f_prof);

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
", "form_table_layout.html.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
