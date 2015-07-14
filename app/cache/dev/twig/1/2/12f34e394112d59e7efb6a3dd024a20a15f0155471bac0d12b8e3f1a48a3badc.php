<?php

/* MyFormRPBundle:Default:new.html.twig */
class __TwigTemplate_12f34e394112d59e7efb6a3dd024a20a15f0155471bac0d12b8e3f1a48a3badc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "MyFormRPBundle:Default:new.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce99ac72afc20ce9660b784cd7e5d25997f9d297c2bd620f42a97e3e2da722a8 = $this->env->getExtension("native_profiler");
        $__internal_ce99ac72afc20ce9660b784cd7e5d25997f9d297c2bd620f42a97e3e2da722a8->enter($__internal_ce99ac72afc20ce9660b784cd7e5d25997f9d297c2bd620f42a97e3e2da722a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyFormRPBundle:Default:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce99ac72afc20ce9660b784cd7e5d25997f9d297c2bd620f42a97e3e2da722a8->leave($__internal_ce99ac72afc20ce9660b784cd7e5d25997f9d297c2bd620f42a97e3e2da722a8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dfdbb90bdefe53cc99eb6540b1702e8cb3a3ded54be0c518c21a55453f5985e = $this->env->getExtension("native_profiler");
        $__internal_1dfdbb90bdefe53cc99eb6540b1702e8cb3a3ded54be0c518c21a55453f5985e->enter($__internal_1dfdbb90bdefe53cc99eb6540b1702e8cb3a3ded54be0c518c21a55453f5985e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div id=\"center\">
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_1dfdbb90bdefe53cc99eb6540b1702e8cb3a3ded54be0c518c21a55453f5985e->leave($__internal_1dfdbb90bdefe53cc99eb6540b1702e8cb3a3ded54be0c518c21a55453f5985e_prof);

    }

    public function getTemplateName()
    {
        return "MyFormRPBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  48 => 8,  44 => 7,  40 => 5,  34 => 4,  11 => 2,);
    }
}
