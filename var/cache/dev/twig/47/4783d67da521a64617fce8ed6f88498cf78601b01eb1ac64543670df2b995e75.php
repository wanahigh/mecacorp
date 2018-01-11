<?php

/* @EasyAdmin/css/easyadmin.css.twig */
class __TwigTemplate_b4f7ce6ed2edef49a4465349a77c0354ecc298e01dd45f2593d9578994fa931f extends Twig_Template
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
        $__internal_c6e8fd3ff203afa4e01f42a3db2fe2e2875045a788e8773d8091249cbaf5138e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e8fd3ff203afa4e01f42a3db2fe2e2875045a788e8773d8091249cbaf5138e->enter($__internal_c6e8fd3ff203afa4e01f42a3db2fe2e2875045a788e8773d8091249cbaf5138e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/css/easyadmin.css.twig"));

        $__internal_024c3af7ce20abae52fe096bf844c0babc906e14dbfe25312ff434d66d48b7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024c3af7ce20abae52fe096bf844c0babc906e14dbfe25312ff434d66d48b7b5->enter($__internal_024c3af7ce20abae52fe096bf844c0babc906e14dbfe25312ff434d66d48b7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/css/easyadmin.css.twig"));

        // line 4
        echo "
";
        // line 5
        $context["color_schemes"] = array("dark" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#222222", "text_muted" => "#737373", "link" => "#205081", "black" => "#111111", "white" => "#FFFFFF", "gray_darker" => "#252525", "gray_dark" => "#444", "gray" => "#AAA", "gray_light" => "#CCC", "gray_lighter" => "#F5F5F5", "page_background" => "#F5F5F5", "table_header" => "#EEE", "table_border" => "#CCC", "table_row_border" => "#DDD"), "light" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#444444", "text_muted" => "#737373", "link" => "#205081", "black" => "#333333", "white" => "#FFFFFF", "gray_darker" => "#444", "gray_dark" => "#AAA", "gray" => "#CCC", "gray_light" => "#F5F5F5", "gray_lighter" => "#FAFAFA", "page_background" => "#FFFFFF", "table_header" => "#FAFAFA", "table_border" => "#FFFFFF", "table_row_border" => "#E5E5E5"));
        // line 43
        echo "
";
        // line 44
        $context["colors"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["color_schemes"]) || array_key_exists("color_schemes", $context) ? $context["color_schemes"] : (function () { throw new Twig_Error_Runtime('Variable "color_schemes" does not exist.', 44, $this->getSourceContext()); })()), (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 44, $this->getSourceContext()); })()), array(), "array");
        // line 45
        echo "
";
        // line 52
        echo ".sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

";
        // line 60
        echo "body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

";
        // line 66
        echo "a        { color: ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 66, $this->getSourceContext()); })()), "link", array());
        echo "; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: ";
        // line 77
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 77, $this->getSourceContext()); })()), "link", array());
        echo ";
}
a.text-danger,
a.text-danger:focus {
    color: ";
        // line 81
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 81, $this->getSourceContext()); })()), "danger", array());
        echo ";
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

";
        // line 90
        echo "ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

";
        // line 108
        echo "div.flash {
    padding: .5em;
}
div.flash-success {
    background: ";
        // line 112
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 112, $this->getSourceContext()); })()), "success", array());
        echo ";
    color: ";
        // line 113
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 113, $this->getSourceContext()); })()), "white", array());
        echo ";
}
div.flash-error {
    background: ";
        // line 116
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 116, $this->getSourceContext()); })()), "danger", array());
        echo ";
    color: ";
        // line 117
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 117, $this->getSourceContext()); })()), "white", array());
        echo ";
}
div.flash-error strong {
    padding-right: .5em;
}

";
        // line 126
        echo ".label:not([class*=label-]) {
    background: ";
        // line 127
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 127, $this->getSourceContext()); })()), "gray_darker", array());
        echo ";
}
.label {
    color: ";
        // line 130
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 130, $this->getSourceContext()); })()), "white", array());
        echo ";
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    ";
        // line 139
        echo "    background: ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 139, $this->getSourceContext()); })()), "success", array());
        echo " !important;
}
.label-danger {
    ";
        // line 143
        echo "    background: ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 143, $this->getSourceContext()); })()), "danger", array());
        echo " !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: ";
        // line 149
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 149, $this->getSourceContext()); })()), "gray_light", array());
        echo ";
    padding: 4px 8px;
}

";
        // line 154
        echo ".boolean .label,
.toggle .label {
    min-width: 33px;
}

";
        // line 163
        echo ".toggle { position: initial; }
.toggle:not(th) { position: relative; }

.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    background: ";
        // line 190
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 190, $this->getSourceContext()); })()), "success", array());
        echo ";
    border-color: ";
        // line 191
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 191, $this->getSourceContext()); })()), "success", array());
        echo ";
    color: ";
        // line 192
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 192, $this->getSourceContext()); })()), "white", array());
        echo ";
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    background: ";
        // line 201
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 201, $this->getSourceContext()); })()), "danger", array());
        echo ";
    border-color: ";
        // line 202
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 202, $this->getSourceContext()); })()), "danger", array());
        echo ";
    color: ";
        // line 203
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 203, $this->getSourceContext()); })()), "white", array());
        echo ";
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: ";
        // line 211
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 211, $this->getSourceContext()); })()), "gray_lighter", array());
        echo ";
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

";
        // line 227
        echo "span.badge {
    background-color: ";
        // line 228
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 228, $this->getSourceContext()); })());
        echo ";
}

";
        // line 233
        echo ".btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
";
        // line 250
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 250, $this->getSourceContext()); })()))) {
            // line 251
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 251, $this->getSourceContext()); })()), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 252
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 252, $this->getSourceContext()); })()))) {
            // line 253
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 253, $this->getSourceContext()); })()), "gray", array());
            echo ";
";
        }
        // line 255
        echo "    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: ";
        // line 258
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 258, $this->getSourceContext()); })()), "text", array());
        echo ";
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}
.btn-xs,
.btn-xs:hover,
.btn-xs:active,
.btn-xs:focus,
.btn-xs:active:hover {
    padding: 1px 5px;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: ";
        // line 279
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 279, $this->getSourceContext()); })());
        echo ";
    border-color: transparent;
    color: ";
        // line 281
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 281, $this->getSourceContext()); })()), "white", array());
        echo ";
}
.btn-info,
.btn-info:hover,
.btn-info:active,
.btn-info:focus,
.btn-info:active:hover {
    background-color: #39a0ed;
    border-color: transparent;
    color: ";
        // line 290
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 290, $this->getSourceContext()); })()), "white", array());
        echo ";
}
.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}

.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: ";
        // line 305
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 305, $this->getSourceContext()); })()), "danger", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 307
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 307, $this->getSourceContext()); })()), "white", array());
        echo ";
}

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: ";
        // line 315
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 315, $this->getSourceContext()); })()), "success", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 317
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 317, $this->getSourceContext()); })()), "white", array());
        echo ";
}

