<?php

/* @WebProfiler/Collector/validator.html.twig */
class __TwigTemplate_dcaf7f2e8e604761c9d68f37bc77d5b4ee011a0e105d0f2df7a506a0081ed51e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/validator.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_604521adb6c7fd644d1d93da2cbe4dcf902e59eb99919070888d058dab8f38b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604521adb6c7fd644d1d93da2cbe4dcf902e59eb99919070888d058dab8f38b3->enter($__internal_604521adb6c7fd644d1d93da2cbe4dcf902e59eb99919070888d058dab8f38b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/validator.html.twig"));

        $__internal_c1509891311c6f780fe182bc351c68daacfbc0c6703fbb709259e236d654ccf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1509891311c6f780fe182bc351c68daacfbc0c6703fbb709259e236d654ccf5->enter($__internal_c1509891311c6f780fe182bc351c68daacfbc0c6703fbb709259e236d654ccf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/validator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_604521adb6c7fd644d1d93da2cbe4dcf902e59eb99919070888d058dab8f38b3->leave($__internal_604521adb6c7fd644d1d93da2cbe4dcf902e59eb99919070888d058dab8f38b3_prof);

        
        $__internal_c1509891311c6f780fe182bc351c68daacfbc0c6703fbb709259e236d654ccf5->leave($__internal_c1509891311c6f780fe182bc351c68daacfbc0c6703fbb709259e236d654ccf5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_719447ff42abd17d9b20e95e3f40089ff7fd253764ca1911a8c3afe5f21f42e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719447ff42abd17d9b20e95e3f40089ff7fd253764ca1911a8c3afe5f21f42e8->enter($__internal_719447ff42abd17d9b20e95e3f40089ff7fd253764ca1911a8c3afe5f21f42e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a510277223f2eb21a0aeb1174cdfa4541b943b35a32ab3412dc2e5909c94e4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a510277223f2eb21a0aeb1174cdfa4541b943b35a32ab3412dc2e5909c94e4a3->enter($__internal_a510277223f2eb21a0aeb1174cdfa4541b943b35a32ab3412dc2e5909c94e4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "violationsCount", array()) > 0) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "calls", array())))) {
            // line 5
            echo "        ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 5, $this->getSourceContext()); })()), "violationsCount", array())) ? ("red") : (""));
            // line 6
            echo "        ";
            ob_start();
            // line 7
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/validator.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 9
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 9, $this->getSourceContext()); })()), "violationsCount", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 9, $this->getSourceContext()); })()), "violationsCount", array())) : (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 9, $this->getSourceContext()); })()), "calls", array())))), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Validator calls</b>
                <span class=\"sf-toolbar-status\">";
            // line 16
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "calls", array())), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of violations</b>
                <span class=\"sf-toolbar-status";
            // line 20
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 20, $this->getSourceContext()); })()), "violationsCount", array()) > 0)) ? (" sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 20, $this->getSourceContext()); })()), "violationsCount", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 23
            echo "
        ";
            // line 24
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 24, $this->getSourceContext()); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new Twig_Error_Runtime('Variable "status_color" does not exist.', 24, $this->getSourceContext()); })())));
            echo "
    ";
        }
        
        $__internal_a510277223f2eb21a0aeb1174cdfa4541b943b35a32ab3412dc2e5909c94e4a3->leave($__internal_a510277223f2eb21a0aeb1174cdfa4541b943b35a32ab3412dc2e5909c94e4a3_prof);

        
        $__internal_719447ff42abd17d9b20e95e3f40089ff7fd253764ca1911a8c3afe5f21f42e8->leave($__internal_719447ff42abd17d9b20e95e3f40089ff7fd253764ca1911a8c3afe5f21f42e8_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05b68c4f0b83d18f6995f5d9ae237935ea7fe81d4a9deb6557493f3e9127d296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b68c4f0b83d18f6995f5d9ae237935ea7fe81d4a9deb6557493f3e9127d296->enter($__internal_05b68c4f0b83d18f6995f5d9ae237935ea7fe81d4a9deb6557493f3e9127d296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5366ffd5dc7cecedf7e4782e1a22b41cbaab3a9e04a389979c2c47c72059d35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5366ffd5dc7cecedf7e4782e1a22b41cbaab3a9e04a389979c2c47c72059d35d->enter($__internal_5366ffd5dc7cecedf7e4782e1a22b41cbaab3a9e04a389979c2c47c72059d35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        echo "    <span class=\"label";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 29, $this->getSourceContext()); })()), "violationsCount", array())) ? (" label-status-error") : (""));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 29, $this->getSourceContext()); })()), "calls", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Icon/validator.svg");
        echo "</span>
        <strong>Validator</strong>
        ";
        // line 32
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 32, $this->getSourceContext()); })()), "violationsCount", array()) > 0)) {
            // line 33
            echo "            <span class=\"count\">
                <span>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 34, $this->getSourceContext()); })()), "violationsCount", array()), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 37
        echo "    </span>
