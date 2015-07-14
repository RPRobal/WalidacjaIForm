<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_01a1deffb8c3c3cb316c59b2cb10b393a5728a4a15d5d0c9a9bdd1a07dc95867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_5586ecec6559818bdc6f96d0d5ceb753c4b9aab573721ac4fac1502b2b7f1674 = $this->env->getExtension("native_profiler");
        $__internal_5586ecec6559818bdc6f96d0d5ceb753c4b9aab573721ac4fac1502b2b7f1674->enter($__internal_5586ecec6559818bdc6f96d0d5ceb753c4b9aab573721ac4fac1502b2b7f1674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5586ecec6559818bdc6f96d0d5ceb753c4b9aab573721ac4fac1502b2b7f1674->leave($__internal_5586ecec6559818bdc6f96d0d5ceb753c4b9aab573721ac4fac1502b2b7f1674_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eecb88c8e0c56601451311a892855e19ed4382cbaacd2a118fe6b12e10bd8aad = $this->env->getExtension("native_profiler");
        $__internal_eecb88c8e0c56601451311a892855e19ed4382cbaacd2a118fe6b12e10bd8aad->enter($__internal_eecb88c8e0c56601451311a892855e19ed4382cbaacd2a118fe6b12e10bd8aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eecb88c8e0c56601451311a892855e19ed4382cbaacd2a118fe6b12e10bd8aad->leave($__internal_eecb88c8e0c56601451311a892855e19ed4382cbaacd2a118fe6b12e10bd8aad_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_42f63cdafbe603d30123ecda208dd93e2a94d186cb2c3a1255040c7ca3a27e00 = $this->env->getExtension("native_profiler");
        $__internal_42f63cdafbe603d30123ecda208dd93e2a94d186cb2c3a1255040c7ca3a27e00->enter($__internal_42f63cdafbe603d30123ecda208dd93e2a94d186cb2c3a1255040c7ca3a27e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_42f63cdafbe603d30123ecda208dd93e2a94d186cb2c3a1255040c7ca3a27e00->leave($__internal_42f63cdafbe603d30123ecda208dd93e2a94d186cb2c3a1255040c7ca3a27e00_prof);

    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20501565b913678ac00d9253d364bb2db40c0a6f1709b34e0962f5b306bd2660 = $this->env->getExtension("native_profiler");
        $__internal_20501565b913678ac00d9253d364bb2db40c0a6f1709b34e0962f5b306bd2660->enter($__internal_20501565b913678ac00d9253d364bb2db40c0a6f1709b34e0962f5b306bd2660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_20501565b913678ac00d9253d364bb2db40c0a6f1709b34e0962f5b306bd2660->leave($__internal_20501565b913678ac00d9253d364bb2db40c0a6f1709b34e0962f5b306bd2660_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  64 => 13,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
    }
}