";
        // line 321
        echo ".btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: ";
        // line 327
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 327, $this->getSourceContext()); })());
        echo ";
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-danger,
.btn-success,
.btn-info {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

";
        // line 356
        echo ".form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid ";
        // line 361
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 361, $this->getSourceContext()); })()), "gray", array());
        echo ";
    border-radius: 0;
";
        // line 363
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 363, $this->getSourceContext()); })()))) {
            // line 364
            echo "    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        }
        // line 366
        echo "    color: ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 366, $this->getSourceContext()); })()), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
";
        // line 371
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 371, $this->getSourceContext()); })()))) {
            // line 372
            echo "    border-color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 372, $this->getSourceContext()); })()), "gray_dark", array());
            echo ";
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        } elseif (("light" ==         // line 374
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 374, $this->getSourceContext()); })()))) {
            // line 375
            echo "    border-color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 375, $this->getSourceContext()); })()), "gray_darker", array());
            echo ";
";
        }
        // line 377
        echo "}

.has-error .error-block {
    color: ";
        // line 380
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 380, $this->getSourceContext()); })()), "danger", array());
        echo ";
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: ";
        // line 396
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 396, $this->getSourceContext()); })()), "text_muted", array());
        echo ";
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
";
        // line 406
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 406, $this->getSourceContext()); })()))) {
            // line 407
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 407, $this->getSourceContext()); })()), "gray_lighter", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 408
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 408, $this->getSourceContext()); })()), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 409
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 409, $this->getSourceContext()); })()))) {
            // line 410
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 410, $this->getSourceContext()); })()), "gray_light", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 411
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 411, $this->getSourceContext()); })()), "gray", array());
            echo ";
";
        }
        // line 413
        echo "    height: 52px;
    padding-top: 10px;
";
        // line 415
        if (((array_key_exists("kernel_debug", $context)) ? (_twig_default_filter((isset($context["kernel_debug"]) || array_key_exists("kernel_debug", $context) ? $context["kernel_debug"] : (function () { throw new Twig_Error_Runtime('Variable "kernel_debug" does not exist.', 415, $this->getSourceContext()); })()), false)) : (false))) {
            // line 416
            echo "    height: 85px;
    padding-bottom: 45px;
";
        }
        // line 419
        echo "    z-index: 9999;
}

";
        // line 424
        echo ".field-collection .collection-empty {
    margin: .5em 0;
}

";
        // line 430
        echo ".field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
";
        // line 435
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 435, $this->getSourceContext()); })()))) {
            // line 436
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 437
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 437, $this->getSourceContext()); })()))) {
            // line 438
            echo "    border-top-color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 438, $this->getSourceContext()); })()), "gray_lighter", array());
            echo ";
";
        }
        // line 440
        echo "}
.field-group .field-divider hr {
";
        // line 442
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 442, $this->getSourceContext()); })()))) {
            // line 443
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 444
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 444, $this->getSourceContext()); })()))) {
            // line 445
            echo "    border-top-color: #EEE;
";
        }
        // line 447
        echo "}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
";
        // line 453
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 453, $this->getSourceContext()); })()))) {
            // line 454
            echo "    border-bottom: 1px solid ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 454, $this->getSourceContext()); })()), "gray_light", array());
            echo ";
    color: ";
            // line 455
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 455, $this->getSourceContext()); })()), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 456
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 456, $this->getSourceContext()); })()))) {
            // line 457
            echo "    border-bottom: 1px solid #EEE;
    color: ";
            // line 458
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 458, $this->getSourceContext()); })()), "gray_darker", array());
            echo ";
";
        }
        // line 460
        echo "    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
";
        // line 464
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 464, $this->getSourceContext()); })()))) {
            // line 465
            echo "    color: #555;
";
        } elseif (("light" ==         // line 466
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 466, $this->getSourceContext()); })()))) {
            // line 467
            echo "    color: #777;
";
        }
        // line 469
        echo "    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
";
        // line 476
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 476, $this->getSourceContext()); })()))) {
            // line 477
            echo "    border: 1px solid #DDD;
";
        } elseif (("light" ==         // line 478
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 478, $this->getSourceContext()); })()))) {
            // line 479
            echo "    border: 1px solid #EEE;
";
        }
        // line 481
        echo "    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
";
        // line 484
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 484, $this->getSourceContext()); })()))) {
            // line 485
            echo "    color: #555;
";
        } elseif (("light" ==         // line 486
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 486, $this->getSourceContext()); })()))) {
            // line 487
            echo "    color: #777;
";
        }
        // line 489
        echo "    margin-right: 2px;
}
.field-group .box-header.with-border {
";
        // line 492
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 492, $this->getSourceContext()); })()))) {
            // line 493
            echo "    background: #F0F0F0;
    border-bottom-color: #DDD;
";
        } elseif (("light" ==         // line 495
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 495, $this->getSourceContext()); })()))) {
            // line 496
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 496, $this->getSourceContext()); })()), "gray_light", array());
            echo ";
    border-bottom-color: #EEE;
    color: ";
            // line 498
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 498, $this->getSourceContext()); })()), "gray_darker", array());
            echo ";
";
        }
        // line 500
        echo "    padding: 11px 10px 9px;
}
";
        // line 502
        if (("light" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 502, $this->getSourceContext()); })()))) {
            // line 503
            echo ".field-group .box-header .box-title {
    color: #777;
}
";
        }
        // line 507
        echo ".field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

";
        // line 517
        echo ".select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid ";
        // line 521
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 521, $this->getSourceContext()); })()), "gray", array());
        echo ";
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: ";
        // line 524
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 524, $this->getSourceContext()); })()), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: ";
        // line 532
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 532, $this->getSourceContext()); })()), "text", array());
        echo ";
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: ";
        // line 539
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 539, $this->getSourceContext()); })()), "gray_light", array());
        echo ";
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: ";
        // line 543
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 543, $this->getSourceContext()); })());
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: ";
        // line 546
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 546, $this->getSourceContext()); })()), "text", array());
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: ";
        // line 549
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 549, $this->getSourceContext()); })()), "danger", array());
        echo ";
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid ";
        // line 555
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 555, $this->getSourceContext()); })()), "gray_dark", array());
        echo ";
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

";
        // line 568
        echo ".easyadmin-vich-image img {
    border: 3px solid ";
        // line 569
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 569, $this->getSourceContext()); })()), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 570
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 570, $this->getSourceContext()); })()), "gray", array());
        echo ";
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
";
        // line 583
        echo ".easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

";
        // line 593
        echo ".easyadmin-thumbnail img {
    border: 3px solid ";
        // line 594
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 594, $this->getSourceContext()); })()), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 595
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 595, $this->getSourceContext()); })()), "gray", array());
        echo ";
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

