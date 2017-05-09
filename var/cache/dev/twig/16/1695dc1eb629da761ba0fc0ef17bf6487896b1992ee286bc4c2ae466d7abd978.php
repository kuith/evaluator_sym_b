<?php

/* EvaluatorBundle::layout.html.twig */
class __TwigTemplate_28694ab412c1030960485cdf85d55bd6e4290f1ecdf252292c8f3345926d6d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46e7b478d8670da76b2c893702c3dab0f7f905194bec2d1537dc7a4a69a9e3d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e7b478d8670da76b2c893702c3dab0f7f905194bec2d1537dc7a4a69a9e3d9->enter($__internal_46e7b478d8670da76b2c893702c3dab0f7f905194bec2d1537dc7a4a69a9e3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle::layout.html.twig"));

        $__internal_418b16bf2ae77fd378d3da6f06e2ba97f271faf9104d45204104fcbb7f6a58dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418b16bf2ae77fd378d3da6f06e2ba97f271faf9104d45204104fcbb7f6a58dd->enter($__internal_418b16bf2ae77fd378d3da6f06e2ba97f271faf9104d45204104fcbb7f6a58dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>
            ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "        </title>

        <!-- Bootstrap CSS -->
        
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    </head>
    <body>
        <div class=\"container\">
            <header>
                <nav class=\"navbar navbar-dark bg-primary\">
                    <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evaluator_homepage");
        echo "\">Evaluator 2.0</a>
                    <span class=\"nav navbar-nav\">
                        ";
        // line 25
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 26
            echo "                            <a class=\"nav-item nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evaluator_index_courses");
            echo "\" id=\"cursosNavItem\">Cursos</a>
                            <a class=\"nav-item nav-link\" href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evaluator_add_course");
            echo "\" id=\"nuevoCursoNavItem\">Nuevo Curso</a>
                        ";
        }
        // line 29
        echo "                    </span>
                    <span class=\"nav navbar-nav float-md-right\">

                        <div class=\"dropdown\">
                            <a class=\"nav-item nav-link\" href=\"#\" id=\"cursosNavItem\">
                                ";
        // line 34
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 35
            echo "                                    Bienvenido, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo "
                                ";
        }
        // line 37
        echo "                            </a>
                            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Login
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                ";
        // line 42
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 43
            echo "                                    <a class=\"dropdown-item\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Entrar</a>
                                ";
        } else {
            // line 45
            echo "                                    <a class=\"dropdown-item\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a>
                                ";
        }
        // line 47
        echo "                            </div>
                        </div>
                    </span>

                </nav>

            </header>
            <section id=\"content\">
                ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "            </section>
            <footer class=\"blockquote-footer\">
                Evaluator. Symfony3 version
            </footer>
        </div>
        
        ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "
        
    </body>
