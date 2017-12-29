<?php

/* default/index.html.twig */
class __TwigTemplate_a2af7c6d8cf69bb61ad14c7b47e02c739f78df3c56f6b23fb6729eee513679fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_3899faae1f306863a2798aa606d8f57869592228772f70f1f5e2418394dfc23f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3899faae1f306863a2798aa606d8f57869592228772f70f1f5e2418394dfc23f->enter($__internal_3899faae1f306863a2798aa606d8f57869592228772f70f1f5e2418394dfc23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3899faae1f306863a2798aa606d8f57869592228772f70f1f5e2418394dfc23f->leave($__internal_3899faae1f306863a2798aa606d8f57869592228772f70f1f5e2418394dfc23f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a331f19ff0d4a73c0d611f1393b19725e6aae1fca39c10685539fa1fceb3b013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a331f19ff0d4a73c0d611f1393b19725e6aae1fca39c10685539fa1fceb3b013->enter($__internal_a331f19ff0d4a73c0d611f1393b19725e6aae1fca39c10685539fa1fceb3b013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome";
        
        $__internal_a331f19ff0d4a73c0d611f1393b19725e6aae1fca39c10685539fa1fceb3b013->leave($__internal_a331f19ff0d4a73c0d611f1393b19725e6aae1fca39c10685539fa1fceb3b013_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5d8f91e321eda485504fa1da3d56f15e8d56bb74311ccda05f6eeef32ba48d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d8f91e321eda485504fa1da3d56f15e8d56bb74311ccda05f6eeef32ba48d3->enter($__internal_b5d8f91e321eda485504fa1da3d56f15e8d56bb74311ccda05f6eeef32ba48d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <p>
        BlueMelon
    </p>

    ";
        // line 10
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 11
            echo "        <p>
            You are currently logged in as <strong>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</strong>.
        </p>
        <p>
            You can either :
        </p>
        <ul>
            <li>
                <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Log out to log in with another account</a>
            </li>
            <li>
                <a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messages_conversations");
            echo "\">Access your inbox to start messaging</a>
            </li>
        </ul>
    ";
        } else {
            // line 26
            echo "        <p>
            You are currently not logged in.
        </p>
        <p>
            Some users are already configured for log in:
            <a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">you can try this demo quickly by using one of them to log in</a>.
        </p>
        <p>
            If you want, you can also
            <a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">create your own account by registering</a>.
        </p>
    ";
        }
        
        $__internal_b5d8f91e321eda485504fa1da3d56f15e8d56bb74311ccda05f6eeef32ba48d3->leave($__internal_b5d8f91e321eda485504fa1da3d56f15e8d56bb74311ccda05f6eeef32ba48d3_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 35,  94 => 31,  87 => 26,  80 => 22,  74 => 19,  64 => 12,  61 => 11,  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Welcome{% endblock %}

{% block body %}
    <p>
        BlueMelon
    </p>

    {% if app.user %}
        <p>
            You are currently logged in as <strong>{{ app.user.username }}</strong>.
        </p>
        <p>
            You can either :
        </p>
        <ul>
            <li>
                <a href=\"{{ path('fos_user_security_logout') }}\">Log out to log in with another account</a>
            </li>
            <li>
                <a href=\"{{ path('messages_conversations') }}\">Access your inbox to start messaging</a>
            </li>
        </ul>
    {% else %}
        <p>
            You are currently not logged in.
        </p>
        <p>
            Some users are already configured for log in:
            <a href=\"{{ path('fos_user_security_login') }}\">you can try this demo quickly by using one of them to log in</a>.
        </p>
        <p>
            If you want, you can also
            <a href=\"{{ path('fos_user_registration_register') }}\">create your own account by registering</a>.
        </p>
    {% endif %}
{% endblock %}
", "default/index.html.twig", "/home/donia/Bureau/ATS/ATSProject/app/Resources/views/default/index.html.twig");
    }
}
