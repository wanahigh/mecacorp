<?php

/* EasyAdminBundle:default:menu.html.twig */
class __TwigTemplate_cedd656814fd76562828a9c265537b012dfbdd23e234435bfbdcd2ad8db13a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_menu_before' => array($this, 'block_main_menu_before'),
            'main_menu' => array($this, 'block_main_menu'),
            'menu_item' => array($this, 'block_menu_item'),
            'menu_subitem' => array($this, 'block_menu_subitem'),
            'main_menu_after' => array($this, 'block_main_menu_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fd0b1586bcb14db7227f03036c4b897adf70fd9d3cca30d8eb26af2809cd6c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd0b1586bcb14db7227f03036c4b897adf70fd9d3cca30d8eb26af2809cd6c4->enter($__internal_1fd0b1586bcb14db7227f03036c4b897adf70fd9d3cca30d8eb26af2809cd6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        $__internal_1f7472d3ff5031f96b850cdf3317baba9ac10c9e84a1112a377822e82b8db869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7472d3ff5031f96b850cdf3317baba9ac10c9e84a1112a377822e82b8db869->enter($__internal_1f7472d3ff5031f96b850cdf3317baba9ac10c9e84a1112a377822e82b8db869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        // line 28
        echo "
";
        // line 29
        $context["helper"] = $this;
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 32
        echo "
<ul class=\"sidebar-menu\">
    ";
        // line 34
        $context["_menu_items"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.menu");
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('main_menu', $context, $blocks);
        // line 57
        echo "</ul>

";
        // line 59
        $this->displayBlock('main_menu_after', $context, $blocks);
        
        $__internal_1fd0b1586bcb14db7227f03036c4b897adf70fd9d3cca30d8eb26af2809cd6c4->leave($__internal_1fd0b1586bcb14db7227f03036c4b897adf70fd9d3cca30d8eb26af2809cd6c4_prof);

        
        $__internal_1f7472d3ff5031f96b850cdf3317baba9ac10c9e84a1112a377822e82b8db869->leave($__internal_1f7472d3ff5031f96b850cdf3317baba9ac10c9e84a1112a377822e82b8db869_prof);

    }

    // line 31
    public function block_main_menu_before($context, array $blocks = array())
    {
        $__internal_6c4691e89b2630f831e930d565e7fe8cd089d9454f8cd6407bbd2e4ee5064cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4691e89b2630f831e930d565e7fe8cd089d9454f8cd6407bbd2e4ee5064cea->enter($__internal_6c4691e89b2630f831e930d565e7fe8cd089d9454f8cd6407bbd2e4ee5064cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        $__internal_589f6f08bc93910e2213a10f43764e8434ae38b21ffbb837b080195638c13514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589f6f08bc93910e2213a10f43764e8434ae38b21ffbb837b080195638c13514->enter($__internal_589f6f08bc93910e2213a10f43764e8434ae38b21ffbb837b080195638c13514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_589f6f08bc93910e2213a10f43764e8434ae38b21ffbb837b080195638c13514->leave($__internal_589f6f08bc93910e2213a10f43764e8434ae38b21ffbb837b080195638c13514_prof);

        
        $__internal_6c4691e89b2630f831e930d565e7fe8cd089d9454f8cd6407bbd2e4ee5064cea->leave($__internal_6c4691e89b2630f831e930d565e7fe8cd089d9454f8cd6407bbd2e4ee5064cea_prof);

    }

    // line 36
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_c55798fde9c5fd82a1cebf4ea7f29a8aa68a0da55265f664f97baf52e4e657d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c55798fde9c5fd82a1cebf4ea7f29a8aa68a0da55265f664f97baf52e4e657d0->enter($__internal_c55798fde9c5fd82a1cebf4ea7f29a8aa68a0da55265f664f97baf52e4e657d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        $__internal_9252906da0b497be89de64198290bafbad5ac5a2f766101862ee5ba15184424e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9252906da0b497be89de64198290bafbad5ac5a2f766101862ee5ba15184424e->enter($__internal_9252906da0b497be89de64198290bafbad5ac5a2f766101862ee5ba15184424e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 37
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["_menu_items"]) || array_key_exists("_menu_items", $context) ? $context["_menu_items"] : (function () { throw new Twig_Error_Runtime('Variable "_menu_items" does not exist.', 37, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            echo "            ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 55
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    ";
        
        $__internal_9252906da0b497be89de64198290bafbad5ac5a2f766101862ee5ba15184424e->leave($__internal_9252906da0b497be89de64198290bafbad5ac5a2f766101862ee5ba15184424e_prof);

        
        $__internal_c55798fde9c5fd82a1cebf4ea7f29a8aa68a0da55265f664f97baf52e4e657d0->leave($__internal_c55798fde9c5fd82a1cebf4ea7f29a8aa68a0da55265f664f97baf52e4e657d0_prof);

    }

    // line 38
    public function block_menu_item($context, array $blocks = array())
    {
        $__internal_48b2c7c95cadbbb5f6b529cbe92acb468758e2b069e8e7668311195b2ea619be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b2c7c95cadbbb5f6b529cbe92acb468758e2b069e8e7668311195b2ea619be->enter($__internal_48b2c7c95cadbbb5f6b529cbe92acb468758e2b069e8e7668311195b2ea619be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_item"));

        $__internal_08404448a2798fa3d9c3b66726c7664a64aa685becd9889285dd03ed8f2ab540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08404448a2798fa3d9c3b66726c7664a64aa685becd9889285dd03ed8f2ab540->enter($__internal_08404448a2798fa3d9c3b66726c7664a64aa685becd9889285dd03ed8f2ab540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_item"));

        // line 39
        echo "                <li class=\"";
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->getSourceContext()); })()), "type", array()) == "divider")) ? ("header") : (""));
        echo " ";
        echo (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->getSourceContext()); })()), "children", array()))) ? ("treeview") : (""));
        echo " ";
        echo (((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new Twig_Error_Runtime('Variable "loop" does not exist.', 39, $this->getSourceContext()); })()), "index0", array()))) ? ("active") : (""));
        echo " ";
        echo (((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
        echo "\">
                    ";
        // line 40
        echo $context["helper"]->macro_render_menu_item((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 40, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "translation_domain", array()), "messages")) : ("messages")));
        echo "

                    ";
        // line 42
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "children", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "children", array()), array())) : (array())))) {
            // line 43
            echo "                        <ul class=\"treeview-menu\">
                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 44, $this->getSourceContext()); })()), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                // line 45
                echo "                                ";
                $this->displayBlock('menu_subitem', $context, $blocks);
                // line 50
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                        </ul>
                    ";
        }
        // line 53
        echo "                </li>
            ";
        
        $__internal_08404448a2798fa3d9c3b66726c7664a64aa685becd9889285dd03ed8f2ab540->leave($__internal_08404448a2798fa3d9c3b66726c7664a64aa685becd9889285dd03ed8f2ab540_prof);

        
        $__internal_48b2c7c95cadbbb5f6b529cbe92acb468758e2b069e8e7668311195b2ea619be->leave($__internal_48b2c7c95cadbbb5f6b529cbe92acb468758e2b069e8e7668311195b2ea619be_prof);

    }

    // line 45
    public function block_menu_subitem($context, array $blocks = array())
    {
        $__internal_5a01d1423b8caedfa3de3badd3542a69cdbeda2b2c18c987771d2d4ca5a4e271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a01d1423b8caedfa3de3badd3542a69cdbeda2b2c18c987771d2d4ca5a4e271->enter($__internal_5a01d1423b8caedfa3de3badd3542a69cdbeda2b2c18c987771d2d4ca5a4e271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_subitem"));

        $__internal_88a58abcab91e06d0e62eb76f651f7e56922ab243a29fece279b9a24c2c5e775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a58abcab91e06d0e62eb76f651f7e56922ab243a29fece279b9a24c2c5e775->enter($__internal_88a58abcab91e06d0e62eb76f651f7e56922ab243a29fece279b9a24c2c5e775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_subitem"));

        // line 46
        echo "                                    <li class=\"";
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new Twig_Error_Runtime('Variable "subitem" does not exist.', 46, $this->getSourceContext()); })()), "type", array()) == "divider")) ? ("header") : (""));
        echo " ";
        echo ((((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new Twig_Error_Runtime('Variable "loop" does not exist.', 46, $this->getSourceContext()); })()), "parent", array()), "loop", array()), "index0", array())) && (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new Twig_Error_Runtime('Variable "loop" does not exist.', 46, $this->getSourceContext()); })()), "index0", array())))) ? ("active") : (""));
        echo "\">
                                        ";
        // line 47
        echo $context["helper"]->macro_render_menu_item((isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new Twig_Error_Runtime('Variable "subitem" does not exist.', 47, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "translation_domain", array()), "messages")) : ("messages")));
        echo "
                                    </li>
                                ";
        
        $__internal_88a58abcab91e06d0e62eb76f651f7e56922ab243a29fece279b9a24c2c5e775->leave($__internal_88a58abcab91e06d0e62eb76f651f7e56922ab243a29fece279b9a24c2c5e775_prof);

        
        $__internal_5a01d1423b8caedfa3de3badd3542a69cdbeda2b2c18c987771d2d4ca5a4e271->leave($__internal_5a01d1423b8caedfa3de3badd3542a69cdbeda2b2c18c987771d2d4ca5a4e271_prof);

    }

    // line 59
    public function block_main_menu_after($context, array $blocks = array())
    {
        $__internal_b4a4239c0be27b2cc0a4cb485ed3ba74d8fe2fca2364c08f112875daa0602e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a4239c0be27b2cc0a4cb485ed3ba74d8fe2fca2364c08f112875daa0602e17->enter($__internal_b4a4239c0be27b2cc0a4cb485ed3ba74d8fe2fca2364c08f112875daa0602e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        $__internal_7ca571567d02b6d514689c9a84c5f772d034dd3720abf325a1835e6be9c94475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca571567d02b6d514689c9a84c5f772d034dd3720abf325a1835e6be9c94475->enter($__internal_7ca571567d02b6d514689c9a84c5f772d034dd3720abf325a1835e6be9c94475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_7ca571567d02b6d514689c9a84c5f772d034dd3720abf325a1835e6be9c94475->leave($__internal_7ca571567d02b6d514689c9a84c5f772d034dd3720abf325a1835e6be9c94475_prof);

        
        $__internal_b4a4239c0be27b2cc0a4cb485ed3ba74d8fe2fca2364c08f112875daa0602e17->leave($__internal_b4a4239c0be27b2cc0a4cb485ed3ba74d8fe2fca2364c08f112875daa0602e17_prof);

    }

    // line 1
    public function macro_render_menu_item($__item__ = null, $__translation_domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "translation_domain" => $__translation_domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d9cb4ef6daefebe1609908a1b0d180f8409fee2e4211b3a943a37c4d3d11171a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d9cb4ef6daefebe1609908a1b0d180f8409fee2e4211b3a943a37c4d3d11171a->enter($__internal_d9cb4ef6daefebe1609908a1b0d180f8409fee2e4211b3a943a37c4d3d11171a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            $__internal_bb42c106a0ffc87fbffe8ae9cd3df7bd6fa18292d2cb42e80d07a8f7f2f63aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_bb42c106a0ffc87fbffe8ae9cd3df7bd6fa18292d2cb42e80d07a8f7f2f63aaf->enter($__internal_bb42c106a0ffc87fbffe8ae9cd3df7bd6fa18292d2cb42e80d07a8f7f2f63aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2, $this->getSourceContext()); })()), "type", array()) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 3, $this->getSourceContext()); })()), "label", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = array("menuIndex" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "menu_index", array()), "submenuIndex" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "submenu_index", array()));
                // line 6
                echo "        ";
                $context["path"] = (((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 7
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 7, $this->getSourceContext()); })()), "type", array()) == "link")) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 7, $this->getSourceContext()); })()), "url", array())) : ((((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 8
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->getSourceContext()); })()), "type", array()) == "route")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->getSourceContext()); })()), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->getSourceContext()); })()), "params", array()))) : ((((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 9
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 9, $this->getSourceContext()); })()), "type", array()) == "entity")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_array_merge(array("entity" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 9, $this->getSourceContext()); })()), "entity", array()), "action" => "list"), (isset($context["menu_params"]) || array_key_exists("menu_params", $context) ? $context["menu_params"] : (function () { throw new Twig_Error_Runtime('Variable "menu_params" does not exist.', 9, $this->getSourceContext()); })())), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 9, $this->getSourceContext()); })()), "params", array())))) : ((((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 10
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 10, $this->getSourceContext()); })()), "type", array()) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 17, $this->getSourceContext()); })()), "type", array()) == "route") && (is_string($__internal_0ae4c922ab1cba76f8bb8ab5860d152e7c46bf75302c2d03f8f429a698700b87 = (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 17, $this->getSourceContext()); })())) && is_string($__internal_77e3ebf7ca4fccbbbe0b14e0961373480c65aab2ae925eb312276b499bf86906 = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin")) && ('' === $__internal_77e3ebf7ca4fccbbbe0b14e0961373480c65aab2ae925eb312276b499bf86906 || 0 === strpos($__internal_0ae4c922ab1cba76f8bb8ab5860d152e7c46bf75302c2d03f8f429a698700b87, $__internal_77e3ebf7ca4fccbbbe0b14e0961373480c65aab2ae925eb312276b499bf86906))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->getSourceContext()); })()), "route", array()), twig_array_merge((isset($context["menu_params"]) || array_key_exists("menu_params", $context) ? $context["menu_params"] : (function () { throw new Twig_Error_Runtime('Variable "menu_params" does not exist.', 18, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->getSourceContext()); })()), "params", array())));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
                echo "\" ";
                if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "target", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "target", array()), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 21, $this->getSourceContext()); })()), "target", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 22
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 22, $this->getSourceContext()); })()), "icon", array()))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 22, $this->getSourceContext()); })()), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 23
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->getSourceContext()); })()), "label", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 23, $this->getSourceContext()); })())), "html", null, true);
                echo "</span>
            ";
                // line 24
                if ( !twig_test_empty(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "children", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "children", array()), array())) : (array())))) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 25
                echo "        </a>
    ";
            }
            
            $__internal_bb42c106a0ffc87fbffe8ae9cd3df7bd6fa18292d2cb42e80d07a8f7f2f63aaf->leave($__internal_bb42c106a0ffc87fbffe8ae9cd3df7bd6fa18292d2cb42e80d07a8f7f2f63aaf_prof);

            
            $__internal_d9cb4ef6daefebe1609908a1b0d180f8409fee2e4211b3a943a37c4d3d11171a->leave($__internal_d9cb4ef6daefebe1609908a1b0d180f8409fee2e4211b3a943a37c4d3d11171a_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 25,  335 => 24,  330 => 23,  324 => 22,  314 => 21,  311 => 20,  308 => 19,  305 => 18,  302 => 17,  299 => 12,  297 => 10,  296 => 9,  295 => 8,  294 => 7,  292 => 6,  289 => 5,  283 => 3,  280 => 2,  261 => 1,  244 => 59,  231 => 47,  224 => 46,  215 => 45,  204 => 53,  200 => 51,  186 => 50,  183 => 45,  166 => 44,  163 => 43,  161 => 42,  156 => 40,  145 => 39,  136 => 38,  126 => 56,  112 => 55,  109 => 38,  91 => 37,  82 => 36,  65 => 31,  55 => 59,  51 => 57,  49 => 36,  46 => 35,  44 => 34,  40 => 32,  38 => 31,  35 => 30,  33 => 29,  30 => 28,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_menu_item(item, translation_domain) %}
    {% if item.type == 'divider' %}
        {{ item.label|trans(domain = translation_domain) }}
    {% else %}
        {% set menu_params = { menuIndex: item.menu_index, submenuIndex: item.submenu_index } %}
        {% set path =
            item.type == 'link' ? item.url :
            item.type == 'route' ? path(item.route, item.params) :
            item.type == 'entity' ? path('easyadmin', { entity: item.entity, action: 'list' }|merge(menu_params)|merge(item.params)) :
            item.type == 'empty' ? '#' : ''
        %}

        {# if the URL generated for the route belongs to the backend, regenerate
           the URL to include the menu_params to display the selected menu item
           (this is checked comparing the beginning of the route URL with the backend homepage URL)
        #}
        {% if item.type == 'route' and (path starts with path('easyadmin')) %}
            {% set path = path(item.route, menu_params|merge(item.params)) %}
        {% endif %}

        <a href=\"{{ path }}\" {% if item.target|default(false) %}target=\"{{ item.target }}\"{% endif %}>
            {% if item.icon is not empty %}<i class=\"fa {{ item.icon }}\"></i>{% endif %}
            <span>{{ item.label|trans(domain = translation_domain) }}</span>
            {% if item.children|default([]) is not empty %}<i class=\"fa fa-angle-left pull-right\"></i>{% endif %}
        </a>
    {% endif %}
{% endmacro %}

{% import _self as helper %}

{% block main_menu_before %}{% endblock %}

<ul class=\"sidebar-menu\">
    {% set _menu_items = easyadmin_config('design.menu') %}

    {% block main_menu %}
        {% for item in _menu_items %}
            {% block menu_item %}
                <li class=\"{{ item.type == 'divider' ? 'header' }} {{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}\">
                    {{ helper.render_menu_item(item, _entity_config.translation_domain|default('messages')) }}

                    {% if item.children|default([]) is not empty %}
                        <ul class=\"treeview-menu\">
                            {% for subitem in item.children %}
                                {% block menu_subitem %}
                                    <li class=\"{{ subitem.type == 'divider' ? 'header' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.parent.loop.index0 and app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}\">
                                        {{ helper.render_menu_item(subitem, _entity_config.translation_domain|default('messages')) }}
                                    </li>
                                {% endblock menu_subitem %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                </li>
            {% endblock menu_item %}
        {% endfor %}
    {% endblock main_menu %}
</ul>

{% block main_menu_after %}{% endblock %}
", "EasyAdminBundle:default:menu.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/menu.html.twig");
    }
}