</html>
";
        
        $__internal_46e7b478d8670da76b2c893702c3dab0f7f905194bec2d1537dc7a4a69a9e3d9->leave($__internal_46e7b478d8670da76b2c893702c3dab0f7f905194bec2d1537dc7a4a69a9e3d9_prof);

        
        $__internal_418b16bf2ae77fd378d3da6f06e2ba97f271faf9104d45204104fcbb7f6a58dd->leave($__internal_418b16bf2ae77fd378d3da6f06e2ba97f271faf9104d45204104fcbb7f6a58dd_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_94e1ea1c973663f554f951bd638dcc2e876d068b06881988057bf38063f65797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e1ea1c973663f554f951bd638dcc2e876d068b06881988057bf38063f65797->enter($__internal_94e1ea1c973663f554f951bd638dcc2e876d068b06881988057bf38063f65797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b12133ed9bda1eb785a4dec793b1b51484a0459676d771fd5a6f8b4ed15b063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b12133ed9bda1eb785a4dec793b1b51484a0459676d771fd5a6f8b4ed15b063->enter($__internal_5b12133ed9bda1eb785a4dec793b1b51484a0459676d771fd5a6f8b4ed15b063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evaluator Symfony 3 Version";
        
        $__internal_5b12133ed9bda1eb785a4dec793b1b51484a0459676d771fd5a6f8b4ed15b063->leave($__internal_5b12133ed9bda1eb785a4dec793b1b51484a0459676d771fd5a6f8b4ed15b063_prof);

        
        $__internal_94e1ea1c973663f554f951bd638dcc2e876d068b06881988057bf38063f65797->leave($__internal_94e1ea1c973663f554f951bd638dcc2e876d068b06881988057bf38063f65797_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_acbef41710454453157a13a2d0bf7b07a0cabc20d6a720a349b6bf6b87ad86c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acbef41710454453157a13a2d0bf7b07a0cabc20d6a720a349b6bf6b87ad86c9->enter($__internal_acbef41710454453157a13a2d0bf7b07a0cabc20d6a720a349b6bf6b87ad86c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_627894d0c1d833a6c2cd046a724d8ac7836b2fd9f23dcd9e6c3b16b8eb416fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627894d0c1d833a6c2cd046a724d8ac7836b2fd9f23dcd9e6c3b16b8eb416fec->enter($__internal_627894d0c1d833a6c2cd046a724d8ac7836b2fd9f23dcd9e6c3b16b8eb416fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css\" integrity=\"sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi\" crossorigin=\"anonymous\">
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/estilos.css"), "html", null, true);
        echo "\" type = \"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_627894d0c1d833a6c2cd046a724d8ac7836b2fd9f23dcd9e6c3b16b8eb416fec->leave($__internal_627894d0c1d833a6c2cd046a724d8ac7836b2fd9f23dcd9e6c3b16b8eb416fec_prof);

        
        $__internal_acbef41710454453157a13a2d0bf7b07a0cabc20d6a720a349b6bf6b87ad86c9->leave($__internal_acbef41710454453157a13a2d0bf7b07a0cabc20d6a720a349b6bf6b87ad86c9_prof);

    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        $__internal_1ee97cf962e9680e2a463b7fcc6b7e88b8d850acd67511a485817384f2ffa837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee97cf962e9680e2a463b7fcc6b7e88b8d850acd67511a485817384f2ffa837->enter($__internal_1ee97cf962e9680e2a463b7fcc6b7e88b8d850acd67511a485817384f2ffa837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_82ce7dff2f836fda58e53da5492c27bb3333603966ae82d61ab535adfef5a747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ce7dff2f836fda58e53da5492c27bb3333603966ae82d61ab535adfef5a747->enter($__internal_82ce7dff2f836fda58e53da5492c27bb3333603966ae82d61ab535adfef5a747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "Contenido por defecto";
        
        $__internal_82ce7dff2f836fda58e53da5492c27bb3333603966ae82d61ab535adfef5a747->leave($__internal_82ce7dff2f836fda58e53da5492c27bb3333603966ae82d61ab535adfef5a747_prof);

        
        $__internal_1ee97cf962e9680e2a463b7fcc6b7e88b8d850acd67511a485817384f2ffa837->leave($__internal_1ee97cf962e9680e2a463b7fcc6b7e88b8d850acd67511a485817384f2ffa837_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4d04e7550f9e2bf4903f058e0856c5fb92d30d9593972ea202435d538a9df7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d04e7550f9e2bf4903f058e0856c5fb92d30d9593972ea202435d538a9df7a->enter($__internal_e4d04e7550f9e2bf4903f058e0856c5fb92d30d9593972ea202435d538a9df7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d2e33520c9515cf58af5519a7837e8d9e1ac3cb6106446e08779b1bcc3087e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e33520c9515cf58af5519a7837e8d9e1ac3cb6106446e08779b1bcc3087e4e->enter($__internal_d2e33520c9515cf58af5519a7837e8d9e1ac3cb6106446e08779b1bcc3087e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "            <!-- jQuery first, then Tether, then Bootstrap JS. -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\" integrity=\"sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js\" integrity=\"sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js\" integrity=\"sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK\" crossorigin=\"anonymous\"></script>
            <script type =\"text/javascript\">
                window.URL = \"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "/evaluator_sym/web/app_dev.php/\";
            </script>
        ";
        
        $__internal_d2e33520c9515cf58af5519a7837e8d9e1ac3cb6106446e08779b1bcc3087e4e->leave($__internal_d2e33520c9515cf58af5519a7837e8d9e1ac3cb6106446e08779b1bcc3087e4e_prof);

        
        $__internal_e4d04e7550f9e2bf4903f058e0856c5fb92d30d9593972ea202435d538a9df7a->leave($__internal_e4d04e7550f9e2bf4903f058e0856c5fb92d30d9593972ea202435d538a9df7a_prof);

    }

    public function getTemplateName()
    {
        return "EvaluatorBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 68,  214 => 63,  205 => 62,  187 => 55,  175 => 16,  172 => 15,  163 => 14,  145 => 9,  131 => 71,  129 => 62,  121 => 56,  119 => 55,  109 => 47,  103 => 45,  97 => 43,  95 => 42,  88 => 37,  82 => 35,  80 => 34,  73 => 29,  68 => 27,  63 => 26,  61 => 25,  56 => 23,  49 => 18,  47 => 14,  41 => 10,  39 => 9,  29 => 1,);
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
<html lang=\"es\">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>
            {% block title %}Evaluator Symfony 3 Version{% endblock%}
        </title>

        <!-- Bootstrap CSS -->
        
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css\" integrity=\"sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi\" crossorigin=\"anonymous\">
            <link href=\"{{ asset('assets/css/estilos.css') }}\" type = \"text/css\" rel=\"stylesheet\" />
        {% endblock %}
    </head>
    <body>
        <div class=\"container\">
            <header>
                <nav class=\"navbar navbar-dark bg-primary\">
                    <a class=\"navbar-brand\" href=\"{{path(\"evaluator_homepage\")}}\">Evaluator 2.0</a>
                    <span class=\"nav navbar-nav\">
                        {% if app.user != null %}
                            <a class=\"nav-item nav-link\" href=\"{{path(\"evaluator_index_courses\")}}\" id=\"cursosNavItem\">Cursos</a>
                            <a class=\"nav-item nav-link\" href=\"{{path(\"evaluator_add_course\")}}\" id=\"nuevoCursoNavItem\">Nuevo Curso</a>
                        {% endif%}
                    </span>
                    <span class=\"nav navbar-nav float-md-right\">

                        <div class=\"dropdown\">
                            <a class=\"nav-item nav-link\" href=\"#\" id=\"cursosNavItem\">
                                {% if app.user != null %}
                                    Bienvenido, {{app.user.name}}
                                {% endif%}
                            </a>
                            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Login
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                {% if app.user == null %}
                                    <a class=\"dropdown-item\" href=\"{{path(\"login\")}}\">Entrar</a>
                                {% else %}
                                    <a class=\"dropdown-item\" href=\"{{path(\"logout\")}}\">Salir</a>
                                {% endif %}
                            </div>
                        </div>
                    </span>

                </nav>

            </header>
            <section id=\"content\">
                {% block content %}Contenido por defecto{% endblock %}
            </section>
            <footer class=\"blockquote-footer\">
                Evaluator. Symfony3 version
            </footer>
        </div>
        
        {% block javascripts %}
            <!-- jQuery first, then Tether, then Bootstrap JS. -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\" integrity=\"sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js\" integrity=\"sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js\" integrity=\"sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK\" crossorigin=\"anonymous\"></script>
            <script type =\"text/javascript\">
                window.URL = \"{{app.request.getSchemeAndHttpHost()}}/evaluator_sym/web/app_dev.php/\";
            </script>
        {% endblock%}

        
    </body>
</html>
", "EvaluatorBundle::layout.html.twig", "C:\\wamp64\\www\\evaluator_sym\\src\\EvaluatorBundle/Resources/views/layout.html.twig");
    }
}