";
        // line 617
        echo ".modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: ";
        // line 625
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 625, $this->getSourceContext()); })()), "gray_lighter", array());
        echo ";
    border-top: 1px solid ";
        // line 626
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 626, $this->getSourceContext()); })()), "gray_light", array());
        echo ";
    margin-top: 1.5em;
}

";
        // line 632
        echo ".newrow, .new-row {
    clear: both;
    display: block;
}

";
        // line 640
        echo "
";
        // line 643
        echo ".content-wrapper {
    background: ";
        // line 644
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 644, $this->getSourceContext()); })()), "page_background", array());
        echo ";
}
.fixed .content-wrapper {
    padding-top: 50px;
}

";
        // line 652
        echo ".main-header {
    background: ";
        // line 653
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 653, $this->getSourceContext()); })());
        echo ";
    position: relative;
}
.main-header .logo {
    color: ";
        // line 657
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 657, $this->getSourceContext()); })()), "white", array());
        echo ";
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; ";
        // line 659
        echo "    font-size: 18px;
    font-weight: bold;
    height: 45px;
    line-height: 45px;
    padding: 0;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header #header-logo {
}
.main-header img {
    margin-top: -2px;
    max-height: 36px;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: ";
        // line 684
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 684, $this->getSourceContext()); })());
        echo ";
    color: rgba(255, 255, 255, 0.9);
    margin-left: 0;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: rgba(255, 255, 255, 0.8);
    display: inline-block;
    font-size: 16px;
    height: 35px;
    left: 0;
    line-height: 35px;
    padding: 0 15px;
    position: absolute;
    text-align: center;
    top: 45px;
}
.sidebar-mini.sidebar-collapse .sidebar-toggle {
    color: ";
        // line 703
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 703, $this->getSourceContext()); })()), "white", array());
        echo ";
}

.navbar-custom-menu,
.navbar-custom-menu ul.navbar-nav,
.navbar-custom-menu ul.navbar-nav .user-menu {
    float: none;
}
.navbar-custom-menu {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    text-align: right;
    width: 100%;
}

.main-header .navbar .user-menu .btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: transparent;
    color: #fff;
}
.main-header .navbar .user-menu .btn:active {
    top: 0;
}
.main-header .navbar .user-menu .btn.dropdown-toggle {
    padding: 6px 8px;
}
.main-header .navbar .user-menu .btn-group:hover .btn {
    background: rgba(255, 255, 255, 0.1);
}
.main-header .navbar .user-menu .btn-group {
    height: 35px;
}
.main-header .navbar .user-menu .btn-group .btn {
    border-radius: 0;
}
.main-header .navbar .user-menu .dropdown-menu {
    background: #fff;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 2px;
    position: absolute;
    left: auto;
    right: 0;
}
.main-header .navbar .user-menu .dropdown-menu i {
    margin: 0;
}
.main-header .navbar .user-menu .dropdown-menu a {
    color: #777;
}

";
        // line 760
        echo "#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

";
        // line 776
        echo ".main-sidebar,
.wrapper {
";
        // line 778
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 778, $this->getSourceContext()); })()))) {
            // line 779
            echo "    background-color: #333;
";
        } elseif (("light" ==         // line 780
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 780, $this->getSourceContext()); })()))) {
            // line 781
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 781, $this->getSourceContext()); })()), "gray_light", array());
            echo ";
";
        }
        // line 783
        echo "}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
";
        // line 789
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 789, $this->getSourceContext()); })()))) {
            // line 790
            echo "    color: #777;
";
        } elseif (("light" ==         // line 791
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 791, $this->getSourceContext()); })()))) {
            // line 792
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 792, $this->getSourceContext()); })()), "gray_dark", array());
            echo ";
";
        }
        // line 794
        echo "    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
";
        // line 799
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 799, $this->getSourceContext()); })()))) {
            // line 800
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 801
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 801, $this->getSourceContext()); })()))) {
            // line 802
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 802, $this->getSourceContext()); })()), "gray_lighter", array());
            echo ";
";
        }
        // line 804
        echo "    padding-left: 28px;
}

.sidebar-menu li a,
.sidebar-menu li a span,
.sidebar-menu li.header,
.sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sidebar-mini.sidebar-collapse .sidebar-menu li a {
    overflow: visible;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
";
        // line 821
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 821, $this->getSourceContext()); })()))) {
            // line 822
            echo "    background: #333;
    color: #CCC;
";
        } elseif (("light" ==         // line 824
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 824, $this->getSourceContext()); })()))) {
            // line 825
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 825, $this->getSourceContext()); })()), "gray_darker", array());
            echo ";
";
        }
        // line 827
        echo "    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
";
        // line 833
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 833, $this->getSourceContext()); })()))) {
            // line 834
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 835
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 835, $this->getSourceContext()); })()))) {
            // line 836
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 836, $this->getSourceContext()); })()), "gray_lighter", array());
            echo ";
";
        }
        // line 838
        echo "    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li.active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {
";
        // line 847
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 847, $this->getSourceContext()); })()))) {
            // line 848
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 848, $this->getSourceContext()); })()), "white", array());
            echo ";
    background: #4D4D4D;
    border-left-color: #BBB;
";
        } elseif (("light" ==         // line 851
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 851, $this->getSourceContext()); })()))) {
            // line 852
            echo "    background: #DCDCDC;
    border-left-color: #808080;
";
        }
        // line 855
        echo "}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

";
        // line 864
        echo ".sidebar-menu li > a > .pull-right {
    font-weight: bold;
    text-align: right;
}
";
        // line 869
        echo ".sidebar-menu li.active > a > .fa-angle-left {
    top: 30px;
    right: 0;
}

";
        // line 875
        echo ".sidebar-collapse .sidebar-menu > li > a {
    padding: 12px 5px 12px 12px;
}
.sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {
    padding-left: 12px;
}
.sidebar-collapse .sidebar-menu > li > a > i.fa {
    font-size: 18px;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {
    padding: 0;
}
.sidebar-collapse .sidebar-menu > li:hover > a,
.sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {
    border-left-color: transparent;
";
        // line 892
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 892, $this->getSourceContext()); })()))) {
            // line 893
            echo "    background: #333;
";
        } elseif (("light" ==         // line 894
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 894, $this->getSourceContext()); })()))) {
            // line 895
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 895, $this->getSourceContext()); })()), "gray_light", array());
            echo ";
";
        }
        // line 897
        echo "}

";
        // line 900
        echo ".sidebar-mini.sidebar-collapse .sidebar-menu li.header {
";
        // line 901
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 901, $this->getSourceContext()); })()))) {
            // line 902
            echo "    border-bottom: 1px solid #777;
";
        } elseif (("light" ==         // line 903
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 903, $this->getSourceContext()); })()))) {
            // line 904
            echo "    border-bottom: 1px solid #BBB;
";
        }
        // line 906
        echo "    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

";
        // line 916
        echo "body.easyadmin h1.title {
    margin-bottom: 10px;
}

