<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_668b2c859f659af04e98caa68dd0c17bb39b98fbade8e69d33a63211160bde7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08d87a894e4c39a5f472ab397e8f89107b6fa8f140c50bc20e3dd1ffe84a6555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d87a894e4c39a5f472ab397e8f89107b6fa8f140c50bc20e3dd1ffe84a6555->enter($__internal_08d87a894e4c39a5f472ab397e8f89107b6fa8f140c50bc20e3dd1ffe84a6555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08d87a894e4c39a5f472ab397e8f89107b6fa8f140c50bc20e3dd1ffe84a6555->leave($__internal_08d87a894e4c39a5f472ab397e8f89107b6fa8f140c50bc20e3dd1ffe84a6555_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f32ebe5b3a3d2075f4a015006795c6c67124e644cb3788180b37301e3d376463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32ebe5b3a3d2075f4a015006795c6c67124e644cb3788180b37301e3d376463->enter($__internal_f32ebe5b3a3d2075f4a015006795c6c67124e644cb3788180b37301e3d376463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f32ebe5b3a3d2075f4a015006795c6c67124e644cb3788180b37301e3d376463->leave($__internal_f32ebe5b3a3d2075f4a015006795c6c67124e644cb3788180b37301e3d376463_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_137b71216a5a0f8bbeea686bdace326711f78b1f08327beedf982169808f009a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137b71216a5a0f8bbeea686bdace326711f78b1f08327beedf982169808f009a->enter($__internal_137b71216a5a0f8bbeea686bdace326711f78b1f08327beedf982169808f009a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_137b71216a5a0f8bbeea686bdace326711f78b1f08327beedf982169808f009a->leave($__internal_137b71216a5a0f8bbeea686bdace326711f78b1f08327beedf982169808f009a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_95bb054cf348eec892c07fac3ad9217859a875dbe343b6990a69eb8f49628f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95bb054cf348eec892c07fac3ad9217859a875dbe343b6990a69eb8f49628f56->enter($__internal_95bb054cf348eec892c07fac3ad9217859a875dbe343b6990a69eb8f49628f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_95bb054cf348eec892c07fac3ad9217859a875dbe343b6990a69eb8f49628f56->leave($__internal_95bb054cf348eec892c07fac3ad9217859a875dbe343b6990a69eb8f49628f56_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/donia/Bureau/ATS/ATSProject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
