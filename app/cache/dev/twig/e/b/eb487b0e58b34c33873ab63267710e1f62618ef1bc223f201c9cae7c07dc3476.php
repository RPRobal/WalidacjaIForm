<?php

/* MyFormRPBundle:Default:success.html.twig */
class __TwigTemplate_eb487b0e58b34c33873ab63267710e1f62618ef1bc223f201c9cae7c07dc3476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MyFormRPBundle:Default:success.html.twig", 1);
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
        $__internal_b1f477fa6b0028ea3d66bb476b4cbf1cf488cd10028be02e54a5a67f2c3f2c34 = $this->env->getExtension("native_profiler");
        $__internal_b1f477fa6b0028ea3d66bb476b4cbf1cf488cd10028be02e54a5a67f2c3f2c34->enter($__internal_b1f477fa6b0028ea3d66bb476b4cbf1cf488cd10028be02e54a5a67f2c3f2c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyFormRPBundle:Default:success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1f477fa6b0028ea3d66bb476b4cbf1cf488cd10028be02e54a5a67f2c3f2c34->leave($__internal_b1f477fa6b0028ea3d66bb476b4cbf1cf488cd10028be02e54a5a67f2c3f2c34_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e7688a77041d192cec3a5c79eb515dfd263d571a26f98f8cb7d8fd383311169 = $this->env->getExtension("native_profiler");
        $__internal_3e7688a77041d192cec3a5c79eb515dfd263d571a26f98f8cb7d8fd383311169->enter($__internal_3e7688a77041d192cec3a5c79eb515dfd263d571a26f98f8cb7d8fd383311169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


<div id=\"center\">
Witaj<br />
";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "<br />
";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["surname"]) ? $context["surname"] : $this->getContext($context, "surname")), "html", null, true);
        echo " <br />
</div>
";
        
        $__internal_3e7688a77041d192cec3a5c79eb515dfd263d571a26f98f8cb7d8fd383311169->leave($__internal_3e7688a77041d192cec3a5c79eb515dfd263d571a26f98f8cb7d8fd383311169_prof);

    }

    public function getTemplateName()
    {
        return "MyFormRPBundle:Default:success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