.help-entity {
";
        // line 921
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 921, $this->getSourceContext()); })()))) {
            // line 922
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 922, $this->getSourceContext()); })()), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 923
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 923, $this->getSourceContext()); })()))) {
            // line 924
            echo "    border: 1px solid #EEE;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
    color: ";
            // line 926
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 926, $this->getSourceContext()); })()), "text_muted", array());
            echo ";
";
        }
        // line 928
        echo "    margin: 10px 0 5px;
}

";
        // line 934
        echo "
body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

";
        // line 970
        echo "body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: ";
        // line 983
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 983, $this->getSourceContext()); })()), "white", array());
        echo ";
";
        // line 984
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 984, $this->getSourceContext()); })()))) {
            // line 985
            echo "    border: 1px solid ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 985, $this->getSourceContext()); })()), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 986
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 986, $this->getSourceContext()); })()))) {
            // line 987
            echo "    border: 1px solid ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 987, $this->getSourceContext()); })()), "gray", array());
            echo ";
";
        }
        // line 989
        echo "    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid ";
        // line 993
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 993, $this->getSourceContext()); })()), "table_row_border", array());
        echo ";
    border-top: 0;
    display: block;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}
/* needed because the responsive tables require contents aligned to the right */
body.list table td,
body.list table .text-center,
body.list table .text-left,
body.list table .text-right {
    text-align: right;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

";
        // line 1034
        echo "body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

";
        // line 1047
        echo "body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
";
        // line 1054
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 1054, $this->getSourceContext()); })()))) {
            // line 1055
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1055, $this->getSourceContext()); })()), "text_muted", array());
            echo ";
";
        } elseif (("light" ==         // line 1056
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 1056, $this->getSourceContext()); })()))) {
            // line 1057
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1057, $this->getSourceContext()); })()), "gray", array());
            echo ";
";
        }
        // line 1059
        echo "}
body.list .pagination > li > a {
    background: ";
        // line 1061
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1061, $this->getSourceContext()); })()), "white", array());
        echo ";
    border-color: ";
        // line 1062
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1062, $this->getSourceContext()); })()), "gray_light", array());
        echo ";
    border-radius: 0;
    color: ";
        // line 1064
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1064, $this->getSourceContext()); })()), "text", array());
        echo ";
}
body.list .pagination > li > a:hover {
    background: ";
        // line 1067
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 1067, $this->getSourceContext()); })());
        echo ";
    color: ";
        // line 1068
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1068, $this->getSourceContext()); })()), "white", array());
        echo ";
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
";
        // line 1080
        echo "body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

";
        // line 1088
        echo "form label.control-label.required:after {
    content: \"\\00a0*\";
    color: ";
        // line 1090
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1090, $this->getSourceContext()); })()), "danger", array());
        echo ";
    font-size: 16px;
}

";
        // line 1097
        echo "body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1119
        echo "body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1141
        echo "body.show .form-control {
";
        // line 1142
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 1142, $this->getSourceContext()); })()))) {
            // line 1143
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1143, $this->getSourceContext()); })()), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1144
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 1144, $this->getSourceContext()); })()))) {
            // line 1145
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1145, $this->getSourceContext()); })()), "gray_lighter", array());
            echo ";
";
        }
        // line 1147
        echo "    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

";
        // line 1161
        echo "body.error .content-wrapper {
    align-items: center;
    display: flex;
}
body.error .error-description {
    background: ";
        // line 1166
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1166, $this->getSourceContext()); })()), "white", array());
        echo ";
    border: 1px solid ";
        // line 1167
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1167, $this->getSourceContext()); })()), "gray_lighter", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 1168
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1168, $this->getSourceContext()); })()), "gray_light", array());
        echo ";
    max-width: 96%;
    padding: 0;
}
body.error .error-description h1 {
    background: ";
        // line 1173
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1173, $this->getSourceContext()); })()), "danger", array());
        echo ";
    color: ";
        // line 1174
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1174, $this->getSourceContext()); })()), "white", array());
        echo ";
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 45px 30px;
    text-align: center;
}

";
        // line 1190
        echo "
";
        // line 1194
        echo "@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .sidebar-mini.sidebar-collapse .main-header .navbar {
        margin-left: 0;
    }
    .main-header #header-logo {
        float: left;
    }
    .main-header .logo {
        font-size: 21px;
        height: 50px;
        line-height: 50px;
        text-align: left;
        transition: padding-left .3s linear;
    }
    .sidebar-mini.sidebar-collapse .main-header .logo {
        padding-left: 15px;
        width: auto; ";
        // line 1218
        echo "        transition: padding-left .3s linear;
    }

    .main-header .navbar .sidebar-toggle {
        height: 50px;
        line-height: 50px;
        position: static;
        padding: 0 12px 0 18px;
    }
    .sidebar-mini.sidebar-collapse .sidebar-toggle {
        background: rgba(0, 0, 0, 0.15);
        font-size: 18px;
        padding-left: 12px;
        width: 50px;
    }

    .navbar-custom-menu,
    .navbar-custom-menu ul.navbar-nav,
    .navbar-custom-menu ul.navbar-nav .user-menu {
        float: right;
    }
    .navbar-custom-menu {
        background: inherit;
        height: 50px;
        line-height: 50px;
        width: auto;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-header .navbar .user-menu .btn {
        background: rgba(255, 255, 255, 0.1);
    }
    .main-header .navbar .user-menu .btn-group:hover .btn {
        background: rgba(255, 255, 255, 0.2);
    }

    .main-sidebar {
        padding-top: 50px;
    }

    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {
        padding-left: 5px;
    }

    ";
        // line 1265
        echo "    body.list table {
        background: ";
        // line 1266
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1266, $this->getSourceContext()); })()), "white", array());
        echo ";
        border: 1px solid ";
        // line 1267
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1267, $this->getSourceContext()); })()), "table_border", array());
        echo ";
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: ";
        // line 1273
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1273, $this->getSourceContext()); })()), "table_header", array());
        echo ";
        padding: 0;
    }
    body.list table thead th i {
        color: ";
        // line 1277
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1277, $this->getSourceContext()); })()), "gray", array());
        echo ";
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: ";
        // line 1282
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1282, $this->getSourceContext()); })()), "text", array());
        echo ";
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: ";
        // line 1288
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1288, $this->getSourceContext()); })()), "gray_light", array());
        echo ";
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
";
        // line 1293
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 1293, $this->getSourceContext()); })()))) {
            // line 1294
            echo "        background: ";
            echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 1294, $this->getSourceContext()); })());
            echo ";
        color: ";
            // line 1295
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1295, $this->getSourceContext()); })()), "white", array());
            echo ";
";
        }
        // line 1297
        echo "    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
";
        // line 1300
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 1300, $this->getSourceContext()); })()))) {
            // line 1301
            echo "        color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1301, $this->getSourceContext()); })()), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1302
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 1302, $this->getSourceContext()); })()))) {
            // line 1303
            echo "        color: ";
            echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 1303, $this->getSourceContext()); })());
            echo ";
