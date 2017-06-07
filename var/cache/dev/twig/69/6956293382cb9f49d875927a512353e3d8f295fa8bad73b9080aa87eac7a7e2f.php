<?php

/* EvaluatorBundle::layout.html.twig */
class __TwigTemplate_43d49e493792c7bf38a687dd1430774b871f9d3e9ff2188b00283582b20acc90 extends Twig_Template
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
        $__internal_5528f6806f16e0ce5bd90a14646c3d72f7c965cafa18426a3d1ef619ae193171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5528f6806f16e0ce5bd90a14646c3d72f7c965cafa18426a3d1ef619ae193171->enter($__internal_5528f6806f16e0ce5bd90a14646c3d72f7c965cafa18426a3d1ef619ae193171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle::layout.html.twig"));

        $__internal_fedf753574eedd38543d30ba56dcff24911611fba8ed2c800458da8253de8cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fedf753574eedd38543d30ba56dcff24911611fba8ed2c800458da8253de8cfa->enter($__internal_fedf753574eedd38543d30ba56dcff24911611fba8ed2c800458da8253de8cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle::layout.html.twig"));

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
        
        $__internal_5528f6806f16e0ce5bd90a14646c3d72f7c965cafa18426a3d1ef619ae193171->leave($__internal_5528f6806f16e0ce5bd90a14646c3d72f7c965cafa18426a3d1ef619ae193171_prof);

        
        $__internal_fedf753574eedd38543d30ba56dcff24911611fba8ed2c800458da8253de8cfa->leave($__internal_fedf753574eedd38543d30ba56dcff24911611fba8ed2c800458da8253de8cfa_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_e179bfe35adf78194dc07242db8437d996cddf0a54964088844f1625d6ffe6dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e179bfe35adf78194dc07242db8437d996cddf0a54964088844f1625d6ffe6dc->enter($__internal_e179bfe35adf78194dc07242db8437d996cddf0a54964088844f1625d6ffe6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e76151a8bef6e8ede01f96bbb97a1f3ab78af9e96a3677ac4556c9725724cd2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e76151a8bef6e8ede01f96bbb97a1f3ab78af9e96a3677ac4556c9725724cd2b->enter($__internal_e76151a8bef6e8ede01f96bbb97a1f3ab78af9e96a3677ac4556c9725724cd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evaluator Symfony 3 Version";
        
        $__internal_e76151a8bef6e8ede01f96bbb97a1f3ab78af9e96a3677ac4556c9725724cd2b->leave($__internal_e76151a8bef6e8ede01f96bbb97a1f3ab78af9e96a3677ac4556c9725724cd2b_prof);

        
        $__internal_e179bfe35adf78194dc07242db8437d996cddf0a54964088844f1625d6ffe6dc->leave($__internal_e179bfe35adf78194dc07242db8437d996cddf0a54964088844f1625d6ffe6dc_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a2f447bf4b0c6bb5fb34673264698fdafeff9dff32076ab93b00191c4bf813fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f447bf4b0c6bb5fb34673264698fdafeff9dff32076ab93b00191c4bf813fb->enter($__internal_a2f447bf4b0c6bb5fb34673264698fdafeff9dff32076ab93b00191c4bf813fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3c130b9a7236ae127eab3b37e4d7b8ec442f15d382210f473bd943912942caa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c130b9a7236ae127eab3b37e4d7b8ec442f15d382210f473bd943912942caa3->enter($__internal_3c130b9a7236ae127eab3b37e4d7b8ec442f15d382210f473bd943912942caa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css\" integrity=\"sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi\" crossorigin=\"anonymous\">
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/estilos.css"), "html", null, true);
        echo "\" type = \"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_3c130b9a7236ae127eab3b37e4d7b8ec442f15d382210f473bd943912942caa3->leave($__internal_3c130b9a7236ae127eab3b37e4d7b8ec442f15d382210f473bd943912942caa3_prof);

        
        $__internal_a2f447bf4b0c6bb5fb34673264698fdafeff9dff32076ab93b00191c4bf813fb->leave($__internal_a2f447bf4b0c6bb5fb34673264698fdafeff9dff32076ab93b00191c4bf813fb_prof);

    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        $__internal_1155c36b1c4eab012c163b17fa507506735354c7ddc9920ad8ff680807aaec46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1155c36b1c4eab012c163b17fa507506735354c7ddc9920ad8ff680807aaec46->enter($__internal_1155c36b1c4eab012c163b17fa507506735354c7ddc9920ad8ff680807aaec46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_71ea48478bd2db320174ab0492407f5768a645231cade6e8b61740db482a605c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ea48478bd2db320174ab0492407f5768a645231cade6e8b61740db482a605c->enter($__internal_71ea48478bd2db320174ab0492407f5768a645231cade6e8b61740db482a605c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "Contenido por defecto";
        
        $__internal_71ea48478bd2db320174ab0492407f5768a645231cade6e8b61740db482a605c->leave($__internal_71ea48478bd2db320174ab0492407f5768a645231cade6e8b61740db482a605c_prof);

        
        $__internal_1155c36b1c4eab012c163b17fa507506735354c7ddc9920ad8ff680807aaec46->leave($__internal_1155c36b1c4eab012c163b17fa507506735354c7ddc9920ad8ff680807aaec46_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c19b5b2f9c78abfda76a78b7a4df6a87f0535198bb9736f8ce34f851035f2109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19b5b2f9c78abfda76a78b7a4df6a87f0535198bb9736f8ce34f851035f2109->enter($__internal_c19b5b2f9c78abfda76a78b7a4df6a87f0535198bb9736f8ce34f851035f2109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_47f82c076c9eb466e8648f4bc997a82cbbcf7f8c112bf5ca75eb19919995559a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f82c076c9eb466e8648f4bc997a82cbbcf7f8c112bf5ca75eb19919995559a->enter($__internal_47f82c076c9eb466e8648f4bc997a82cbbcf7f8c112bf5ca75eb19919995559a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_47f82c076c9eb466e8648f4bc997a82cbbcf7f8c112bf5ca75eb19919995559a->leave($__internal_47f82c076c9eb466e8648f4bc997a82cbbcf7f8c112bf5ca75eb19919995559a_prof);

        
        $__internal_c19b5b2f9c78abfda76a78b7a4df6a87f0535198bb9736f8ce34f851035f2109->leave($__internal_c19b5b2f9c78abfda76a78b7a4df6a87f0535198bb9736f8ce34f851035f2109_prof);

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
