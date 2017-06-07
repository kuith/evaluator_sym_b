<?php

/* EvaluatorBundle:Course:index.html.twig */
class __TwigTemplate_ad9413a48966934cd224727940ea851c1d45044a6c4d03ffa07ea757020e27e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EvaluatorBundle::layout.html.twig", "EvaluatorBundle:Course:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EvaluatorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5565781eadad2a85dc23d38209a1b8cdc7d38bda5e82e73c6a5949e187d84680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5565781eadad2a85dc23d38209a1b8cdc7d38bda5e82e73c6a5949e187d84680->enter($__internal_5565781eadad2a85dc23d38209a1b8cdc7d38bda5e82e73c6a5949e187d84680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Course:index.html.twig"));

        $__internal_8357ec3b79f167e786171c3bdf261f78a5335be3299bae3d7214803ad381461f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8357ec3b79f167e786171c3bdf261f78a5335be3299bae3d7214803ad381461f->enter($__internal_8357ec3b79f167e786171c3bdf261f78a5335be3299bae3d7214803ad381461f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Course:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5565781eadad2a85dc23d38209a1b8cdc7d38bda5e82e73c6a5949e187d84680->leave($__internal_5565781eadad2a85dc23d38209a1b8cdc7d38bda5e82e73c6a5949e187d84680_prof);

        
        $__internal_8357ec3b79f167e786171c3bdf261f78a5335be3299bae3d7214803ad381461f->leave($__internal_8357ec3b79f167e786171c3bdf261f78a5335be3299bae3d7214803ad381461f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f6c1c8ea08b6e404668db65aa9a052ab6632b6059cec3f2cb7cd6ed6450d76c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c1c8ea08b6e404668db65aa9a052ab6632b6059cec3f2cb7cd6ed6450d76c8->enter($__internal_f6c1c8ea08b6e404668db65aa9a052ab6632b6059cec3f2cb7cd6ed6450d76c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e7dc37bceb5de73e4c959ec913dbdcd44f86267e04c4b12b82891b3765af61ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7dc37bceb5de73e4c959ec913dbdcd44f86267e04c4b12b82891b3765af61ff->enter($__internal_e7dc37bceb5de73e4c959ec913dbdcd44f86267e04c4b12b82891b3765af61ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"col-lg-12\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "            <div class=\"alert alert-success\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
        <table class=\"table table-striped\">
            <thead class=\"thead-inverse\">
                <tr>
                    <th>Id Curso</th>
                    <th>Nombre Curso</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 20
            echo "                    <tr>
                        <td>
                            ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evaluator_enter_course", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon_enter.png"), "html", null, true);
            echo "\"></a>
                        </td>
                        <td>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evaluator_delete_course", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon_delete.png"), "html", null, true);
            echo "\"></a>
                        </td>

                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </tbody>
        </table>

    </div>
    <div class=\"clearfix\"></div>

";
        
        $__internal_e7dc37bceb5de73e4c959ec913dbdcd44f86267e04c4b12b82891b3765af61ff->leave($__internal_e7dc37bceb5de73e4c959ec913dbdcd44f86267e04c4b12b82891b3765af61ff_prof);

        
        $__internal_f6c1c8ea08b6e404668db65aa9a052ab6632b6059cec3f2cb7cd6ed6450d76c8->leave($__internal_f6c1c8ea08b6e404668db65aa9a052ab6632b6059cec3f2cb7cd6ed6450d76c8_prof);

    }

    public function getTemplateName()
    {
        return "EvaluatorBundle:Course:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 36,  106 => 31,  98 => 28,  92 => 25,  86 => 22,  82 => 20,  78 => 19,  65 => 8,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EvaluatorBundle::layout.html.twig\" %}

{% block content %}
    <div class=\"col-lg-12\">
        {% for message in app.session.flashbag().get('status') %}
            <div class=\"alert alert-success\"> {{message}}</div>
        {% endfor %}

        <table class=\"table table-striped\">
            <thead class=\"thead-inverse\">
                <tr>
                    <th>Id Curso</th>
                    <th>Nombre Curso</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {% for course in courses %}
                    <tr>
                        <td>
                            {{course.id}}
                        </td>
                        <td>
                            {{course.name}}
                        </td>
                        <td>
                            <a href=\"{{path(\"evaluator_enter_course\", {\"id\":course.id})}}\"><img src=\"{{ asset('images/icon_enter.png') }}\"></a>
                        </td>
                        <td>
                            <a href=\"{{path(\"evaluator_delete_course\", {\"id\":course.id})}}\"><img src=\"{{ asset('images/icon_delete.png') }}\"></a>
                        </td>

                    </tr>
                {% endfor %}
            </tbody>
        </table>

    </div>
    <div class=\"clearfix\"></div>

{% endblock %}
", "EvaluatorBundle:Course:index.html.twig", "C:\\wamp64\\www\\evaluator_sym\\src\\EvaluatorBundle/Resources/views/Course/index.html.twig");
    }
}
