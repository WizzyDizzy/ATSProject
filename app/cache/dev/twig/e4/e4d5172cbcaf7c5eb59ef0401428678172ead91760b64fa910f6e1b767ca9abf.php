<?php

/* messages/conversations.html.twig */
class __TwigTemplate_4098d5738bdec0e6ca0499ae2f943fb24cb2814eb136036f20a07b8e5ca77215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "messages/conversations.html.twig", 1);
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
        $__internal_717f064b2c28abe44d0a590fb76e5f835ff458bf1e1bae0026708f58f34bea77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717f064b2c28abe44d0a590fb76e5f835ff458bf1e1bae0026708f58f34bea77->enter($__internal_717f064b2c28abe44d0a590fb76e5f835ff458bf1e1bae0026708f58f34bea77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "messages/conversations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_717f064b2c28abe44d0a590fb76e5f835ff458bf1e1bae0026708f58f34bea77->leave($__internal_717f064b2c28abe44d0a590fb76e5f835ff458bf1e1bae0026708f58f34bea77_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eaf2c7a29c537d0a0a6e7f3de702527c5b74847c1f42ebd96f3953d8adfcc44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf2c7a29c537d0a0a6e7f3de702527c5b74847c1f42ebd96f3953d8adfcc44b->enter($__internal_eaf2c7a29c537d0a0a6e7f3de702527c5b74847c1f42ebd96f3953d8adfcc44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Conversations";
        
        $__internal_eaf2c7a29c537d0a0a6e7f3de702527c5b74847c1f42ebd96f3953d8adfcc44b->leave($__internal_eaf2c7a29c537d0a0a6e7f3de702527c5b74847c1f42ebd96f3953d8adfcc44b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d98ec11821467bf64a971709815ec27c4b9acfe3dfa024802bf6d8efa780366e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98ec11821467bf64a971709815ec27c4b9acfe3dfa024802bf6d8efa780366e->enter($__internal_d98ec11821467bf64a971709815ec27c4b9acfe3dfa024802bf6d8efa780366e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h3>Conversations</h3>

    ";
        // line 8
        if ((twig_length_filter($this->env, ($context["conversations"] ?? $this->getContext($context, "conversations"))) > 0)) {
            // line 9
            echo "        <p>
            <a href=\"";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messages_start");
            echo "\">Start a conversation</a>
        </p>

        <hr />

        <table class=\"table\">
            <thead>
            <tr>
                <th style=\"width: 5%\">#</th>
                <th>With</th>
                <th style=\"width: 15%\">Last message</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["conversations"] ?? $this->getContext($context, "conversations")));
            foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
                // line 25
                echo "                ";
                $context["firstUnread"] = $this->getAttribute($context["conversation"], "firstUnreadMessage", array(0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())), "method");
                // line 26
                echo "
                <tr>
                    <td>
                        ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["conversation"], "id", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messages_conversation", array("id" => $this->getAttribute($context["conversation"], "id", array()), "page" => 1)), "html", null, true);
                echo "\">
                            ";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\MessagesExtension')->membersList($context["conversation"], $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())), "html", null, true);
                echo "</a>
                        ";
                // line 34
                if ($this->getAttribute($context["conversation"], "subject", array())) {
                    // line 35
                    echo "                            (Subject : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["conversation"], "subject", array()), "html", null, true);
                    echo ")
                        ";
                }
                // line 37
                echo "                    </td>
                    <td>
                        ";
                // line 39
                if (($context["firstUnread"] ?? $this->getContext($context, "firstUnread"))) {
                    // line 40
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messages_conversation", array("id" => $this->getAttribute($context["conversation"], "id", array()), "page" => $this->env->getExtension('AppBundle\Twig\MessagesExtension')->messagePage($context["conversation"], ($context["firstUnread"] ?? $this->getContext($context, "firstUnread"))))), "html", null, true);
                    echo "\">
                                From ";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["firstUnread"] ?? $this->getContext($context, "firstUnread")), "sender", array()), "username", array()), "html", null, true);
                    echo "
                                on ";
                    // line 42
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["firstUnread"] ?? $this->getContext($context, "firstUnread")), "date", array()), "m/d/Y h:ia"), "html", null, true);
                    echo "
                            </a>
                            <strong>(New)</strong>
                        ";
                } else {
                    // line 46
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messages_conversation", array("id" => $this->getAttribute($context["conversation"], "id", array()), "page" => $this->env->getExtension('AppBundle\Twig\MessagesExtension')->messagePage($context["conversation"], $this->getAttribute($this->getAttribute($context["conversation"], "messages", array()), "last", array())))), "html", null, true);
                    echo "\">
                                From ";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["conversation"], "messages", array()), "last", array()), "sender", array()), "username", array()), "html", null, true);
                    echo "
                                on ";
                    // line 48
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["conversation"], "messages", array()), "last", array()), "date", array()), "m/d/Y h:ia"), "html", null, true);
                    echo "
                            </a>
                        ";
                }
                // line 51
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conversation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 57
            echo "        <p>
            You don't have any conversation.
            <a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messages_start");
            echo "\">Don't hesitate to start one!</a>
        </p>
    ";
        }
        
        $__internal_d98ec11821467bf64a971709815ec27c4b9acfe3dfa024802bf6d8efa780366e->leave($__internal_d98ec11821467bf64a971709815ec27c4b9acfe3dfa024802bf6d8efa780366e_prof);

    }

    public function getTemplateName()
    {
        return "messages/conversations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 59,  163 => 57,  158 => 54,  150 => 51,  144 => 48,  140 => 47,  135 => 46,  128 => 42,  124 => 41,  119 => 40,  117 => 39,  113 => 37,  107 => 35,  105 => 34,  101 => 33,  97 => 32,  91 => 29,  86 => 26,  83 => 25,  79 => 24,  62 => 10,  59 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Conversations{% endblock %}

{% block body %}
    <h3>Conversations</h3>

    {% if conversations|length > 0 %}
        <p>
            <a href=\"{{ path('messages_start') }}\">Start a conversation</a>
        </p>

        <hr />

        <table class=\"table\">
            <thead>
            <tr>
                <th style=\"width: 5%\">#</th>
                <th>With</th>
                <th style=\"width: 15%\">Last message</th>
            </tr>
            </thead>
            <tbody>
            {% for conversation in conversations %}
                {% set firstUnread = conversation.firstUnreadMessage(app.user) %}

                <tr>
                    <td>
                        {{ conversation.id }}
                    </td>
                    <td>
                        <a href=\"{{ path('messages_conversation', { 'id': conversation.id, 'page': 1 }) }}\">
                            {{ members_list(conversation, app.user) }}</a>
                        {% if conversation.subject %}
                            (Subject : {{ conversation.subject }})
                        {% endif %}
                    </td>
                    <td>
                        {% if firstUnread %}
                            <a href=\"{{ path('messages_conversation', { 'id': conversation.id, 'page': get_message_page(conversation, firstUnread) }) }}\">
                                From {{ firstUnread.sender.username }}
                                on {{ firstUnread.date|date('m/d/Y h:ia') }}
                            </a>
                            <strong>(New)</strong>
                        {% else %}
                            <a href=\"{{ path('messages_conversation', { 'id': conversation.id, 'page': get_message_page(conversation, conversation.messages.last) }) }}\">
                                From {{ conversation.messages.last.sender.username }}
                                on {{ conversation.messages.last.date|date('m/d/Y h:ia') }}
                            </a>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>
            You don't have any conversation.
            <a href=\"{{ path('messages_start') }}\">Don't hesitate to start one!</a>
        </p>
    {% endif %}
{% endblock %}
", "messages/conversations.html.twig", "/home/donia/Bureau/ATS/ATSProject/app/Resources/views/messages/conversations.html.twig");
    }
}
