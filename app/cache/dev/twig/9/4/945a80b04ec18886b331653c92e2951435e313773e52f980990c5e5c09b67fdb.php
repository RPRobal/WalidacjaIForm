<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_945a80b04ec18886b331653c92e2951435e313773e52f980990c5e5c09b67fdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e2362ad3368719b736dcb88810434f09c76f184091bafa4b5d5cf5245522f91 = $this->env->getExtension("native_profiler");
        $__internal_7e2362ad3368719b736dcb88810434f09c76f184091bafa4b5d5cf5245522f91->enter($__internal_7e2362ad3368719b736dcb88810434f09c76f184091bafa4b5d5cf5245522f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e2362ad3368719b736dcb88810434f09c76f184091bafa4b5d5cf5245522f91->leave($__internal_7e2362ad3368719b736dcb88810434f09c76f184091bafa4b5d5cf5245522f91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b820bb154087244860eb810cadfdc7e2b0c537adec397d2868d1ea63762edbe2 = $this->env->getExtension("native_profiler");
        $__internal_b820bb154087244860eb810cadfdc7e2b0c537adec397d2868d1ea63762edbe2->enter($__internal_b820bb154087244860eb810cadfdc7e2b0c537adec397d2868d1ea63762edbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b820bb154087244860eb810cadfdc7e2b0c537adec397d2868d1ea63762edbe2->leave($__internal_b820bb154087244860eb810cadfdc7e2b0c537adec397d2868d1ea63762edbe2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f991bfe341230942046db98826e7944eae54de281e8f33ad31691f82ac40cf09 = $this->env->getExtension("native_profiler");
        $__internal_f991bfe341230942046db98826e7944eae54de281e8f33ad31691f82ac40cf09->enter($__internal_f991bfe341230942046db98826e7944eae54de281e8f33ad31691f82ac40cf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f991bfe341230942046db98826e7944eae54de281e8f33ad31691f82ac40cf09->leave($__internal_f991bfe341230942046db98826e7944eae54de281e8f33ad31691f82ac40cf09_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_76a20b2aa16e2c0f1431e79ac84b74a9548122a445aa4dafb6a3f7ffeecbb2db = $this->env->getExtension("native_profiler");
        $__internal_76a20b2aa16e2c0f1431e79ac84b74a9548122a445aa4dafb6a3f7ffeecbb2db->enter($__internal_76a20b2aa16e2c0f1431e79ac84b74a9548122a445aa4dafb6a3f7ffeecbb2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_76a20b2aa16e2c0f1431e79ac84b74a9548122a445aa4dafb6a3f7ffeecbb2db->leave($__internal_76a20b2aa16e2c0f1431e79ac84b74a9548122a445aa4dafb6a3f7ffeecbb2db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