";
        }
        // line 1305
        echo "    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid ";
        // line 1313
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1313, $this->getSourceContext()); })()), "gray_light", array());
        echo ";
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset ";
        // line 1316
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 1316, $this->getSourceContext()); })());
        echo ";
    }
    ";
        // line 1319
        echo "    body.list .table thead tr th:first-child.sorted {
";
        // line 1320
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 1320, $this->getSourceContext()); })()))) {
            // line 1321
            echo "        border-left: 1px solid ";
            echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 1321, $this->getSourceContext()); })());
            echo ";
        border-top: 1px solid ";
            // line 1322
            echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 1322, $this->getSourceContext()); })());
            echo ";
";
        }
        // line 1324
        echo "    }
    body.list .table tbody {
        border-bottom: 2px double ";
        // line 1326
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1326, $this->getSourceContext()); })()), "gray_light", array());
        echo ";
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid ";
        // line 1335
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1335, $this->getSourceContext()); })()), "table_row_border", array());
        echo ";
        display: table-cell;
    }
    body.list table tbody td:last-child {
        white-space: nowrap;
        width: 1%;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: ";
        // line 1347
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1347, $this->getSourceContext()); })()), "gray_lighter", array());
        echo ";
        border-color: ";
        // line 1348
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1348, $this->getSourceContext()); })()), "table_row_border", array());
        echo ";
    }
    body.list .table tbody tr:hover td {
        background: ";
        // line 1351
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1351, $this->getSourceContext()); })()), "gray_lighter", array());
        echo ";
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }
    body.list table td { text-align: left; }
    body.list table .text-center { text-align: center; }
    body.list table .text-left   { text-align: left; }
    body.list table .text-right  { text-align: right; }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 550px;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    ";
        // line 1391
        echo "    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
