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
        $__internal_1ab1f612fbbdea17d3537f0c081e59a3aa13a13acf36d164a1a459d84a18e84c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab1f612fbbdea17d3537f0c081e59a3aa13a13acf36d164a1a459d84a18e84c->enter($__internal_1ab1f612fbbdea17d3537f0c081e59a3aa13a13acf36d164a1a459d84a18e84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_a111635bcc2af8d42ce5f65606402a1ddcd4dfaa29d5eb0fc50f97a9a3af566c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a111635bcc2af8d42ce5f65606402a1ddcd4dfaa29d5eb0fc50f97a9a3af566c->enter($__internal_a111635bcc2af8d42ce5f65606402a1ddcd4dfaa29d5eb0fc50f97a9a3af566c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

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
        
        $__internal_1ab1f612fbbdea17d3537f0c081e59a3aa13a13acf36d164a1a459d84a18e84c->leave($__internal_1ab1f612fbbdea17d3537f0c081e59a3aa13a13acf36d164a1a459d84a18e84c_prof);

        
        $__internal_a111635bcc2af8d42ce5f65606402a1ddcd4dfaa29d5eb0fc50f97a9a3af566c->leave($__internal_a111635bcc2af8d42ce5f65606402a1ddcd4dfaa29d5eb0fc50f97a9a3af566c_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2351aa2664ea9a94d5fda47d38cd67685838c9a5e2c555b1c635e993571938e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2351aa2664ea9a94d5fda47d38cd67685838c9a5e2c555b1c635e993571938e5->enter($__internal_2351aa2664ea9a94d5fda47d38cd67685838c9a5e2c555b1c635e993571938e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_708f5c1f3afa78bcd9648584856ca0551e8f2a574bc0634f005ee843102d2dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708f5c1f3afa78bcd9648584856ca0551e8f2a574bc0634f005ee843102d2dee->enter($__internal_708f5c1f3afa78bcd9648584856ca0551e8f2a574bc0634f005ee843102d2dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_708f5c1f3afa78bcd9648584856ca0551e8f2a574bc0634f005ee843102d2dee->leave($__internal_708f5c1f3afa78bcd9648584856ca0551e8f2a574bc0634f005ee843102d2dee_prof);

        
        $__internal_2351aa2664ea9a94d5fda47d38cd67685838c9a5e2c555b1c635e993571938e5->leave($__internal_2351aa2664ea9a94d5fda47d38cd67685838c9a5e2c555b1c635e993571938e5_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_739dc30d965c9a09a10b36113300162da96ae8d93a34da10a8c4edfb8666f415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739dc30d965c9a09a10b36113300162da96ae8d93a34da10a8c4edfb8666f415->enter($__internal_739dc30d965c9a09a10b36113300162da96ae8d93a34da10a8c4edfb8666f415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_5019636184aea7f0e82a724785e44889cb89e37f40aecda60941c0f0433516df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5019636184aea7f0e82a724785e44889cb89e37f40aecda60941c0f0433516df->enter($__internal_5019636184aea7f0e82a724785e44889cb89e37f40aecda60941c0f0433516df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_5019636184aea7f0e82a724785e44889cb89e37f40aecda60941c0f0433516df->leave($__internal_5019636184aea7f0e82a724785e44889cb89e37f40aecda60941c0f0433516df_prof);

        
        $__internal_739dc30d965c9a09a10b36113300162da96ae8d93a34da10a8c4edfb8666f415->leave($__internal_739dc30d965c9a09a10b36113300162da96ae8d93a34da10a8c4edfb8666f415_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_f1fa9381dc4522980dc49020113579beca2df478e4209ccaba16148bb39a071e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1fa9381dc4522980dc49020113579beca2df478e4209ccaba16148bb39a071e->enter($__internal_f1fa9381dc4522980dc49020113579beca2df478e4209ccaba16148bb39a071e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_73a65ed65d389e6b28f55946bce77c6c61a79f58199bf0c4f691c79e28a5b3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a65ed65d389e6b28f55946bce77c6c61a79f58199bf0c4f691c79e28a5b3dd->enter($__internal_73a65ed65d389e6b28f55946bce77c6c61a79f58199bf0c4f691c79e28a5b3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_73a65ed65d389e6b28f55946bce77c6c61a79f58199bf0c4f691c79e28a5b3dd->leave($__internal_73a65ed65d389e6b28f55946bce77c6c61a79f58199bf0c4f691c79e28a5b3dd_prof);

        
        $__internal_f1fa9381dc4522980dc49020113579beca2df478e4209ccaba16148bb39a071e->leave($__internal_f1fa9381dc4522980dc49020113579beca2df478e4209ccaba16148bb39a071e_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_a13b5312866cec9fc55369340cddd4af2ed8765bb3edf1bf1c7d0a8b2fb24f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13b5312866cec9fc55369340cddd4af2ed8765bb3edf1bf1c7d0a8b2fb24f97->enter($__internal_a13b5312866cec9fc55369340cddd4af2ed8765bb3edf1bf1c7d0a8b2fb24f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_6d5dc2b1b5293d4938a2bcd475dafd47bb2d569ab268126b6f92e4200b214093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5dc2b1b5293d4938a2bcd475dafd47bb2d569ab268126b6f92e4200b214093->enter($__internal_6d5dc2b1b5293d4938a2bcd475dafd47bb2d569ab268126b6f92e4200b214093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_6d5dc2b1b5293d4938a2bcd475dafd47bb2d569ab268126b6f92e4200b214093->leave($__internal_6d5dc2b1b5293d4938a2bcd475dafd47bb2d569ab268126b6f92e4200b214093_prof);

        
        $__internal_a13b5312866cec9fc55369340cddd4af2ed8765bb3edf1bf1c7d0a8b2fb24f97->leave($__internal_a13b5312866cec9fc55369340cddd4af2ed8765bb3edf1bf1c7d0a8b2fb24f97_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_96919c97815016f271ee8666a153e53c71e4e39fc31a74228c9f412d9a6e523c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96919c97815016f271ee8666a153e53c71e4e39fc31a74228c9f412d9a6e523c->enter($__internal_96919c97815016f271ee8666a153e53c71e4e39fc31a74228c9f412d9a6e523c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_2f593ee8a0695723cd7f68b3f929cf8b9cd02144e9df904942e6525e982d077b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f593ee8a0695723cd7f68b3f929cf8b9cd02144e9df904942e6525e982d077b->enter($__internal_2f593ee8a0695723cd7f68b3f929cf8b9cd02144e9df904942e6525e982d077b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_2f593ee8a0695723cd7f68b3f929cf8b9cd02144e9df904942e6525e982d077b->leave($__internal_2f593ee8a0695723cd7f68b3f929cf8b9cd02144e9df904942e6525e982d077b_prof);

        
        $__internal_96919c97815016f271ee8666a153e53c71e4e39fc31a74228c9f412d9a6e523c->leave($__internal_96919c97815016f271ee8666a153e53c71e4e39fc31a74228c9f412d9a6e523c_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_bec01781bff61df915060c69b6a50d90767d77276b8fd28ddd3bd2686029f878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec01781bff61df915060c69b6a50d90767d77276b8fd28ddd3bd2686029f878->enter($__internal_bec01781bff61df915060c69b6a50d90767d77276b8fd28ddd3bd2686029f878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e149d67858cd8cd82cf3acac5ec00e5b7893d98000901c4d531cd82cb27bdfc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e149d67858cd8cd82cf3acac5ec00e5b7893d98000901c4d531cd82cb27bdfc7->enter($__internal_e149d67858cd8cd82cf3acac5ec00e5b7893d98000901c4d531cd82cb27bdfc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e149d67858cd8cd82cf3acac5ec00e5b7893d98000901c4d531cd82cb27bdfc7->leave($__internal_e149d67858cd8cd82cf3acac5ec00e5b7893d98000901c4d531cd82cb27bdfc7_prof);

        
        $__internal_bec01781bff61df915060c69b6a50d90767d77276b8fd28ddd3bd2686029f878->leave($__internal_bec01781bff61df915060c69b6a50d90767d77276b8fd28ddd3bd2686029f878_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8e2bdbe109a75376e8da26a2125c6ff0de5b72ff9163a1c8c35f7ab1524ec004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2bdbe109a75376e8da26a2125c6ff0de5b72ff9163a1c8c35f7ab1524ec004->enter($__internal_8e2bdbe109a75376e8da26a2125c6ff0de5b72ff9163a1c8c35f7ab1524ec004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_07f91e46ae5b41ae2cc0054c5f4a0734720230b896d15315759116e28fccb306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f91e46ae5b41ae2cc0054c5f4a0734720230b896d15315759116e28fccb306->enter($__internal_07f91e46ae5b41ae2cc0054c5f4a0734720230b896d15315759116e28fccb306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_07f91e46ae5b41ae2cc0054c5f4a0734720230b896d15315759116e28fccb306->leave($__internal_07f91e46ae5b41ae2cc0054c5f4a0734720230b896d15315759116e28fccb306_prof);

        
        $__internal_8e2bdbe109a75376e8da26a2125c6ff0de5b72ff9163a1c8c35f7ab1524ec004->leave($__internal_8e2bdbe109a75376e8da26a2125c6ff0de5b72ff9163a1c8c35f7ab1524ec004_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_5fc7c4593fa960daeca98b4a950c61aaab719603986a3a44b24dd649b913ee2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc7c4593fa960daeca98b4a950c61aaab719603986a3a44b24dd649b913ee2c->enter($__internal_5fc7c4593fa960daeca98b4a950c61aaab719603986a3a44b24dd649b913ee2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_14605e2790b3486ecbdced9a34be5a30676ccff26d79297b6bf7d7f67f11045c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14605e2790b3486ecbdced9a34be5a30676ccff26d79297b6bf7d7f67f11045c->enter($__internal_14605e2790b3486ecbdced9a34be5a30676ccff26d79297b6bf7d7f67f11045c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_14605e2790b3486ecbdced9a34be5a30676ccff26d79297b6bf7d7f67f11045c->leave($__internal_14605e2790b3486ecbdced9a34be5a30676ccff26d79297b6bf7d7f67f11045c_prof);

        
        $__internal_5fc7c4593fa960daeca98b4a950c61aaab719603986a3a44b24dd649b913ee2c->leave($__internal_5fc7c4593fa960daeca98b4a950c61aaab719603986a3a44b24dd649b913ee2c_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_0482f9081a1307cfac59073a7be08aa7c1dc06141c544dd414417820d5368ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0482f9081a1307cfac59073a7be08aa7c1dc06141c544dd414417820d5368ceb->enter($__internal_0482f9081a1307cfac59073a7be08aa7c1dc06141c544dd414417820d5368ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_ac5987bb000060bd6fa2acd715b699020ad4f595660447f387ddbd3c401a427f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5987bb000060bd6fa2acd715b699020ad4f595660447f387ddbd3c401a427f->enter($__internal_ac5987bb000060bd6fa2acd715b699020ad4f595660447f387ddbd3c401a427f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_ac5987bb000060bd6fa2acd715b699020ad4f595660447f387ddbd3c401a427f->leave($__internal_ac5987bb000060bd6fa2acd715b699020ad4f595660447f387ddbd3c401a427f_prof);

        
        $__internal_0482f9081a1307cfac59073a7be08aa7c1dc06141c544dd414417820d5368ceb->leave($__internal_0482f9081a1307cfac59073a7be08aa7c1dc06141c544dd414417820d5368ceb_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_c35e0243e479c88d849b2785f83e17376c5d738d5fed2b9bae0950110f141821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35e0243e479c88d849b2785f83e17376c5d738d5fed2b9bae0950110f141821->enter($__internal_c35e0243e479c88d849b2785f83e17376c5d738d5fed2b9bae0950110f141821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_5ddf5d1a4f61013931cbba20de8700bc72dfe4826e7ab08716c8ab40112db82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ddf5d1a4f61013931cbba20de8700bc72dfe4826e7ab08716c8ab40112db82c->enter($__internal_5ddf5d1a4f61013931cbba20de8700bc72dfe4826e7ab08716c8ab40112db82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_5ddf5d1a4f61013931cbba20de8700bc72dfe4826e7ab08716c8ab40112db82c->leave($__internal_5ddf5d1a4f61013931cbba20de8700bc72dfe4826e7ab08716c8ab40112db82c_prof);

        
        $__internal_c35e0243e479c88d849b2785f83e17376c5d738d5fed2b9bae0950110f141821->leave($__internal_c35e0243e479c88d849b2785f83e17376c5d738d5fed2b9bae0950110f141821_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_49de98525b26a8d88efd2597669124d40a679489ce7a94868bd5c7703ffd83fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49de98525b26a8d88efd2597669124d40a679489ce7a94868bd5c7703ffd83fb->enter($__internal_49de98525b26a8d88efd2597669124d40a679489ce7a94868bd5c7703ffd83fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_62286a1e6d460240c14c61a81c2728dccce394b91bd432922ed1a211a94ef6a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62286a1e6d460240c14c61a81c2728dccce394b91bd432922ed1a211a94ef6a1->enter($__internal_62286a1e6d460240c14c61a81c2728dccce394b91bd432922ed1a211a94ef6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_62286a1e6d460240c14c61a81c2728dccce394b91bd432922ed1a211a94ef6a1->leave($__internal_62286a1e6d460240c14c61a81c2728dccce394b91bd432922ed1a211a94ef6a1_prof);

        
        $__internal_49de98525b26a8d88efd2597669124d40a679489ce7a94868bd5c7703ffd83fb->leave($__internal_49de98525b26a8d88efd2597669124d40a679489ce7a94868bd5c7703ffd83fb_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_d86de48cc3229ef9275fc5d781e91129f63ddabee0989e0188722e667a42abfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86de48cc3229ef9275fc5d781e91129f63ddabee0989e0188722e667a42abfa->enter($__internal_d86de48cc3229ef9275fc5d781e91129f63ddabee0989e0188722e667a42abfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_3e056b19d8b02d3656cf25c74bc24915508c91028bf976808f25693273ca5ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e056b19d8b02d3656cf25c74bc24915508c91028bf976808f25693273ca5ddb->enter($__internal_3e056b19d8b02d3656cf25c74bc24915508c91028bf976808f25693273ca5ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_3e056b19d8b02d3656cf25c74bc24915508c91028bf976808f25693273ca5ddb->leave($__internal_3e056b19d8b02d3656cf25c74bc24915508c91028bf976808f25693273ca5ddb_prof);

        
        $__internal_d86de48cc3229ef9275fc5d781e91129f63ddabee0989e0188722e667a42abfa->leave($__internal_d86de48cc3229ef9275fc5d781e91129f63ddabee0989e0188722e667a42abfa_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_0ac33cea2b20c752a7fb3ef9c9403ea2657ef0d121bb81e10f0c8ec3e85ba66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac33cea2b20c752a7fb3ef9c9403ea2657ef0d121bb81e10f0c8ec3e85ba66d->enter($__internal_0ac33cea2b20c752a7fb3ef9c9403ea2657ef0d121bb81e10f0c8ec3e85ba66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_c7dc472a9eb0ceb0f30daf8b1fdc90c526eac4d0272378cfc50f8742150c9918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7dc472a9eb0ceb0f30daf8b1fdc90c526eac4d0272378cfc50f8742150c9918->enter($__internal_c7dc472a9eb0ceb0f30daf8b1fdc90c526eac4d0272378cfc50f8742150c9918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_c7dc472a9eb0ceb0f30daf8b1fdc90c526eac4d0272378cfc50f8742150c9918->leave($__internal_c7dc472a9eb0ceb0f30daf8b1fdc90c526eac4d0272378cfc50f8742150c9918_prof);

        
        $__internal_0ac33cea2b20c752a7fb3ef9c9403ea2657ef0d121bb81e10f0c8ec3e85ba66d->leave($__internal_0ac33cea2b20c752a7fb3ef9c9403ea2657ef0d121bb81e10f0c8ec3e85ba66d_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_f5c73b9024adcd3d6ce55e640b5018fb5cbfb5942ff31d656c0d3babdd9695b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c73b9024adcd3d6ce55e640b5018fb5cbfb5942ff31d656c0d3babdd9695b2->enter($__internal_f5c73b9024adcd3d6ce55e640b5018fb5cbfb5942ff31d656c0d3babdd9695b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_8eb8d0f67adbd3cae855cb28cdd7efdb41a2db4a622588809230251f5d9f4c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb8d0f67adbd3cae855cb28cdd7efdb41a2db4a622588809230251f5d9f4c6d->enter($__internal_8eb8d0f67adbd3cae855cb28cdd7efdb41a2db4a622588809230251f5d9f4c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_8eb8d0f67adbd3cae855cb28cdd7efdb41a2db4a622588809230251f5d9f4c6d->leave($__internal_8eb8d0f67adbd3cae855cb28cdd7efdb41a2db4a622588809230251f5d9f4c6d_prof);

        
        $__internal_f5c73b9024adcd3d6ce55e640b5018fb5cbfb5942ff31d656c0d3babdd9695b2->leave($__internal_f5c73b9024adcd3d6ce55e640b5018fb5cbfb5942ff31d656c0d3babdd9695b2_prof);

    }

    // line 113
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_513caaae5e03943d96e6793aa5746ed9eb43542e80de0f935ec659e100166c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_513caaae5e03943d96e6793aa5746ed9eb43542e80de0f935ec659e100166c78->enter($__internal_513caaae5e03943d96e6793aa5746ed9eb43542e80de0f935ec659e100166c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_dc6c2d67089f95885273d215d048626017de888b598c46090f39aef1c5f3d65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6c2d67089f95885273d215d048626017de888b598c46090f39aef1c5f3d65a->enter($__internal_dc6c2d67089f95885273d215d048626017de888b598c46090f39aef1c5f3d65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 114
        echo "                <section class=\"sidebar\">
                    ";
        // line 115
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 122
        echo "                </section>
            ";
        
        $__internal_dc6c2d67089f95885273d215d048626017de888b598c46090f39aef1c5f3d65a->leave($__internal_dc6c2d67089f95885273d215d048626017de888b598c46090f39aef1c5f3d65a_prof);

        
        $__internal_513caaae5e03943d96e6793aa5746ed9eb43542e80de0f935ec659e100166c78->leave($__internal_513caaae5e03943d96e6793aa5746ed9eb43542e80de0f935ec659e100166c78_prof);

    }

    // line 115
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_e3d5db2bdcd702ca90f2551f4b7032ff020b5943fc98b181c491cc0f695b34e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d5db2bdcd702ca90f2551f4b7032ff020b5943fc98b181c491cc0f695b34e8->enter($__internal_e3d5db2bdcd702ca90f2551f4b7032ff020b5943fc98b181c491cc0f695b34e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_a91672906759918a59e15457204dd9072d441d34c9bc00dd52df78f3ce7df546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91672906759918a59e15457204dd9072d441d34c9bc00dd52df78f3ce7df546->enter($__internal_a91672906759918a59e15457204dd9072d441d34c9bc00dd52df78f3ce7df546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 116
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 117
array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 117, $this->getSourceContext()); })()), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 120
        echo "
                    ";
        
        $__internal_a91672906759918a59e15457204dd9072d441d34c9bc00dd52df78f3ce7df546->leave($__internal_a91672906759918a59e15457204dd9072d441d34c9bc00dd52df78f3ce7df546_prof);

        
        $__internal_e3d5db2bdcd702ca90f2551f4b7032ff020b5943fc98b181c491cc0f695b34e8->leave($__internal_e3d5db2bdcd702ca90f2551f4b7032ff020b5943fc98b181c491cc0f695b34e8_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_676f082dc151ca9008c08d968057966562ca61fb2fe617d3cf78a949260de035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676f082dc151ca9008c08d968057966562ca61fb2fe617d3cf78a949260de035->enter($__internal_676f082dc151ca9008c08d968057966562ca61fb2fe617d3cf78a949260de035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_02f42d173e2b99fb162629803110200446b99c061c2056653ac17123f41e3f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f42d173e2b99fb162629803110200446b99c061c2056653ac17123f41e3f88->enter($__internal_02f42d173e2b99fb162629803110200446b99c061c2056653ac17123f41e3f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_02f42d173e2b99fb162629803110200446b99c061c2056653ac17123f41e3f88->leave($__internal_02f42d173e2b99fb162629803110200446b99c061c2056653ac17123f41e3f88_prof);

        
        $__internal_676f082dc151ca9008c08d968057966562ca61fb2fe617d3cf78a949260de035->leave($__internal_676f082dc151ca9008c08d968057966562ca61fb2fe617d3cf78a949260de035_prof);

    }

    // line 128
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_1b6f8e300becdc983e5165907db4ab3b7adfeadb5d0ddf248b96127f9252e2fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6f8e300becdc983e5165907db4ab3b7adfeadb5d0ddf248b96127f9252e2fe->enter($__internal_1b6f8e300becdc983e5165907db4ab3b7adfeadb5d0ddf248b96127f9252e2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_ae61b6c02292839858ebe8dbe0d05de80d9ebe2e92de1c9e017b57608f21bd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae61b6c02292839858ebe8dbe0d05de80d9ebe2e92de1c9e017b57608f21bd14->enter($__internal_ae61b6c02292839858ebe8dbe0d05de80d9ebe2e92de1c9e017b57608f21bd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 129
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 129, $this->getSourceContext()); })()), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_ae61b6c02292839858ebe8dbe0d05de80d9ebe2e92de1c9e017b57608f21bd14->leave($__internal_ae61b6c02292839858ebe8dbe0d05de80d9ebe2e92de1c9e017b57608f21bd14_prof);

        
        $__internal_1b6f8e300becdc983e5165907db4ab3b7adfeadb5d0ddf248b96127f9252e2fe->leave($__internal_1b6f8e300becdc983e5165907db4ab3b7adfeadb5d0ddf248b96127f9252e2fe_prof);

    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_ed1c4e45ce60735d85e67a244af984e6238dc8e830294051f4d0ad08a27c7a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1c4e45ce60735d85e67a244af984e6238dc8e830294051f4d0ad08a27c7a15->enter($__internal_ed1c4e45ce60735d85e67a244af984e6238dc8e830294051f4d0ad08a27c7a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_5a3985ac8bfec070392b0d3783328150d0e3e1531f45e41638002f3134c30e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3985ac8bfec070392b0d3783328150d0e3e1531f45e41638002f3134c30e38->enter($__internal_5a3985ac8bfec070392b0d3783328150d0e3e1531f45e41638002f3134c30e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 134
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_5a3985ac8bfec070392b0d3783328150d0e3e1531f45e41638002f3134c30e38->leave($__internal_5a3985ac8bfec070392b0d3783328150d0e3e1531f45e41638002f3134c30e38_prof);

        
        $__internal_ed1c4e45ce60735d85e67a244af984e6238dc8e830294051f4d0ad08a27c7a15->leave($__internal_ed1c4e45ce60735d85e67a244af984e6238dc8e830294051f4d0ad08a27c7a15_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_d61b2671c56bb32e7c48e23de2ad5b0927a1e031628957657289565b7c216a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d61b2671c56bb32e7c48e23de2ad5b0927a1e031628957657289565b7c216a2b->enter($__internal_d61b2671c56bb32e7c48e23de2ad5b0927a1e031628957657289565b7c216a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_e6f922506a7dd9b44a1ecfe6bf424cb6ae9c1faab621ebdc386d41c4156fffd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f922506a7dd9b44a1ecfe6bf424cb6ae9c1faab621ebdc386d41c4156fffd7->enter($__internal_e6f922506a7dd9b44a1ecfe6bf424cb6ae9c1faab621ebdc386d41c4156fffd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_e6f922506a7dd9b44a1ecfe6bf424cb6ae9c1faab621ebdc386d41c4156fffd7->leave($__internal_e6f922506a7dd9b44a1ecfe6bf424cb6ae9c1faab621ebdc386d41c4156fffd7_prof);

        
        $__internal_d61b2671c56bb32e7c48e23de2ad5b0927a1e031628957657289565b7c216a2b->leave($__internal_d61b2671c56bb32e7c48e23de2ad5b0927a1e031628957657289565b7c216a2b_prof);

    }

    // line 136
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_c3c2b6c6b8cca20b249b18f0fa83060cffebbfc066c6beaf2f61d9d61c8fd6bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3c2b6c6b8cca20b249b18f0fa83060cffebbfc066c6beaf2f61d9d61c8fd6bf->enter($__internal_c3c2b6c6b8cca20b249b18f0fa83060cffebbfc066c6beaf2f61d9d61c8fd6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_c51e25414bf116dfc420614be7828f50fba5fed5135aec73613be4c404f180ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51e25414bf116dfc420614be7828f50fba5fed5135aec73613be4c404f180ce->enter($__internal_c51e25414bf116dfc420614be7828f50fba5fed5135aec73613be4c404f180ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_c51e25414bf116dfc420614be7828f50fba5fed5135aec73613be4c404f180ce->leave($__internal_c51e25414bf116dfc420614be7828f50fba5fed5135aec73613be4c404f180ce_prof);

        
        $__internal_c3c2b6c6b8cca20b249b18f0fa83060cffebbfc066c6beaf2f61d9d61c8fd6bf->leave($__internal_c3c2b6c6b8cca20b249b18f0fa83060cffebbfc066c6beaf2f61d9d61c8fd6bf_prof);

    }

    // line 148
    public function block_main($context, array $blocks = array())
    {
        $__internal_7fad017b9dce1d743f026ba1ef3367f9aa56bd03c8a5fb35ef12e01eb2d5e792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fad017b9dce1d743f026ba1ef3367f9aa56bd03c8a5fb35ef12e01eb2d5e792->enter($__internal_7fad017b9dce1d743f026ba1ef3367f9aa56bd03c8a5fb35ef12e01eb2d5e792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a34d788a5673ca9c26e8ccdde09d6d96f3e8ec186285320852f4ac1649173bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34d788a5673ca9c26e8ccdde09d6d96f3e8ec186285320852f4ac1649173bcb->enter($__internal_a34d788a5673ca9c26e8ccdde09d6d96f3e8ec186285320852f4ac1649173bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_a34d788a5673ca9c26e8ccdde09d6d96f3e8ec186285320852f4ac1649173bcb->leave($__internal_a34d788a5673ca9c26e8ccdde09d6d96f3e8ec186285320852f4ac1649173bcb_prof);

        
        $__internal_7fad017b9dce1d743f026ba1ef3367f9aa56bd03c8a5fb35ef12e01eb2d5e792->leave($__internal_7fad017b9dce1d743f026ba1ef3367f9aa56bd03c8a5fb35ef12e01eb2d5e792_prof);

    }

    // line 155
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_3d07b194412f0cbb772f729e7b040651e83d30daf3e0f478bff83a6adf049abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d07b194412f0cbb772f729e7b040651e83d30daf3e0f478bff83a6adf049abf->enter($__internal_3d07b194412f0cbb772f729e7b040651e83d30daf3e0f478bff83a6adf049abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_886b95f638e073a84b1a7ebe6a06a60d89f8dc2b3e8cec932b7cd186843301c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886b95f638e073a84b1a7ebe6a06a60d89f8dc2b3e8cec932b7cd186843301c5->enter($__internal_886b95f638e073a84b1a7ebe6a06a60d89f8dc2b3e8cec932b7cd186843301c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_886b95f638e073a84b1a7ebe6a06a60d89f8dc2b3e8cec932b7cd186843301c5->leave($__internal_886b95f638e073a84b1a7ebe6a06a60d89f8dc2b3e8cec932b7cd186843301c5_prof);

        
        $__internal_3d07b194412f0cbb772f729e7b040651e83d30daf3e0f478bff83a6adf049abf->leave($__internal_3d07b194412f0cbb772f729e7b040651e83d30daf3e0f478bff83a6adf049abf_prof);

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
