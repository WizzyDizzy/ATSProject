<?php

/* messages/start.html.twig */
class __TwigTemplate_cc545596f81f2592cf55e742b02d2b2324fba291b58d3a856bb5efd162d7d5ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "messages/start.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10a46ea155332e0d9a1fe8b5430b900f90fc1d398a076f9367bc529293f77738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a46ea155332e0d9a1fe8b5430b900f90fc1d398a076f9367bc529293f77738->enter($__internal_10a46ea155332e0d9a1fe8b5430b900f90fc1d398a076f9367bc529293f77738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "messages/start.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10a46ea155332e0d9a1fe8b5430b900f90fc1d398a076f9367bc529293f77738->leave($__internal_10a46ea155332e0d9a1fe8b5430b900f90fc1d398a076f9367bc529293f77738_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9e0ce4c33ab6708274acc3a19840da5c9d10bf2a8b695fa4b08c3ddebd9b678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e0ce4c33ab6708274acc3a19840da5c9d10bf2a8b695fa4b08c3ddebd9b678->enter($__internal_b9e0ce4c33ab6708274acc3a19840da5c9d10bf2a8b695fa4b08c3ddebd9b678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Start a conversation";
        
        $__internal_b9e0ce4c33ab6708274acc3a19840da5c9d10bf2a8b695fa4b08c3ddebd9b678->leave($__internal_b9e0ce4c33ab6708274acc3a19840da5c9d10bf2a8b695fa4b08c3ddebd9b678_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_669a94c12b05af2a1b4ee20120c38acbc8642430c8b1b024df5b5e7900ca166a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669a94c12b05af2a1b4ee20120c38acbc8642430c8b1b024df5b5e7900ca166a->enter($__internal_669a94c12b05af2a1b4ee20120c38acbc8642430c8b1b024df5b5e7900ca166a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h3>Start a conversation</h3>

    <p>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messages_conversations");
        echo "\">Back to conversations</a>
    </p>

    <hr />

    <form method=\"post\">
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
    </form>
";
        
        $__internal_669a94c12b05af2a1b4ee20120c38acbc8642430c8b1b024df5b5e7900ca166a->leave($__internal_669a94c12b05af2a1b4ee20120c38acbc8642430c8b1b024df5b5e7900ca166a_prof);

    }

    public function getTemplateName()
    {
        return "messages/start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Start a conversation{% endblock %}

{% block body %}
    <h3>Start a conversation</h3>

    <p>
        <a href=\"{{ path('messages_conversations') }}\">Back to conversations</a>
    </p>

    <hr />

    <form method=\"post\">
        {{ form_rest(form) }}
    </form>
{% endblock %}
", "messages/start.html.twig", "/home/donia/Bureau/ATS/ATSProject/app/Resources/views/messages/start.html.twig");
    }
}