";
        
        $__internal_c6e8fd3ff203afa4e01f42a3db2fe2e2875045a788e8773d8091249cbaf5138e->leave($__internal_c6e8fd3ff203afa4e01f42a3db2fe2e2875045a788e8773d8091249cbaf5138e_prof);

        
        $__internal_024c3af7ce20abae52fe096bf844c0babc906e14dbfe25312ff434d66d48b7b5->leave($__internal_024c3af7ce20abae52fe096bf844c0babc906e14dbfe25312ff434d66d48b7b5_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/css/easyadmin.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1891 => 1391,  1850 => 1351,  1844 => 1348,  1840 => 1347,  1825 => 1335,  1813 => 1326,  1809 => 1324,  1804 => 1322,  1799 => 1321,  1797 => 1320,  1794 => 1319,  1789 => 1316,  1783 => 1313,  1773 => 1305,  1767 => 1303,  1765 => 1302,  1760 => 1301,  1758 => 1300,  1753 => 1297,  1748 => 1295,  1743 => 1294,  1741 => 1293,  1733 => 1288,  1724 => 1282,  1716 => 1277,  1709 => 1273,  1700 => 1267,  1696 => 1266,  1693 => 1265,  1645 => 1218,  1620 => 1194,  1617 => 1190,  1601 => 1174,  1597 => 1173,  1589 => 1168,  1585 => 1167,  1581 => 1166,  1574 => 1161,  1561 => 1147,  1555 => 1145,  1553 => 1144,  1548 => 1143,  1546 => 1142,  1543 => 1141,  1522 => 1119,  1501 => 1097,  1494 => 1090,  1490 => 1088,  1483 => 1080,  1471 => 1068,  1467 => 1067,  1461 => 1064,  1456 => 1062,  1452 => 1061,  1448 => 1059,  1442 => 1057,  1440 => 1056,  1435 => 1055,  1433 => 1054,  1424 => 1047,  1411 => 1034,  1369 => 993,  1363 => 989,  1357 => 987,  1355 => 986,  1350 => 985,  1348 => 984,  1344 => 983,  1329 => 970,  1293 => 934,  1288 => 928,  1283 => 926,  1279 => 924,  1277 => 923,  1272 => 922,  1270 => 921,  1263 => 916,  1254 => 906,  1250 => 904,  1248 => 903,  1245 => 902,  1243 => 901,  1240 => 900,  1236 => 897,  1230 => 895,  1228 => 894,  1225 => 893,  1223 => 892,  1204 => 875,  1197 => 869,  1191 => 864,  1181 => 855,  1176 => 852,  1174 => 851,  1167 => 848,  1165 => 847,  1154 => 838,  1148 => 836,  1146 => 835,  1143 => 834,  1141 => 833,  1133 => 827,  1127 => 825,  1125 => 824,  1121 => 822,  1119 => 821,  1100 => 804,  1094 => 802,  1092 => 801,  1089 => 800,  1087 => 799,  1080 => 794,  1074 => 792,  1072 => 791,  1069 => 790,  1067 => 789,  1059 => 783,  1053 => 781,  1051 => 780,  1048 => 779,  1046 => 778,  1042 => 776,  1026 => 760,  968 => 703,  946 => 684,  919 => 659,  915 => 657,  908 => 653,  905 => 652,  896 => 644,  893 => 643,  890 => 640,  883 => 632,  876 => 626,  872 => 625,  862 => 617,  839 => 595,  835 => 594,  832 => 593,  822 => 583,  807 => 570,  803 => 569,  800 => 568,  786 => 555,  777 => 549,  771 => 546,  765 => 543,  758 => 539,  748 => 532,  737 => 524,  731 => 521,  725 => 517,  716 => 507,  710 => 503,  708 => 502,  704 => 500,  699 => 498,  693 => 496,  691 => 495,  687 => 493,  685 => 492,  680 => 489,  676 => 487,  674 => 486,  671 => 485,  669 => 484,  664 => 481,  660 => 479,  658 => 478,  655 => 477,  653 => 476,  644 => 469,  640 => 467,  638 => 466,  635 => 465,  633 => 464,  627 => 460,  622 => 458,  619 => 457,  617 => 456,  613 => 455,  608 => 454,  606 => 453,  598 => 447,  594 => 445,  592 => 444,  589 => 443,  587 => 442,  583 => 440,  577 => 438,  575 => 437,  572 => 436,  570 => 435,  563 => 430,  557 => 424,  552 => 419,  547 => 416,  545 => 415,  541 => 413,  536 => 411,  531 => 410,  529 => 409,  525 => 408,  520 => 407,  518 => 406,  505 => 396,  486 => 380,  481 => 377,  475 => 375,  473 => 374,  467 => 372,  465 => 371,  456 => 366,  452 => 364,  450 => 363,  445 => 361,  438 => 356,  408 => 327,  400 => 321,  394 => 317,  389 => 315,  378 => 307,  373 => 305,  355 => 290,  343 => 281,  338 => 279,  314 => 258,  309 => 255,  303 => 253,  301 => 252,  296 => 251,  294 => 250,  275 => 233,  269 => 228,  266 => 227,  249 => 211,  238 => 203,  234 => 202,  230 => 201,  218 => 192,  214 => 191,  210 => 190,  181 => 163,  174 => 154,  167 => 149,  157 => 143,  150 => 139,  139 => 130,  133 => 127,  130 => 126,  121 => 117,  117 => 116,  111 => 113,  107 => 112,  101 => 108,  83 => 90,  73 => 81,  66 => 77,  51 => 66,  45 => 60,  38 => 52,  35 => 45,  33 => 44,  30 => 43,  28 => 5,  25 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#  ========================================================================
    EasyAdmin Default Theme | (c) 2015 Javier Eguiluz | MIT License
    ======================================================================== #}

{% set color_schemes = {
    'dark': {
        danger: '#D42124',
        success: '#006B2E',
        text: '#222222',
        text_muted: '#737373',
        link: '#205081',
        black: '#111111',
        white: '#FFFFFF',
        gray_darker: '#252525',
        gray_dark: '#444',
        gray: '#AAA',
        gray_light: '#CCC',
        gray_lighter: '#F5F5F5',
        page_background: '#F5F5F5',
        table_header: '#EEE',
        table_border: '#CCC',
        table_row_border: '#DDD',
    },
    'light': {
        danger: '#D42124',
        success: '#006B2E',
        text: '#444444',
        text_muted: '#737373',
        link: '#205081',
        black: '#333333',
        white: '#FFFFFF',
        gray_darker: '#444',
        gray_dark: '#AAA',
        gray: '#CCC',
        gray_light: '#F5F5F5',
        gray_lighter: '#FAFAFA',
        page_background: '#FFFFFF',
        table_header: '#FAFAFA',
        table_border: '#FFFFFF',
        table_row_border: '#E5E5E5',
    }
} %}

{% set colors = color_schemes[color_scheme] %}

{% autoescape false %}
{# -------------------------------------------------------------------------
   RESET STYLES
   ------------------------------------------------------------------------- #}
{# make the Symfony Web Toolbar look nice by neutralizing the aliasing applied
   globally by the AdminLTE template styles #}
.sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

{# -------------------------------------------------------------------------
   BASIC STYLES
   ------------------------------------------------------------------------- #}
body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

{# Links
   ------------------------------------------------------------------------- #}
a        { color: {{ colors.link }}; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: {{ colors.link }};
}
a.text-danger,
a.text-danger:focus {
    color: {{ colors.danger }};
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

{# Lists
   ------------------------------------------------------------------------- #}
ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

{# Flash messages
   ------------------------------------------------------------------------- #}
div.flash {
    padding: .5em;
}
div.flash-success {
    background: {{ colors.success }};
    color: {{ colors.white }};
}
div.flash-error {
    background: {{ colors.danger }};
    color: {{ colors.white }};
}
div.flash-error strong {
    padding-right: .5em;
}

{# Labels
   ------------------------------------------------------------------------- #}
{# this prevents overriding default styles for labels (label-info, label-primary, etc.) #}
.label:not([class*=label-]) {
    background: {{ colors.gray_darker }};
}
.label {
    color: {{ colors.white }};
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    {# !important is required to override AdminLTE styles #}
    background: {{ colors.success }} !important;
}
.label-danger {
    {# !important is required to override AdminLTE styles #}
    background: {{ colors.danger }} !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: {{ colors.gray_light }};
    padding: 4px 8px;
}

{# this makes boolean labels to be of the same width for most languages #}
.boolean .label,
.toggle .label {
    min-width: 33px;
}

{# Switches / toggles
   ------------------------------------------------------------------------- #}
{# needed to neutralize the default .toggle styles applied by Bootstrap Toggle
   which collide with the .toggle class applied to <th> too #}
.toggle { position: initial; }
.toggle:not(th) { position: relative; }

.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    background: {{ colors.success }};
    border-color: {{ colors.success }};
    color: {{ colors.white }};
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    background: {{ colors.danger }};
    border-color: {{ colors.danger }};
    color: {{ colors.white }};
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: {{ colors.gray_lighter }};
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

{# Badges
   ------------------------------------------------------------------------- #}
span.badge {
    background-color: {{ brand_color }};
}

{# Buttons
   ------------------------------------------------------------------------- #}
.btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
{% if 'dark' == color_scheme %}
    background: {{ colors.gray_light }};
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray }};
{% endif %}
    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: {{ colors.text }};
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}
.btn-xs,
.btn-xs:hover,
.btn-xs:active,
.btn-xs:focus,
.btn-xs:active:hover {
    padding: 1px 5px;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: {{ brand_color }};
    border-color: transparent;
    color: {{ colors.white }};
}
.btn-info,
.btn-info:hover,
.btn-info:active,
.btn-info:focus,
.btn-info:active:hover {
    background-color: #39a0ed;
    border-color: transparent;
    color: {{ colors.white }};
}
.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}

.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: {{ colors.danger }};
    border-color: transparent;
    color: {{ colors.white }};
}

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: {{ colors.success }};
    border-color: transparent;
    color: {{ colors.white }};
}

{# .bnt-secondary is for 'buttons' displayed as text links #}
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: {{ brand_color }};
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-danger,
.btn-success,
.btn-info {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

{# Forms
   ------------------------------------------------------------------------- #}
.form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid {{ colors.gray }};
    border-radius: 0;
{% if 'dark' == color_scheme %}
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
{% endif %}
    color: {{ colors.text }};
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
{% if 'dark' == color_scheme %}
    border-color: {{ colors.gray_dark }};
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
{% elseif 'light' == color_scheme %}
    border-color: {{ colors.gray_darker }};
{% endif %}
}

.has-error .error-block {
    color: {{ colors.danger }};
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: {{ colors.text_muted }};
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
{% if 'dark' == color_scheme %}
    background-color: {{ colors.gray_lighter }};
    box-shadow: 0 -1px 4px {{ colors.gray_light }};
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_light }};
    box-shadow: 0 -1px 4px {{ colors.gray }};
{% endif %}
    height: 52px;
    padding-top: 10px;
{% if kernel_debug|default(false) %}
    height: 85px;
    padding-bottom: 45px;
{% endif %}
    z-index: 9999;
}

{# Field: collection
   ------------------------------------------------------------------------- #}
.field-collection .collection-empty {
    margin: .5em 0;
}

{# Field: special Form Fields (dividers, groups, sections)
   ------------------------------------------------------------------------- #}
.field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
{% if 'dark' == color_scheme %}
    border-top-color: #DDD;
{% elseif 'light' == color_scheme %}
    border-top-color: {{ colors.gray_lighter }};
{% endif %}
}
.field-group .field-divider hr {
{% if 'dark' == color_scheme %}
    border-top-color: #DDD;
{% elseif 'light' == color_scheme %}
    border-top-color: #EEE;
{% endif %}
}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
{% if 'dark' == color_scheme %}
    border-bottom: 1px solid {{ colors.gray_light }};
    color: {{ colors.gray_dark }};
{% elseif 'light' == color_scheme %}
    border-bottom: 1px solid #EEE;
    color: {{ colors.gray_darker }};
{% endif %}
    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
{% if 'dark' == color_scheme %}
    color: #555;
{% elseif 'light' == color_scheme %}
    color: #777;
{% endif %}
    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
{% if 'dark' == color_scheme %}
    border: 1px solid #DDD;
{% elseif 'light' == color_scheme %}
    border: 1px solid #EEE;
{% endif %}
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
{% if 'dark' == color_scheme %}
    color: #555;
{% elseif 'light' == color_scheme %}
    color: #777;
{% endif %}
    margin-right: 2px;
}
.field-group .box-header.with-border {
{% if 'dark' == color_scheme %}
    background: #F0F0F0;
    border-bottom-color: #DDD;
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray_light }};
    border-bottom-color: #EEE;
    color: {{ colors.gray_darker }};
{% endif %}
    padding: 11px 10px 9px;
}
{% if 'light' == color_scheme %}
.field-group .box-header .box-title {
    color: #777;
}
{% endif %}
.field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

{# Select2 widget
   ------------------------------------------------------------------------- #}
{# these styles must be applied after loading the default select2 styles #}
.select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid {{ colors.gray }};
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: {{ colors.text }};
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: {{ colors.text }};
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: {{ colors.gray_light }};
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: {{ brand_color }};
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: {{ colors.text }};
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: {{ colors.danger }};
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid {{ colors.gray_dark }};
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

{# VichUploaderBundle files and images
   ------------------------------------------------------------------------- #}
.easyadmin-vich-image img {
    border: 3px solid {{ colors.white }};
    box-shadow: 0 0 3px {{ colors.gray }};
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
{# the checkbox to delete the image/file #}
.easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

{# Thumbnails and image lightbox
   ------------------------------------------------------------------------- #}
.easyadmin-thumbnail img {
    border: 3px solid {{ colors.white }};
    box-shadow: 0 0 3px {{ colors.gray }};
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

{# Modal windows
   ------------------------------------------------------------------------- #}
.modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: {{ colors.gray_lighter }};
    border-top: 1px solid {{ colors.gray_light }};
    margin-top: 1.5em;
}

{# Utils
   ------------------------------------------------------------------------- #}
.newrow, .new-row {
    clear: both;
    display: block;
}

{# -------------------------------------------------------------------------
   LAYOUT
   ------------------------------------------------------------------------- #}

{# Wrapper
   ------------------------------------------------------------------------- #}
.content-wrapper {
    background: {{ colors.page_background }};
}
.fixed .content-wrapper {
    padding-top: 50px;
}

{# Header
   ------------------------------------------------------------------------- #}
.main-header {
    background: {{ brand_color }};
    position: relative;
}
.main-header .logo {
    color: {{ colors.white }};
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; {# needed to override AdminLTE styles #}
    font-size: 18px;
    font-weight: bold;
    height: 45px;
    line-height: 45px;
    padding: 0;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header #header-logo {
}
.main-header img {
    margin-top: -2px;
    max-height: 36px;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: {{ brand_color }};
    color: rgba(255, 255, 255, 0.9);
    margin-left: 0;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: rgba(255, 255, 255, 0.8);
    display: inline-block;
    font-size: 16px;
    height: 35px;
    left: 0;
    line-height: 35px;
    padding: 0 15px;
    position: absolute;
    text-align: center;
    top: 45px;
}
.sidebar-mini.sidebar-collapse .sidebar-toggle {
    color: {{ colors.white }};
}

.navbar-custom-menu,
.navbar-custom-menu ul.navbar-nav,
.navbar-custom-menu ul.navbar-nav .user-menu {
    float: none;
}
.navbar-custom-menu {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    text-align: right;
    width: 100%;
}

.main-header .navbar .user-menu .btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: transparent;
    color: #fff;
}
.main-header .navbar .user-menu .btn:active {
    top: 0;
}
.main-header .navbar .user-menu .btn.dropdown-toggle {
    padding: 6px 8px;
}
.main-header .navbar .user-menu .btn-group:hover .btn {
    background: rgba(255, 255, 255, 0.1);
}
.main-header .navbar .user-menu .btn-group {
    height: 35px;
}
.main-header .navbar .user-menu .btn-group .btn {
    border-radius: 0;
}
.main-header .navbar .user-menu .dropdown-menu {
    background: #fff;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 2px;
    position: absolute;
    left: auto;
    right: 0;
}
.main-header .navbar .user-menu .dropdown-menu i {
    margin: 0;
}
.main-header .navbar .user-menu .dropdown-menu a {
    color: #777;
}

{# Main body
   ------------------------------------------------------------------------- #}
#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

{# Sidebar
   ------------------------------------------------------------------------- #}
.main-sidebar,
.wrapper {
{% if 'dark' == color_scheme %}
    background-color: #333;
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_light }};
{% endif %}
}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
{% if 'dark' == color_scheme %}
    color: #777;
{% elseif 'light' == color_scheme %}
    color: {{ colors.gray_dark }};
{% endif %}
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
{% if 'dark' == color_scheme %}
    background: #404040;
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_lighter }};
{% endif %}
    padding-left: 28px;
}

.sidebar-menu li a,
.sidebar-menu li a span,
.sidebar-menu li.header,
.sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sidebar-mini.sidebar-collapse .sidebar-menu li a {
    overflow: visible;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
{% if 'dark' == color_scheme %}
    background: #333;
    color: #CCC;
{% elseif 'light' == color_scheme %}
    color: {{ colors.gray_darker }};
{% endif %}
    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
{% if 'dark' == color_scheme %}
    background: #404040;
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_lighter }};
{% endif %}
    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li.active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {
{% if 'dark' == color_scheme %}
    color: {{ colors.white }};
    background: #4D4D4D;
    border-left-color: #BBB;
{% elseif 'light' == color_scheme %}
    background: #DCDCDC;
    border-left-color: #808080;
{% endif %}
}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

{# icon displayed for collapsed submenus #}
.sidebar-menu li > a > .pull-right {
    font-weight: bold;
    text-align: right;
}
{# icon displayed for revealed submenus #}
.sidebar-menu li.active > a > .fa-angle-left {
    top: 30px;
    right: 0;
}

{# when the sidebar is collapsed #}
.sidebar-collapse .sidebar-menu > li > a {
    padding: 12px 5px 12px 12px;
}
.sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {
    padding-left: 12px;
}
.sidebar-collapse .sidebar-menu > li > a > i.fa {
    font-size: 18px;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {
    padding: 0;
}
.sidebar-collapse .sidebar-menu > li:hover > a,
.sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {
    border-left-color: transparent;
{% if 'dark' == color_scheme %}
    background: #333;
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray_light }};
{% endif %}
}

{# when collapsed, menu dividers are displayed as a straight line #}
.sidebar-mini.sidebar-collapse .sidebar-menu li.header {
{% if 'dark' == color_scheme %}
    border-bottom: 1px solid #777;
{% elseif 'light' == color_scheme %}
    border-bottom: 1px solid #BBB;
{% endif %}
    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

{# -------------------------------------------------------------------------
   COMMON ADMIN PAGES
   ------------------------------------------------------------------------- #}
body.easyadmin h1.title {
    margin-bottom: 10px;
}

.help-entity {
{% if 'dark' == color_scheme %}
    color: {{ colors.gray_dark }};
{% elseif 'light' == color_scheme %}
    border: 1px solid #EEE;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
    color: {{ colors.text_muted }};
{% endif %}
    margin: 10px 0 5px;
}

{# -------------------------------------------------------------------------
   LIST PAGE
   ------------------------------------------------------------------------- #}

body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

{# Responsive tables
   ------------------------------------------------------------------------- #}
body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: {{ colors.white }};
{% if 'dark' == color_scheme %}
    border: 1px solid {{ colors.gray_light }};
{% elseif 'light' == color_scheme %}
    border: 1px solid {{ colors.gray }};
{% endif %}
    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid {{ colors.table_row_border }};
    border-top: 0;
    display: block;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}
/* needed because the responsive tables require contents aligned to the right */
body.list table td,
body.list table .text-center,
body.list table .text-left,
body.list table .text-right {
    text-align: right;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

{# Search results
   ------------------------------------------------------------------------- #}
body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

{# Pagination
   ------------------------------------------------------------------------- #}
body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
{% if 'dark' == color_scheme %}
    color: {{ colors.text_muted }};
{% elseif 'light' == color_scheme %}
    color: {{ colors.gray }};
{% endif %}
}
body.list .pagination > li > a {
    background: {{ colors.white }};
    border-color: {{ colors.gray_light }};
    border-radius: 0;
    color: {{ colors.text }};
}
body.list .pagination > li > a:hover {
    background: {{ brand_color }};
    color: {{ colors.white }};
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
{# this hack is needed to avoid the last pagination page from showing wrong
   borders for the second pagination element (we need to put this element above
   the third element) #}
body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

{# -------------------------------------------------------------------------
   FORM PAGE
   ------------------------------------------------------------------------- #}
form label.control-label.required:after {
    content: \"\\00a0*\";
    color: {{ colors.danger }};
    font-size: 16px;
}

{# -------------------------------------------------------------------------
   NEW PAGE
   ------------------------------------------------------------------------- #}
body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

{# -------------------------------------------------------------------------
   EDIT PAGE
   ------------------------------------------------------------------------- #}
body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

{# -------------------------------------------------------------------------
   SHOW PAGE
   ------------------------------------------------------------------------- #}
body.show .form-control {
{% if 'dark' == color_scheme %}
    background: {{ colors.white }};
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray_lighter }};
{% endif %}
    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

{# -------------------------------------------------------------------------
   ERROR PAGES
   ------------------------------------------------------------------------- #}
body.error .content-wrapper {
    align-items: center;
    display: flex;
}
body.error .error-description {
    background: {{ colors.white }};
    border: 1px solid {{ colors.gray_lighter }};
    box-shadow: 0 0 3px {{ colors.gray_light }};
    max-width: 96%;
    padding: 0;
}
body.error .error-description h1 {
    background: {{ colors.danger }};
    color: {{ colors.white }};
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 45px 30px;
    text-align: center;
}

{# =========================================================================
   RESPONSIVE
   ========================================================================= #}

{# -------------------------------------------------------------------------
   VERTICAL TABLETS and LANDSCAPE SMARTPHONES
   ------------------------------------------------------------------------- #}
@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .sidebar-mini.sidebar-collapse .main-header .navbar {
        margin-left: 0;
    }
    .main-header #header-logo {
        float: left;
    }
    .main-header .logo {
        font-size: 21px;
        height: 50px;
        line-height: 50px;
        text-align: left;
        transition: padding-left .3s linear;
    }
    .sidebar-mini.sidebar-collapse .main-header .logo {
        padding-left: 15px;
        width: auto; {# neutralizes AdminLTE styles #}
        transition: padding-left .3s linear;
    }

    .main-header .navbar .sidebar-toggle {
        height: 50px;
        line-height: 50px;
        position: static;
        padding: 0 12px 0 18px;
    }
    .sidebar-mini.sidebar-collapse .sidebar-toggle {
        background: rgba(0, 0, 0, 0.15);
        font-size: 18px;
        padding-left: 12px;
        width: 50px;
    }

    .navbar-custom-menu,
    .navbar-custom-menu ul.navbar-nav,
    .navbar-custom-menu ul.navbar-nav .user-menu {
        float: right;
    }
    .navbar-custom-menu {
        background: inherit;
        height: 50px;
        line-height: 50px;
        width: auto;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-header .navbar .user-menu .btn {
        background: rgba(255, 255, 255, 0.1);
    }
    .main-header .navbar .user-menu .btn-group:hover .btn {
        background: rgba(255, 255, 255, 0.2);
    }

    .main-sidebar {
        padding-top: 50px;
    }

    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {
        padding-left: 5px;
    }

    {# these table styles are needed to override the \"responsive tables\" styles #}
    body.list table {
        background: {{ colors.white }};
        border: 1px solid {{ colors.table_border }};
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: {{ colors.table_header }};
        padding: 0;
    }
    body.list table thead th i {
        color: {{ colors.gray }};
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: {{ colors.text }};
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: {{ colors.gray_light }};
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
{% if 'dark' == color_scheme %}
        background: {{ brand_color }};
        color: {{ colors.white }};
{% endif %}
    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
{% if 'dark' == color_scheme %}
        color: {{ colors.white }};
{% elseif 'light' == color_scheme %}
        color: {{ brand_color }};
{% endif %}
    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid {{ colors.gray_light }};
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset {{ brand_color }};
    }
    {# these styles are needed to fix some visual glitches when the sort field is the first column #}
    body.list .table thead tr th:first-child.sorted {
{% if 'dark' == color_scheme %}
        border-left: 1px solid {{ brand_color }};
        border-top: 1px solid {{ brand_color }};
{% endif %}
    }
    body.list .table tbody {
        border-bottom: 2px double {{ colors.gray_light }};
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid {{ colors.table_row_border }};
        display: table-cell;
    }
    body.list table tbody td:last-child {
        white-space: nowrap;
        width: 1%;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: {{ colors.gray_lighter }};
        border-color: {{ colors.table_row_border }};
    }
    body.list .table tbody tr:hover td {
        background: {{ colors.gray_lighter }};
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }
    body.list table td { text-align: left; }
    body.list table .text-center { text-align: center; }
    body.list table .text-left   { text-align: left; }
    body.list table .text-right  { text-align: right; }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 550px;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    {# Field: checkbox
       ------------------------------------------------------------------------- #}
    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
{% endautoescape %}
", "@EasyAdmin/css/easyadmin.css.twig", "/home/sunshine/Documents/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/css/easyadmin.css.twig");
    }
}