";
        
        $__internal_5366ffd5dc7cecedf7e4782e1a22b41cbaab3a9e04a389979c2c47c72059d35d->leave($__internal_5366ffd5dc7cecedf7e4782e1a22b41cbaab3a9e04a389979c2c47c72059d35d_prof);

        
        $__internal_05b68c4f0b83d18f6995f5d9ae237935ea7fe81d4a9deb6557493f3e9127d296->leave($__internal_05b68c4f0b83d18f6995f5d9ae237935ea7fe81d4a9deb6557493f3e9127d296_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f29c58dde8d14e49e801530ca02d4f45f439db3898b9dc8f180d3ae58ccd7eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f29c58dde8d14e49e801530ca02d4f45f439db3898b9dc8f180d3ae58ccd7eb->enter($__internal_6f29c58dde8d14e49e801530ca02d4f45f439db3898b9dc8f180d3ae58ccd7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4a6479c7a6f40e46323ca9c46da7a87844217fa538ca950236ab49b3520faad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6479c7a6f40e46323ca9c46da7a87844217fa538ca950236ab49b3520faad1->enter($__internal_4a6479c7a6f40e46323ca9c46da7a87844217fa538ca950236ab49b3520faad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    <h2>Validator calls</h2>

    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 43, $this->getSourceContext()); })()), "calls", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            // line 44
            echo "        <div class=\"sf-validator sf-reset\">
            <span class=\"metadata\">In
                ";
            // line 46
            $context["caller"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "caller", array());
            // line 47
            echo "                ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new Twig_Error_Runtime('Variable "caller" does not exist.', 47, $this->getSourceContext()); })()), "line", array())) {
                // line 48
                echo "                    ";
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new Twig_Error_Runtime('Variable "caller" does not exist.', 48, $this->getSourceContext()); })()), "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new Twig_Error_Runtime('Variable "caller" does not exist.', 48, $this->getSourceContext()); })()), "line", array()));
                // line 49
                echo "                    ";
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 49, $this->getSourceContext()); })())) {
                    // line 50
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 50, $this->getSourceContext()); })()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new Twig_Error_Runtime('Variable "caller" does not exist.', 50, $this->getSourceContext()); })()), "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new Twig_Error_Runtime('Variable "caller" does not exist.', 50, $this->getSourceContext()); })()), "name", array()), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 52
                    echo "                        <abbr title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new Twig_Error_Runtime('Variable "caller" does not exist.', 52, $this->getSourceContext()); })()), "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new Twig_Error_Runtime('Variable "caller" does not exist.', 52, $this->getSourceContext()); })()), "name", array()), "html", null, true);
                    echo "</abbr>
                    ";
                }
                // line 54
                echo "                ";
            } else {
                // line 55
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new Twig_Error_Runtime('Variable "caller" does not exist.', 55, $this->getSourceContext()); })()), "name", array()), "html", null, true);
                echo "
                ";
            }
            // line 57
            echo "                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new Twig_Error_Runtime('Variable "caller" does not exist.', 57, $this->getSourceContext()); })()), "line", array()), "html", null, true);
            echo "</a> (<a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-context-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "\">context</a>):
            </span>

            <div class=\"sf-validator-compact hidden\" id=\"sf-trace-";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "\">
                <div class=\"trace\">
                    ";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new Twig_Error_Runtime('Variable "caller" does not exist.', 62, $this->getSourceContext()); })()), "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new Twig_Error_Runtime('Variable "caller" does not exist.', 62, $this->getSourceContext()); })()), "line", array()));
            echo "
                </div>
            </div>

            <div class=\"sf-validator-compact hidden sf-validator-context\" id=\"sf-context-";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "\">
                ";
            // line 67
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "context", array()), 1));
            echo "
            </div>

            ";
            // line 70
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "violations", array()))) {
                // line 71
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Path</th>
                            <th>Message</th>
                            <th>Invalid value</th>
                            <th>Violation</th>
                        </tr>
                    </thead>
                    ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "violations", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["violation"]) {
                    // line 81
                    echo "                        <tr>
                            <td>";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["violation"], "propertyPath", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["violation"], "message", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 84
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["violation"], "seek", array(0 => "invalidValue"), "method")));
                    echo "</td>
                            <td>";
                    // line 85
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["violation"]));
                    echo "</td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['violation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "                </table>
            ";
            } else {
                // line 90
                echo "                No violations
            ";
            }
            // line 92
            echo "        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 94
            echo "        <div class=\"empty\">
            <p>No calls to the validator were collected during this request.</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4a6479c7a6f40e46323ca9c46da7a87844217fa538ca950236ab49b3520faad1->leave($__internal_4a6479c7a6f40e46323ca9c46da7a87844217fa538ca950236ab49b3520faad1_prof);

        
        $__internal_6f29c58dde8d14e49e801530ca02d4f45f439db3898b9dc8f180d3ae58ccd7eb->leave($__internal_6f29c58dde8d14e49e801530ca02d4f45f439db3898b9dc8f180d3ae58ccd7eb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/validator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 94,  310 => 92,  306 => 90,  302 => 88,  293 => 85,  289 => 84,  285 => 83,  281 => 82,  278 => 81,  274 => 80,  263 => 71,  261 => 70,  255 => 67,  251 => 66,  244 => 62,  239 => 60,  228 => 57,  222 => 55,  219 => 54,  211 => 52,  201 => 50,  198 => 49,  195 => 48,  192 => 47,  190 => 46,  186 => 44,  168 => 43,  164 => 41,  155 => 40,  144 => 37,  138 => 34,  135 => 33,  133 => 32,  128 => 30,  121 => 29,  112 => 28,  99 => 24,  96 => 23,  88 => 20,  81 => 16,  77 => 14,  75 => 13,  72 => 12,  66 => 9,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.violationsCount > 0 or collector.calls|length %}
        {% set status_color = collector.violationsCount ? 'red' : '' %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/validator.svg') }}
            <span class=\"sf-toolbar-value\">
                {{ collector.violationsCount ?: collector.calls|length }}
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Validator calls</b>
                <span class=\"sf-toolbar-status\">{{ collector.calls|length }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of violations</b>
                <span class=\"sf-toolbar-status {{- collector.violationsCount > 0 ? ' sf-toolbar-status-red' }}\">{{ collector.violationsCount }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{- collector.violationsCount ? ' label-status-error' }} {{ collector.calls is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/validator.svg') }}</span>
        <strong>Validator</strong>
        {% if collector.violationsCount > 0 %}
            <span class=\"count\">
                <span>{{ collector.violationsCount }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Validator calls</h2>

    {% for call in collector.calls %}
        <div class=\"sf-validator sf-reset\">
            <span class=\"metadata\">In
                {% set caller = call.caller %}
                {% if caller.line %}
                    {% set link = caller.file|file_link(caller.line) %}
                    {% if link %}
                        <a href=\"{{ link }}\" title=\"{{ caller.file }}\">{{ caller.name }}</a>
                    {% else %}
                        <abbr title=\"{{ caller.file }}\">{{ caller.name }}</abbr>
                    {% endif %}
                {% else %}
                    {{ caller.name }}
                {% endif %}
                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ loop.index0 }}\">{{ caller.line }}</a> (<a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-context-{{ loop.index0 }}\">context</a>):
            </span>

            <div class=\"sf-validator-compact hidden\" id=\"sf-trace-{{ loop.index0 }}\">
                <div class=\"trace\">
                    {{ caller.file|file_excerpt(caller.line) }}
                </div>
            </div>

            <div class=\"sf-validator-compact hidden sf-validator-context\" id=\"sf-context-{{ loop.index0 }}\">
                {{ profiler_dump(call.context, maxDepth=1) }}
            </div>

            {% if call.violations|length %}
                <table>
                    <thead>
                        <tr>
                            <th>Path</th>
                            <th>Message</th>
                            <th>Invalid value</th>
                            <th>Violation</th>
                        </tr>
                    </thead>
                    {% for violation in call.violations %}
                        <tr>
                            <td>{{ violation.propertyPath }}</td>
                            <td>{{ violation.message }}</td>
                            <td>{{ profiler_dump(violation.seek('invalidValue')) }}</td>
                            <td>{{ profiler_dump(violation) }}</td>
                        </tr>
                    {% endfor %}
                </table>
            {% else %}
                No violations
            {% endif %}
        </div>
    {% else %}
        <div class=\"empty\">
            <p>No calls to the validator were collected during this request.</p>
        </div>
    {% endfor %}
{% endblock %}
", "@WebProfiler/Collector/validator.html.twig", "/home/fabien/Modèles/mecacorp maj/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/validator.html.twig");
    }
}
