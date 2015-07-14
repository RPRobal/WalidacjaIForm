<?php

/* base.html.twig */
class __TwigTemplate_ee2b5e8d9b8fc598b828e77ab8a3c725632c347d9b99bd83a416f31b2f64c5c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da1afb91fc7266b0be6aedfd8df231ff738e28d6016a24e4296926b8e104a473 = $this->env->getExtension("native_profiler");
        $__internal_da1afb91fc7266b0be6aedfd8df231ff738e28d6016a24e4296926b8e104a473->enter($__internal_da1afb91fc7266b0be6aedfd8df231ff738e28d6016a24e4296926b8e104a473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

    <div id=\"center\">Zadanie Do Wykonania :D</div>
    <br>

        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_da1afb91fc7266b0be6aedfd8df231ff738e28d6016a24e4296926b8e104a473->leave($__internal_da1afb91fc7266b0be6aedfd8df231ff738e28d6016a24e4296926b8e104a473_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6b2ff9e9ae2cb7dd6984713623d238c2619fde2797f8af0022e81467ef4f061 = $this->env->getExtension("native_profiler");
        $__internal_f6b2ff9e9ae2cb7dd6984713623d238c2619fde2797f8af0022e81467ef4f061->enter($__internal_f6b2ff9e9ae2cb7dd6984713623d238c2619fde2797f8af0022e81467ef4f061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f6b2ff9e9ae2cb7dd6984713623d238c2619fde2797f8af0022e81467ef4f061->leave($__internal_f6b2ff9e9ae2cb7dd6984713623d238c2619fde2797f8af0022e81467ef4f061_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_979b83a08246b8a2d163cfa665d134a469574743fd54e829da1187318ecd0cc3 = $this->env->getExtension("native_profiler");
        $__internal_979b83a08246b8a2d163cfa665d134a469574743fd54e829da1187318ecd0cc3->enter($__internal_979b83a08246b8a2d163cfa665d134a469574743fd54e829da1187318ecd0cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_979b83a08246b8a2d163cfa665d134a469574743fd54e829da1187318ecd0cc3->leave($__internal_979b83a08246b8a2d163cfa665d134a469574743fd54e829da1187318ecd0cc3_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d3d6aba80f2944213e104c459fd700297a3987fc41bde48927fa27cb96cc276 = $this->env->getExtension("native_profiler");
        $__internal_9d3d6aba80f2944213e104c459fd700297a3987fc41bde48927fa27cb96cc276->enter($__internal_9d3d6aba80f2944213e104c459fd700297a3987fc41bde48927fa27cb96cc276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9d3d6aba80f2944213e104c459fd700297a3987fc41bde48927fa27cb96cc276->leave($__internal_9d3d6aba80f2944213e104c459fd700297a3987fc41bde48927fa27cb96cc276_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3919e17fc3130c8e9fb2843ed4285d9d5a027dec39e1a8b783142431c1a72ed8 = $this->env->getExtension("native_profiler");
        $__internal_3919e17fc3130c8e9fb2843ed4285d9d5a027dec39e1a8b783142431c1a72ed8->enter($__internal_3919e17fc3130c8e9fb2843ed4285d9d5a027dec39e1a8b783142431c1a72ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3919e17fc3130c8e9fb2843ed4285d9d5a027dec39e1a8b783142431c1a72ed8->leave($__internal_3919e17fc3130c8e9fb2843ed4285d9d5a027dec39e1a8b783142431c1a72ed8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 16,  90 => 15,  79 => 6,  67 => 5,  58 => 17,  55 => 16,  53 => 15,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
