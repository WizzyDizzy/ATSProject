<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7757aa0c48f01dfb525bf8245c4563afaccc2fba394315a33271cf0101ff4407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e164ea39669d78b319ee436ab1869bea4213708e1dedf2012dd7a54739a2338b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e164ea39669d78b319ee436ab1869bea4213708e1dedf2012dd7a54739a2338b->enter($__internal_e164ea39669d78b319ee436ab1869bea4213708e1dedf2012dd7a54739a2338b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e164ea39669d78b319ee436ab1869bea4213708e1dedf2012dd7a54739a2338b->leave($__internal_e164ea39669d78b319ee436ab1869bea4213708e1dedf2012dd7a54739a2338b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97a42c2655682be6620147977c467710d3a111488cdea6a86da24a5927b7e6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a42c2655682be6620147977c467710d3a111488cdea6a86da24a5927b7e6f9->enter($__internal_97a42c2655682be6620147977c467710d3a111488cdea6a86da24a5927b7e6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_97a42c2655682be6620147977c467710d3a111488cdea6a86da24a5927b7e6f9->leave($__internal_97a42c2655682be6620147977c467710d3a111488cdea6a86da24a5927b7e6f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/donia/Bureau/ATS/ATSProject/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
