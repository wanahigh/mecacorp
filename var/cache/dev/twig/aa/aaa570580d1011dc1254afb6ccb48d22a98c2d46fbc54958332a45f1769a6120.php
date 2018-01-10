<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_f549480ecd3d30b891439e9c0d2bef5da2e8d7fe674508d5cd15eea14ebeceec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91a41f3d9e5b3fb3b2dec6997a439ecbee9c68632015eb981b0f794312b93cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a41f3d9e5b3fb3b2dec6997a439ecbee9c68632015eb981b0f794312b93cc1->enter($__internal_91a41f3d9e5b3fb3b2dec6997a439ecbee9c68632015eb981b0f794312b93cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_e4b32dc69e2901e8cb08a5ad38bf09ea8a3a773acb17d2208de8ffd7ab90ee27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b32dc69e2901e8cb08a5ad38bf09ea8a3a773acb17d2208de8ffd7ab90ee27->enter($__internal_e4b32dc69e2901e8cb08a5ad38bf09ea8a3a773acb17d2208de8ffd7ab90ee27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 162
        echo "</html>
";
        
        $__internal_91a41f3d9e5b3fb3b2dec6997a439ecbee9c68632015eb981b0f794312b93cc1->leave($__internal_91a41f3d9e5b3fb3b2dec6997a439ecbee9c68632015eb981b0f794312b93cc1_prof);

        
        $__internal_e4b32dc69e2901e8cb08a5ad38bf09ea8a3a773acb17d2208de8ffd7ab90ee27->leave($__internal_e4b32dc69e2901e8cb08a5ad38bf09ea8a3a773acb17d2208de8ffd7ab90ee27_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_13214b8d7c7a7f2548c1ba1cca8b35eb3e721cace7ac5a61e1206816c6429a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13214b8d7c7a7f2548c1ba1cca8b35eb3e721cace7ac5a61e1206816c6429a95->enter($__internal_13214b8d7c7a7f2548c1ba1cca8b35eb3e721cace7ac5a61e1206816c6429a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_f7e97ed41af0fb999e7999594e394c6f353d603e901bd2a30cdc72fde21f6250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e97ed41af0fb999e7999594e394c6f353d603e901bd2a30cdc72fde21f6250->enter($__internal_f7e97ed41af0fb999e7999594e394c6f353d603e901bd2a30cdc72fde21f6250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_f7e97ed41af0fb999e7999594e394c6f353d603e901bd2a30cdc72fde21f6250->leave($__internal_f7e97ed41af0fb999e7999594e394c6f353d603e901bd2a30cdc72fde21f6250_prof);

        
        $__internal_13214b8d7c7a7f2548c1ba1cca8b35eb3e721cace7ac5a61e1206816c6429a95->leave($__internal_13214b8d7c7a7f2548c1ba1cca8b35eb3e721cace7ac5a61e1206816c6429a95_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_b4737a7c92f723a16da2f4907279d9a3a031250474069f67a9ffdbcfd423112d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4737a7c92f723a16da2f4907279d9a3a031250474069f67a9ffdbcfd423112d->enter($__internal_b4737a7c92f723a16da2f4907279d9a3a031250474069f67a9ffdbcfd423112d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_769492d74420cb9c1424b6965019ae84bb03bb78064148c8b3f3f58689a7d450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769492d74420cb9c1424b6965019ae84bb03bb78064148c8b3f3f58689a7d450->enter($__internal_769492d74420cb9c1424b6965019ae84bb03bb78064148c8b3f3f58689a7d450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_769492d74420cb9c1424b6965019ae84bb03bb78064148c8b3f3f58689a7d450->leave($__internal_769492d74420cb9c1424b6965019ae84bb03bb78064148c8b3f3f58689a7d450_prof);

        
        $__internal_b4737a7c92f723a16da2f4907279d9a3a031250474069f67a9ffdbcfd423112d->leave($__internal_b4737a7c92f723a16da2f4907279d9a3a031250474069f67a9ffdbcfd423112d_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_2fd035e9963b89bee50fad0549404005f55f52b32d5ed07dce72f0217da48de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd035e9963b89bee50fad0549404005f55f52b32d5ed07dce72f0217da48de8->enter($__internal_2fd035e9963b89bee50fad0549404005f55f52b32d5ed07dce72f0217da48de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_a84c9f67a7df80706eda31f830850c9d857b32cf1e5ce2ffca7323c6bee86b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84c9f67a7df80706eda31f830850c9d857b32cf1e5ce2ffca7323c6bee86b86->enter($__internal_a84c9f67a7df80706eda31f830850c9d857b32cf1e5ce2ffca7323c6bee86b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new Twig_Error_Runtime('Variable "favicon" does not exist.', 25, $this->getSourceContext()); })()), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new Twig_Error_Runtime('Variable "favicon" does not exist.', 25, $this->getSourceContext()); })()), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_a84c9f67a7df80706eda31f830850c9d857b32cf1e5ce2ffca7323c6bee86b86->leave($__internal_a84c9f67a7df80706eda31f830850c9d857b32cf1e5ce2ffca7323c6bee86b86_prof);

        
        $__internal_2fd035e9963b89bee50fad0549404005f55f52b32d5ed07dce72f0217da48de8->leave($__internal_2fd035e9963b89bee50fad0549404005f55f52b32d5ed07dce72f0217da48de8_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_a7b45b627eeaa0ff0c1f61936105781b0ef5d4b229158caf4ff5aae8d4261338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b45b627eeaa0ff0c1f61936105781b0ef5d4b229158caf4ff5aae8d4261338->enter($__internal_a7b45b627eeaa0ff0c1f61936105781b0ef5d4b229158caf4ff5aae8d4261338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_9dab8016c4d888fd8559755c33d49b744e3e1e115f6cdf94de51665ab5f38aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dab8016c4d888fd8559755c33d49b744e3e1e115f6cdf94de51665ab5f38aca->enter($__internal_9dab8016c4d888fd8559755c33d49b744e3e1e115f6cdf94de51665ab5f38aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_9dab8016c4d888fd8559755c33d49b744e3e1e115f6cdf94de51665ab5f38aca->leave($__internal_9dab8016c4d888fd8559755c33d49b744e3e1e115f6cdf94de51665ab5f38aca_prof);

        
        $__internal_a7b45b627eeaa0ff0c1f61936105781b0ef5d4b229158caf4ff5aae8d4261338->leave($__internal_a7b45b627eeaa0ff0c1f61936105781b0ef5d4b229158caf4ff5aae8d4261338_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_c65bb029c6459f3bf1eae822dc5b59294b330e663b959d943973bc3ad6ea0a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65bb029c6459f3bf1eae822dc5b59294b330e663b959d943973bc3ad6ea0a4c->enter($__internal_c65bb029c6459f3bf1eae822dc5b59294b330e663b959d943973bc3ad6ea0a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_5bbd7bcc4d10535dfa55f6137e7953069b1855c05b416097a31c29c007992447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbd7bcc4d10535dfa55f6137e7953069b1855c05b416097a31c29c007992447->enter($__internal_5bbd7bcc4d10535dfa55f6137e7953069b1855c05b416097a31c29c007992447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_5bbd7bcc4d10535dfa55f6137e7953069b1855c05b416097a31c29c007992447->leave($__internal_5bbd7bcc4d10535dfa55f6137e7953069b1855c05b416097a31c29c007992447_prof);

        
        $__internal_c65bb029c6459f3bf1eae822dc5b59294b330e663b959d943973bc3ad6ea0a4c->leave($__internal_c65bb029c6459f3bf1eae822dc5b59294b330e663b959d943973bc3ad6ea0a4c_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c934924ea96b7c086e57484261e7ebe4871227c2420c2d5b9064d25d5655887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c934924ea96b7c086e57484261e7ebe4871227c2420c2d5b9064d25d5655887->enter($__internal_7c934924ea96b7c086e57484261e7ebe4871227c2420c2d5b9064d25d5655887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0e92d720e6a1aeac919b9a2a17176e69c53977a70866c54fc18330a4d2f8ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e92d720e6a1aeac919b9a2a17176e69c53977a70866c54fc18330a4d2f8ac6->enter($__internal_e0e92d720e6a1aeac919b9a2a17176e69c53977a70866c54fc18330a4d2f8ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->getSourceContext()); })()), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 153
        echo "        </div>

        ";
        // line 155
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 156
        echo "
        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 158
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "    </body>
    ";
        
        $__internal_e0e92d720e6a1aeac919b9a2a17176e69c53977a70866c54fc18330a4d2f8ac6->leave($__internal_e0e92d720e6a1aeac919b9a2a17176e69c53977a70866c54fc18330a4d2f8ac6_prof);

        
        $__internal_7c934924ea96b7c086e57484261e7ebe4871227c2420c2d5b9064d25d5655887->leave($__internal_7c934924ea96b7c086e57484261e7ebe4871227c2420c2d5b9064d25d5655887_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_7281a86713e54a25bea06dded2a2101d58dd2bb1faa70125165916a6d0ada681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7281a86713e54a25bea06dded2a2101d58dd2bb1faa70125165916a6d0ada681->enter($__internal_7281a86713e54a25bea06dded2a2101d58dd2bb1faa70125165916a6d0ada681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_c61e9e8114836218ac01b73b59236684a305e08bcdb0a79955a976c91af54c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61e9e8114836218ac01b73b59236684a305e08bcdb0a79955a976c91af54c65->enter($__internal_c61e9e8114836218ac01b73b59236684a305e08bcdb0a79955a976c91af54c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_c61e9e8114836218ac01b73b59236684a305e08bcdb0a79955a976c91af54c65->leave($__internal_c61e9e8114836218ac01b73b59236684a305e08bcdb0a79955a976c91af54c65_prof);

        
        $__internal_7281a86713e54a25bea06dded2a2101d58dd2bb1faa70125165916a6d0ada681->leave($__internal_7281a86713e54a25bea06dded2a2101d58dd2bb1faa70125165916a6d0ada681_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_19ade94d04adc4dcaf6417fb7356b1d77bb7c4e4072dc903f2d0628195b92c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ade94d04adc4dcaf6417fb7356b1d77bb7c4e4072dc903f2d0628195b92c6b->enter($__internal_19ade94d04adc4dcaf6417fb7356b1d77bb7c4e4072dc903f2d0628195b92c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_2250a1c835b16b679a24d7bc5cc7de8b5a93b697e0c08b876e79d3e4f5ec0376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2250a1c835b16b679a24d7bc5cc7de8b5a93b697e0c08b876e79d3e4f5ec0376->enter($__internal_2250a1c835b16b679a24d7bc5cc7de8b5a93b697e0c08b876e79d3e4f5ec0376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_2250a1c835b16b679a24d7bc5cc7de8b5a93b697e0c08b876e79d3e4f5ec0376->leave($__internal_2250a1c835b16b679a24d7bc5cc7de8b5a93b697e0c08b876e79d3e4f5ec0376_prof);

        
        $__internal_19ade94d04adc4dcaf6417fb7356b1d77bb7c4e4072dc903f2d0628195b92c6b->leave($__internal_19ade94d04adc4dcaf6417fb7356b1d77bb7c4e4072dc903f2d0628195b92c6b_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_4ed83c85572837e5c149aacf7a0a6b47b31c3a3b51567ccc49ab5727cc627b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed83c85572837e5c149aacf7a0a6b47b31c3a3b51567ccc49ab5727cc627b06->enter($__internal_4ed83c85572837e5c149aacf7a0a6b47b31c3a3b51567ccc49ab5727cc627b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_95e4bafcd4ec57d6d76d9e9a23c8cc52e262a449a4eb478fc669332a51511017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e4bafcd4ec57d6d76d9e9a23c8cc52e262a449a4eb478fc669332a51511017->enter($__internal_95e4bafcd4ec57d6d76d9e9a23c8cc52e262a449a4eb478fc669332a51511017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 110
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 113
        $this->displayBlock('sidebar', $context, $blocks);
        // line 124
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 127
        $this->displayBlock('content', $context, $blocks);
        // line 151
        echo "            </div>
        ";
        
        $__internal_95e4bafcd4ec57d6d76d9e9a23c8cc52e262a449a4eb478fc669332a51511017->leave($__internal_95e4bafcd4ec57d6d76d9e9a23c8cc52e262a449a4eb478fc669332a51511017_prof);

        
        $__internal_4ed83c85572837e5c149aacf7a0a6b47b31c3a3b51567ccc49ab5727cc627b06->leave($__internal_4ed83c85572837e5c149aacf7a0a6b47b31c3a3b51567ccc49ab5727cc627b06_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_d9dcbb6d671a062cbe10e681328578146d09e14cefecc952eca8ba7e7bb7ece5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9dcbb6d671a062cbe10e681328578146d09e14cefecc952eca8ba7e7bb7ece5->enter($__internal_d9dcbb6d671a062cbe10e681328578146d09e14cefecc952eca8ba7e7bb7ece5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_9445c5b4f44b0fc555b0234abf165a67432633d81bc7d25ed43970ddfeb70c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9445c5b4f44b0fc555b0234abf165a67432633d81bc7d25ed43970ddfeb70c4d->enter($__internal_9445c5b4f44b0fc555b0234abf165a67432633d81bc7d25ed43970ddfeb70c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 107
        echo "                    </div>
                </nav>
            ";
        
        $__internal_9445c5b4f44b0fc555b0234abf165a67432633d81bc7d25ed43970ddfeb70c4d->leave($__internal_9445c5b4f44b0fc555b0234abf165a67432633d81bc7d25ed43970ddfeb70c4d_prof);

        
        $__internal_d9dcbb6d671a062cbe10e681328578146d09e14cefecc952eca8ba7e7bb7ece5->leave($__internal_d9dcbb6d671a062cbe10e681328578146d09e14cefecc952eca8ba7e7bb7ece5_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_409bad7f3c133592d2d0a6400567428e04266743f4eba5c4069289a43fa6e1ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_409bad7f3c133592d2d0a6400567428e04266743f4eba5c4069289a43fa6e1ff->enter($__internal_409bad7f3c133592d2d0a6400567428e04266743f4eba5c4069289a43fa6e1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_0f0d30367436eb63ddd623916c7cb9b56e7f823095d5c3ec9b76fcc71d311b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0d30367436eb63ddd623916c7cb9b56e7f823095d5c3ec9b76fcc71d311b73->enter($__internal_0f0d30367436eb63ddd623916c7cb9b56e7f823095d5c3ec9b76fcc71d311b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_0f0d30367436eb63ddd623916c7cb9b56e7f823095d5c3ec9b76fcc71d311b73->leave($__internal_0f0d30367436eb63ddd623916c7cb9b56e7f823095d5c3ec9b76fcc71d311b73_prof);

        
        $__internal_409bad7f3c133592d2d0a6400567428e04266743f4eba5c4069289a43fa6e1ff->leave($__internal_409bad7f3c133592d2d0a6400567428e04266743f4eba5c4069289a43fa6e1ff_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_999e91b41f33b031e4b768ac7224becad067018de8be3c407763cc162f48cd06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999e91b41f33b031e4b768ac7224becad067018de8be3c407763cc162f48cd06->enter($__internal_999e91b41f33b031e4b768ac7224becad067018de8be3c407763cc162f48cd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_3cf0850a0e8bc072f32cee939632d0707f913b19d196f548e6b47bf22602972b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf0850a0e8bc072f32cee939632d0707f913b19d196f548e6b47bf22602972b->enter($__internal_3cf0850a0e8bc072f32cee939632d0707f913b19d196f548e6b47bf22602972b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 104
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_3cf0850a0e8bc072f32cee939632d0707f913b19d196f548e6b47bf22602972b->leave($__internal_3cf0850a0e8bc072f32cee939632d0707f913b19d196f548e6b47bf22602972b_prof);

        
        $__internal_999e91b41f33b031e4b768ac7224becad067018de8be3c407763cc162f48cd06->leave($__internal_999e91b41f33b031e4b768ac7224becad067018de8be3c407763cc162f48cd06_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_8af8f9f524cd623c44be76a719fb1d45d24299717015717f338328994c9f4069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af8f9f524cd623c44be76a719fb1d45d24299717015717f338328994c9f4069->enter($__internal_8af8f9f524cd623c44be76a719fb1d45d24299717015717f338328994c9f4069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_49ed5f0d941f47a7ca6f56f278eeb029ea8955e33bd72199d84f859cf7b94859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ed5f0d941f47a7ca6f56f278eeb029ea8955e33bd72199d84f859cf7b94859->enter($__internal_49ed5f0d941f47a7ca6f56f278eeb029ea8955e33bd72199d84f859cf7b94859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
(isset($context["_logout_path"]) || array_key_exists("_logout_path", $context) ? $context["_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_path" does not exist.', 82, $this->getSourceContext()); })())) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 100
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 103
        echo "                                ";
        
        $__internal_49ed5f0d941f47a7ca6f56f278eeb029ea8955e33bd72199d84f859cf7b94859->leave($__internal_49ed5f0d941f47a7ca6f56f278eeb029ea8955e33bd72199d84f859cf7b94859_prof);

        
        $__internal_8af8f9f524cd623c44be76a719fb1d45d24299717015717f338328994c9f4069->leave($__internal_8af8f9f524cd623c44be76a719fb1d45d24299717015717f338328994c9f4069_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_4e89eaac0c9dbe3f067014a6266d1ef4fac3259fb17314be13da726518bd2934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e89eaac0c9dbe3f067014a6266d1ef4fac3259fb17314be13da726518bd2934->enter($__internal_4e89eaac0c9dbe3f067014a6266d1ef4fac3259fb17314be13da726518bd2934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_d07b5bec00e3fb00c2a6aac868e5a30c7c0401cf171d595adfd6941e0e8b28f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07b5bec00e3fb00c2a6aac868e5a30c7c0401cf171d595adfd6941e0e8b28f9->enter($__internal_d07b5bec00e3fb00c2a6aac868e5a30c7c0401cf171d595adfd6941e0e8b28f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["_logout_path"]) || array_key_exists("_logout_path", $context) ? $context["_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_path" does not exist.', 97, $this->getSourceContext()); })()), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        
        $__internal_d07b5bec00e3fb00c2a6aac868e5a30c7c0401cf171d595adfd6941e0e8b28f9->leave($__internal_d07b5bec00e3fb00c2a6aac868e5a30c7c0401cf171d595adfd6941e0e8b28f9_prof);

        
        $__internal_4e89eaac0c9dbe3f067014a6266d1ef4fac3259fb17314be13da726518bd2934->leave($__internal_4e89eaac0c9dbe3f067014a6266d1ef4fac3259fb17314be13da726518bd2934_prof);

    }

    // line 113
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fed3eae66f60a6c7b7ba2a66159e6f16fcb77a5b09ce9c797d7f53cfd5cf6fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed3eae66f60a6c7b7ba2a66159e6f16fcb77a5b09ce9c797d7f53cfd5cf6fbc->enter($__internal_fed3eae66f60a6c7b7ba2a66159e6f16fcb77a5b09ce9c797d7f53cfd5cf6fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_34a1f8b320810ff64d4cf14badb48f6c3d8bdcc41dc65d0c6e061b016e4ed40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a1f8b320810ff64d4cf14badb48f6c3d8bdcc41dc65d0c6e061b016e4ed40d->enter($__internal_34a1f8b320810ff64d4cf14badb48f6c3d8bdcc41dc65d0c6e061b016e4ed40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 114
        echo "                <section class=\"sidebar\">
                    ";
        // line 115
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 122
        echo "                </section>
            ";
        
        $__internal_34a1f8b320810ff64d4cf14badb48f6c3d8bdcc41dc65d0c6e061b016e4ed40d->leave($__internal_34a1f8b320810ff64d4cf14badb48f6c3d8bdcc41dc65d0c6e061b016e4ed40d_prof);

        
        $__internal_fed3eae66f60a6c7b7ba2a66159e6f16fcb77a5b09ce9c797d7f53cfd5cf6fbc->leave($__internal_fed3eae66f60a6c7b7ba2a66159e6f16fcb77a5b09ce9c797d7f53cfd5cf6fbc_prof);

    }

    // line 115
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_c5fb7ae03afbab9d14d871099e37bb377e93d0666b117a1a78d724f56123ce1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5fb7ae03afbab9d14d871099e37bb377e93d0666b117a1a78d724f56123ce1e->enter($__internal_c5fb7ae03afbab9d14d871099e37bb377e93d0666b117a1a78d724f56123ce1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_59266fd17ec60036cae133f0c082a77eb872cc08598369b290fed653d5f6c7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59266fd17ec60036cae133f0c082a77eb872cc08598369b290fed653d5f6c7a9->enter($__internal_59266fd17ec60036cae133f0c082a77eb872cc08598369b290fed653d5f6c7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 116
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 117
array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 117, $this->getSourceContext()); })()), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 120
        echo "
                    ";
        
        $__internal_59266fd17ec60036cae133f0c082a77eb872cc08598369b290fed653d5f6c7a9->leave($__internal_59266fd17ec60036cae133f0c082a77eb872cc08598369b290fed653d5f6c7a9_prof);

        
        $__internal_c5fb7ae03afbab9d14d871099e37bb377e93d0666b117a1a78d724f56123ce1e->leave($__internal_c5fb7ae03afbab9d14d871099e37bb377e93d0666b117a1a78d724f56123ce1e_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_6299b5e97c684df94cea645430c825ac0667b082a7d7e22d40479ecf595c4983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6299b5e97c684df94cea645430c825ac0667b082a7d7e22d40479ecf595c4983->enter($__internal_6299b5e97c684df94cea645430c825ac0667b082a7d7e22d40479ecf595c4983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9be66fe930c211455264a073c3847ca539c29232b1660d83043b2f8f779bec70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be66fe930c211455264a073c3847ca539c29232b1660d83043b2f8f779bec70->enter($__internal_9be66fe930c211455264a073c3847ca539c29232b1660d83043b2f8f779bec70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 128
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 131
        echo "
                <section class=\"content-header\">
                ";
        // line 133
        $this->displayBlock('content_header', $context, $blocks);
        // line 136
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 145
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 148
        $this->displayBlock('main', $context, $blocks);
        // line 149
        echo "                </section>
            ";
        
        $__internal_9be66fe930c211455264a073c3847ca539c29232b1660d83043b2f8f779bec70->leave($__internal_9be66fe930c211455264a073c3847ca539c29232b1660d83043b2f8f779bec70_prof);

        
        $__internal_6299b5e97c684df94cea645430c825ac0667b082a7d7e22d40479ecf595c4983->leave($__internal_6299b5e97c684df94cea645430c825ac0667b082a7d7e22d40479ecf595c4983_prof);

    }

    // line 128
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_605f9a808b9de14db6437ce377140e6298cafefbfe6f97ee05e4f35b1c45c907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_605f9a808b9de14db6437ce377140e6298cafefbfe6f97ee05e4f35b1c45c907->enter($__internal_605f9a808b9de14db6437ce377140e6298cafefbfe6f97ee05e4f35b1c45c907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_bc0a0f9fdad4fc88972257394aad5f261921e4c710b42f43bcce52e15a07d513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0a0f9fdad4fc88972257394aad5f261921e4c710b42f43bcce52e15a07d513->enter($__internal_bc0a0f9fdad4fc88972257394aad5f261921e4c710b42f43bcce52e15a07d513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 129
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 129, $this->getSourceContext()); })()), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_bc0a0f9fdad4fc88972257394aad5f261921e4c710b42f43bcce52e15a07d513->leave($__internal_bc0a0f9fdad4fc88972257394aad5f261921e4c710b42f43bcce52e15a07d513_prof);

        
        $__internal_605f9a808b9de14db6437ce377140e6298cafefbfe6f97ee05e4f35b1c45c907->leave($__internal_605f9a808b9de14db6437ce377140e6298cafefbfe6f97ee05e4f35b1c45c907_prof);

    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_cb4d7dbd17eee13d6fe73eba6a30f1b2d2fa84b56532213c2e2e3733e417a117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb4d7dbd17eee13d6fe73eba6a30f1b2d2fa84b56532213c2e2e3733e417a117->enter($__internal_cb4d7dbd17eee13d6fe73eba6a30f1b2d2fa84b56532213c2e2e3733e417a117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_f6976b6efac6154486512d5f619aa0415e9f2a0f5aff4451901074658ae4bd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6976b6efac6154486512d5f619aa0415e9f2a0f5aff4451901074658ae4bd2d->enter($__internal_f6976b6efac6154486512d5f619aa0415e9f2a0f5aff4451901074658ae4bd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 134
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_f6976b6efac6154486512d5f619aa0415e9f2a0f5aff4451901074658ae4bd2d->leave($__internal_f6976b6efac6154486512d5f619aa0415e9f2a0f5aff4451901074658ae4bd2d_prof);

        
        $__internal_cb4d7dbd17eee13d6fe73eba6a30f1b2d2fa84b56532213c2e2e3733e417a117->leave($__internal_cb4d7dbd17eee13d6fe73eba6a30f1b2d2fa84b56532213c2e2e3733e417a117_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_549768dd0041fe78e01ded2a06469fc348ff23722521679e8b05035c596344fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549768dd0041fe78e01ded2a06469fc348ff23722521679e8b05035c596344fa->enter($__internal_549768dd0041fe78e01ded2a06469fc348ff23722521679e8b05035c596344fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_fc981443e10dd67094edb55963168303bc0fd6802c748f9a1eff85ac7f9a7744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc981443e10dd67094edb55963168303bc0fd6802c748f9a1eff85ac7f9a7744->enter($__internal_fc981443e10dd67094edb55963168303bc0fd6802c748f9a1eff85ac7f9a7744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_fc981443e10dd67094edb55963168303bc0fd6802c748f9a1eff85ac7f9a7744->leave($__internal_fc981443e10dd67094edb55963168303bc0fd6802c748f9a1eff85ac7f9a7744_prof);

        
        $__internal_549768dd0041fe78e01ded2a06469fc348ff23722521679e8b05035c596344fa->leave($__internal_549768dd0041fe78e01ded2a06469fc348ff23722521679e8b05035c596344fa_prof);

    }

    // line 136
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_5bcd4c6ab54682c42164ae377ba29d312fb44119bd59658a24bab5e47206b5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bcd4c6ab54682c42164ae377ba29d312fb44119bd59658a24bab5e47206b5dc->enter($__internal_5bcd4c6ab54682c42164ae377ba29d312fb44119bd59658a24bab5e47206b5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_835bbc56ad465ea64fd73c553ce9b102b07e215ff1084cf634f690203d0cb53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835bbc56ad465ea64fd73c553ce9b102b07e215ff1084cf634f690203d0cb53c->enter($__internal_835bbc56ad465ea64fd73c553ce9b102b07e215ff1084cf634f690203d0cb53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 137
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 137, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 137, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 138
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 140, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 140, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 144
        echo "                ";
        
        $__internal_835bbc56ad465ea64fd73c553ce9b102b07e215ff1084cf634f690203d0cb53c->leave($__internal_835bbc56ad465ea64fd73c553ce9b102b07e215ff1084cf634f690203d0cb53c_prof);

        
        $__internal_5bcd4c6ab54682c42164ae377ba29d312fb44119bd59658a24bab5e47206b5dc->leave($__internal_5bcd4c6ab54682c42164ae377ba29d312fb44119bd59658a24bab5e47206b5dc_prof);

    }

    // line 148
    public function block_main($context, array $blocks = array())
    {
        $__internal_d91e0ae561b0a45aef420a0c6903429d08f3ec480bbaca7d8dfad285f39f9942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91e0ae561b0a45aef420a0c6903429d08f3ec480bbaca7d8dfad285f39f9942->enter($__internal_d91e0ae561b0a45aef420a0c6903429d08f3ec480bbaca7d8dfad285f39f9942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5fc08467e98f5640dd96951261893f19cae297c56dd6d60ee55b96edfc819282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc08467e98f5640dd96951261893f19cae297c56dd6d60ee55b96edfc819282->enter($__internal_5fc08467e98f5640dd96951261893f19cae297c56dd6d60ee55b96edfc819282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_5fc08467e98f5640dd96951261893f19cae297c56dd6d60ee55b96edfc819282->leave($__internal_5fc08467e98f5640dd96951261893f19cae297c56dd6d60ee55b96edfc819282_prof);

        
        $__internal_d91e0ae561b0a45aef420a0c6903429d08f3ec480bbaca7d8dfad285f39f9942->leave($__internal_d91e0ae561b0a45aef420a0c6903429d08f3ec480bbaca7d8dfad285f39f9942_prof);

    }

    // line 155
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_f287987dd54ebd69cee500d4a6eec5df8ccfe49c27d7b43fdbd8f48dc015280a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f287987dd54ebd69cee500d4a6eec5df8ccfe49c27d7b43fdbd8f48dc015280a->enter($__internal_f287987dd54ebd69cee500d4a6eec5df8ccfe49c27d7b43fdbd8f48dc015280a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_4208ce9b72977f24eb28277044187eefb71b4538fbb1325b15a392299e2d916d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4208ce9b72977f24eb28277044187eefb71b4538fbb1325b15a392299e2d916d->enter($__internal_4208ce9b72977f24eb28277044187eefb71b4538fbb1325b15a392299e2d916d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_4208ce9b72977f24eb28277044187eefb71b4538fbb1325b15a392299e2d916d->leave($__internal_4208ce9b72977f24eb28277044187eefb71b4538fbb1325b15a392299e2d916d_prof);

        
        $__internal_f287987dd54ebd69cee500d4a6eec5df8ccfe49c27d7b43fdbd8f48dc015280a->leave($__internal_f287987dd54ebd69cee500d4a6eec5df8ccfe49c27d7b43fdbd8f48dc015280a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  775 => 155,  758 => 148,  748 => 144,  741 => 140,  737 => 138,  734 => 137,  725 => 136,  696 => 134,  687 => 133,  674 => 129,  665 => 128,  654 => 149,  652 => 148,  647 => 145,  644 => 136,  642 => 133,  638 => 131,  635 => 128,  626 => 127,  615 => 120,  613 => 117,  611 => 116,  602 => 115,  591 => 122,  589 => 115,  586 => 114,  577 => 113,  562 => 97,  559 => 96,  550 => 95,  540 => 103,  535 => 100,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 104,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 107,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 151,  370 => 127,  365 => 124,  363 => 113,  358 => 110,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 160,  291 => 158,  287 => 157,  284 => 156,  282 => 155,  278 => 153,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 162,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "EasyAdminBundle:default:layout.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
