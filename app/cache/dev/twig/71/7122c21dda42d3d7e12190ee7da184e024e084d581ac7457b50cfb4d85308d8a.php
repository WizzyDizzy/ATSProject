<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_45e1df88cc5c6e932b5b89e5d3d9a2a390fa62d572db6fc003e1f209b4c9daf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b925fbadce9fd45a24ab76acc86461416f2d0a53fdc479728fd485e1bf311b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b925fbadce9fd45a24ab76acc86461416f2d0a53fdc479728fd485e1bf311b37->enter($__internal_b925fbadce9fd45a24ab76acc86461416f2d0a53fdc479728fd485e1bf311b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b925fbadce9fd45a24ab76acc86461416f2d0a53fdc479728fd485e1bf311b37->leave($__internal_b925fbadce9fd45a24ab76acc86461416f2d0a53fdc479728fd485e1bf311b37_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20ecfd130ade46ae549e835ab5eba389dca3831b42538c96a9b4cad2769d79ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ecfd130ade46ae549e835ab5eba389dca3831b42538c96a9b4cad2769d79ad->enter($__internal_20ecfd130ade46ae549e835ab5eba389dca3831b42538c96a9b4cad2769d79ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-3\"></div>
        <div class=\"col-md-6\">
            ";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "        </div>
        <div class=\"col-md-3\"></div>
    </div>
";
        
        $__internal_20ecfd130ade46ae549e835ab5eba389dca3831b42538c96a9b4cad2769d79ad->leave($__internal_20ecfd130ade46ae549e835ab5eba389dca3831b42538c96a9b4cad2769d79ad_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2038e3e28503b85adb1f130affdf9f81f09940e5773d7d9faa36685f77b052bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2038e3e28503b85adb1f130affdf9f81f09940e5773d7d9faa36685f77b052bd->enter($__internal_2038e3e28503b85adb1f130affdf9f81f09940e5773d7d9faa36685f77b052bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_2038e3e28503b85adb1f130affdf9f81f09940e5773d7d9faa36685f77b052bd->leave($__internal_2038e3e28503b85adb1f130affdf9f81f09940e5773d7d9faa36685f77b052bd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  48 => 8,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-3\"></div>
        <div class=\"col-md-6\">
            {% block fos_user_content %}{% endblock fos_user_content %}
        </div>
        <div class=\"col-md-3\"></div>
    </div>
{% endblock %}
", "FOSUserBundle::layout.html.twig", "/home/donia/Bureau/ATS/ATSProject/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
