<?php

/* base.html.twig */
class __TwigTemplate_1882a892b3692ae2c14e372a97ada6f590f8696c91b3aeee196743bc01c2e6eb extends Twig_Template
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
        $__internal_c736e66106faef7129142537d66a47a5c143744eed047fdee00586ebaca1ee53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c736e66106faef7129142537d66a47a5c143744eed047fdee00586ebaca1ee53->enter($__internal_c736e66106faef7129142537d66a47a5c143744eed047fdee00586ebaca1ee53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>
<body>
    <nav class=\"navbar navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                        data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">FOSMessage</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 33
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 34
            echo "                        <li>
                            <a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messages_conversations");
            echo "\">
                                Messages
                                ";
            // line 37
            $context["countUnread"] = $this->env->getExtension('AppBundle\Twig\MessagesExtension')->countUnread($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()));
            // line 38
            echo "
                                ";
            // line 39
            if ((($context["countUnread"] ?? $this->getContext($context, "countUnread")) > 0)) {
                // line 40
                echo "                                    <strong>(";
                echo twig_escape_filter($this->env, ($context["countUnread"] ?? $this->getContext($context, "countUnread")), "html", null, true);
                echo " new)</strong>
                                ";
            }
            // line 42
            echo "                            </a>
                        </li>
                        <li>
                            <a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "
                                | ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                            </a>
                        </li>
                    ";
        } else {
            // line 51
            echo "                        <li>
                            <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Log in</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Register</a>
                        </li>
                    ";
        }
        // line 58
        echo "                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container\">
        ";
        // line 64
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 65
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 66
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 67
                    echo "                    <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 68
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "        ";
        }
        // line 73
        echo "
        ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "    </div>

    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "</body>
</html>
";
        
        $__internal_c736e66106faef7129142537d66a47a5c143744eed047fdee00586ebaca1ee53->leave($__internal_c736e66106faef7129142537d66a47a5c143744eed047fdee00586ebaca1ee53_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4ee283ad335f7c73f35e015903ece747e1da5dd2f087e61b8fadea305a691eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ee283ad335f7c73f35e015903ece747e1da5dd2f087e61b8fadea305a691eb->enter($__internal_d4ee283ad335f7c73f35e015903ece747e1da5dd2f087e61b8fadea305a691eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d4ee283ad335f7c73f35e015903ece747e1da5dd2f087e61b8fadea305a691eb->leave($__internal_d4ee283ad335f7c73f35e015903ece747e1da5dd2f087e61b8fadea305a691eb_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a0fc53b85bd460f5da03c1ddfc7ef1a05b78b327ff0e7e86c8b39d4a7c1a2e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0fc53b85bd460f5da03c1ddfc7ef1a05b78b327ff0e7e86c8b39d4a7c1a2e10->enter($__internal_a0fc53b85bd460f5da03c1ddfc7ef1a05b78b327ff0e7e86c8b39d4a7c1a2e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a0fc53b85bd460f5da03c1ddfc7ef1a05b78b327ff0e7e86c8b39d4a7c1a2e10->leave($__internal_a0fc53b85bd460f5da03c1ddfc7ef1a05b78b327ff0e7e86c8b39d4a7c1a2e10_prof);

    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        $__internal_1626d316d5806ca50642d3d3290c88c4552002e25ec196a3fbf90a4fd8a3ea13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1626d316d5806ca50642d3d3290c88c4552002e25ec196a3fbf90a4fd8a3ea13->enter($__internal_1626d316d5806ca50642d3d3290c88c4552002e25ec196a3fbf90a4fd8a3ea13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1626d316d5806ca50642d3d3290c88c4552002e25ec196a3fbf90a4fd8a3ea13->leave($__internal_1626d316d5806ca50642d3d3290c88c4552002e25ec196a3fbf90a4fd8a3ea13_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c1782eff1558d428a00972ff0d1ca2bc6d10a63ea204b3b3685b72220aae78e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1782eff1558d428a00972ff0d1ca2bc6d10a63ea204b3b3685b72220aae78e4->enter($__internal_c1782eff1558d428a00972ff0d1ca2bc6d10a63ea204b3b3685b72220aae78e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c1782eff1558d428a00972ff0d1ca2bc6d10a63ea204b3b3685b72220aae78e4->leave($__internal_c1782eff1558d428a00972ff0d1ca2bc6d10a63ea204b3b3685b72220aae78e4_prof);

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
        return array (  238 => 80,  227 => 74,  216 => 14,  205 => 8,  196 => 81,  194 => 80,  189 => 78,  185 => 77,  181 => 75,  179 => 74,  176 => 73,  173 => 72,  167 => 71,  158 => 68,  153 => 67,  148 => 66,  143 => 65,  141 => 64,  133 => 58,  127 => 55,  121 => 52,  118 => 51,  111 => 47,  107 => 46,  103 => 45,  98 => 42,  92 => 40,  90 => 39,  87 => 38,  85 => 37,  80 => 35,  77 => 34,  75 => 33,  66 => 27,  52 => 15,  50 => 14,  45 => 12,  40 => 10,  35 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

    <title>{% block title %}{% endblock %}</title>

    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    <link href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />

    {% block stylesheets %}{% endblock %}
</head>
<body>
    <nav class=\"navbar navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                        data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">FOSMessage</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                        <li>
                            <a href=\"{{ path('messages_conversations') }}\">
                                Messages
                                {% set countUnread = count_unread_conversations(app.user) %}

                                {% if countUnread > 0 %}
                                    <strong>({{ countUnread }} new)</strong>
                                {% endif %}
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ path('fos_user_security_logout') }}\">
                                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}
                                | {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                            </a>
                        </li>
                    {% else %}
                        <li>
                            <a href=\"{{ path('fos_user_security_login') }}\">Log in</a>
                        </li>
                        <li>
                            <a href=\"{{ path('fos_user_registration_register') }}\">Register</a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container\">
        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        {% block body %}{% endblock %}
    </div>

    <script src=\"{{ asset('bootstrap/js/jquery-1.12.0.min.js') }}\"></script>
    <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>

    {% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/home/donia/Bureau/ATS/ATSProject/app/Resources/views/base.html.twig");
    }
}
