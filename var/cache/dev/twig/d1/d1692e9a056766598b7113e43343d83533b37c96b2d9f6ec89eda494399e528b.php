<?php

/* EvaluatorBundle:Course:enter.html.twig */
class __TwigTemplate_1b668f95ed4f9f4f548774f7f029faa8637413e5ccf922784fa37ddc08c29388 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EvaluatorBundle::layout.html.twig", "EvaluatorBundle:Course:enter.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EvaluatorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df8c61cef9292b7245acc6261f66b3921a381c6541c162f74917e94c833d6c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8c61cef9292b7245acc6261f66b3921a381c6541c162f74917e94c833d6c26->enter($__internal_df8c61cef9292b7245acc6261f66b3921a381c6541c162f74917e94c833d6c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Course:enter.html.twig"));

        $__internal_136f8f0e56a986271b43eb0cb3df45eebb18bd85bae57688f0f03c4e566549b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136f8f0e56a986271b43eb0cb3df45eebb18bd85bae57688f0f03c4e566549b1->enter($__internal_136f8f0e56a986271b43eb0cb3df45eebb18bd85bae57688f0f03c4e566549b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Course:enter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df8c61cef9292b7245acc6261f66b3921a381c6541c162f74917e94c833d6c26->leave($__internal_df8c61cef9292b7245acc6261f66b3921a381c6541c162f74917e94c833d6c26_prof);

        
        $__internal_136f8f0e56a986271b43eb0cb3df45eebb18bd85bae57688f0f03c4e566549b1->leave($__internal_136f8f0e56a986271b43eb0cb3df45eebb18bd85bae57688f0f03c4e566549b1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_709fd5bc50f9569677f4dd18e4cf97137d8099a6b05c3afbfd4a4cd4456e0207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_709fd5bc50f9569677f4dd18e4cf97137d8099a6b05c3afbfd4a4cd4456e0207->enter($__internal_709fd5bc50f9569677f4dd18e4cf97137d8099a6b05c3afbfd4a4cd4456e0207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_957efbf07ef585990c55bac7d44040f34cd4b74ef23ecfa47486f7007d9eab79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957efbf07ef585990c55bac7d44040f34cd4b74ef23ecfa47486f7007d9eab79->enter($__internal_957efbf07ef585990c55bac7d44040f34cd4b74ef23ecfa47486f7007d9eab79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    
         <nav class=\"navbar navbar-dark bg-seconry\">
             <span class=\"nav navbar-nav\">
                 Curso: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "name", array()), "html", null, true);
        echo "
             </span>
             <span class=\"nav navbar-nav float-md-right\">
                 <a class=\"btn btn-secondary text-muted\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evaluator_add_partial", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" id=\"nuevoParcialBtn\">Nuevo Parcial</a>
             </span>
         </nav>
             
    <table class=\"table table-striped\">
        <thead class=\"thead-inverse\">
            <tr>
                <th>Nombre Alumno</th>
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partials_no_final"]) ? $context["partials_no_final"] : $this->getContext($context, "partials_no_final")));
        foreach ($context['_seq'] as $context["_key"] => $context["partial_no_final"]) {
            // line 19
            echo "                    <th>
                        ";
            // line 20
            echo twig_escape_filter($this->env, ((($this->getAttribute($context["partial_no_final"], "name", array()) . " (") . $this->getAttribute($context["partial_no_final"], "weight", array())) . ")"), "html", null, true);
            echo "
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evaluator_delete_partial", array("idPartial" => $this->getAttribute($context["partial_no_final"], "id", array()), "idCourse" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon_delete_white.png"), "html", null, true);
            echo "\"></a>
                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partial_no_final'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partial_final"]) ? $context["partial_final"] : $this->getContext($context, "partial_final")));
        foreach ($context['_seq'] as $context["_key"] => $context["final"]) {
            // line 25
            echo "                    <th>
                        ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["final"], "name", array()), "html", null, true);
            echo "
                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['final'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </tr>
        </thead>
        <tbody>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 33
            echo "                <tr>
                    <td>
                        ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
            echo "
                    </td>
                    ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["partials_no_final"]) ? $context["partials_no_final"] : $this->getContext($context, "partials_no_final")));
            foreach ($context['_seq'] as $context["_key"] => $context["partial_no_final"]) {
                // line 38
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["marks_no_final"]) ? $context["marks_no_final"] : $this->getContext($context, "marks_no_final")));
                foreach ($context['_seq'] as $context["_key"] => $context["mark_no_final"]) {
                    // line 39
                    echo "                            ";
                    if ((($this->getAttribute($this->getAttribute($context["mark_no_final"], "idPartial", array()), "id", array()) == $this->getAttribute($context["partial_no_final"], "id", array())) && ($this->getAttribute($this->getAttribute($context["mark_no_final"], "idStudent", array()), "id", array()) == $this->getAttribute($context["student"], "id", array())))) {
                        // line 40
                        echo "                                ";
                        $context["idMarkCell"] = ("markCell" . $this->getAttribute($context["mark_no_final"], "id", array()));
                        // line 41
                        echo "                                ";
                        $context["idMark"] = $this->getAttribute($context["mark_no_final"], "id", array());
                        // line 42
                        echo "                                ";
                        $context["markResult"] = $this->getAttribute($context["mark_no_final"], "grade", array());
                        // line 43
                        echo "                                ";
                        $context["courseId"] = $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array());
                        // line 44
                        echo "                                <td ";
                        echo twig_escape_filter($this->env, sprintf(" contenteditable class = %s id = %s data-mark-id = %s data-original-mark = %s data-course-id = %s", "markCell", (isset($context["idMarkCell"]) ? $context["idMarkCell"] : $this->getContext($context, "idMarkCell")), $this->getAttribute($context["mark_no_final"], "id", array()), $this->getAttribute($context["mark_no_final"], "grade", array()), (isset($context["courseId"]) ? $context["courseId"] : $this->getContext($context, "courseId"))), "html", null, true);
                        echo " >
                                    ";
                        // line 45
                        echo twig_escape_filter($this->env, (isset($context["markResult"]) ? $context["markResult"] : $this->getContext($context, "markResult")), "html", null, true);
                        echo "
                                </td>
                            ";
                    }
                    // line 48
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mark_no_final'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partial_no_final'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "  
                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["partial_final"]) ? $context["partial_final"] : $this->getContext($context, "partial_final")));
            foreach ($context['_seq'] as $context["_key"] => $context["final"]) {
                // line 52
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["marks_final"]) ? $context["marks_final"] : $this->getContext($context, "marks_final")));
                foreach ($context['_seq'] as $context["_key"] => $context["mark_final"]) {
                    // line 53
                    echo "                            ";
                    if ((($this->getAttribute($this->getAttribute($context["mark_final"], "idPartial", array()), "id", array()) == $this->getAttribute($context["final"], "id", array())) && ($this->getAttribute($this->getAttribute($context["mark_final"], "idStudent", array()), "id", array()) == $this->getAttribute($context["student"], "id", array())))) {
                        // line 54
                        echo "                                <td>
                                    ";
                        // line 55
                        echo twig_escape_filter($this->env, $this->getAttribute($context["mark_final"], "grade", array()), "html", null, true);
                        echo "
                                </td>
                            ";
                    }
                    // line 58
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mark_final'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['final'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
    </table>
    <div class=\"clearfix\"></div>
    <script>
        
    </script>
    
";
        
        $__internal_957efbf07ef585990c55bac7d44040f34cd4b74ef23ecfa47486f7007d9eab79->leave($__internal_957efbf07ef585990c55bac7d44040f34cd4b74ef23ecfa47486f7007d9eab79_prof);

        
        $__internal_709fd5bc50f9569677f4dd18e4cf97137d8099a6b05c3afbfd4a4cd4456e0207->leave($__internal_709fd5bc50f9569677f4dd18e4cf97137d8099a6b05c3afbfd4a4cd4456e0207_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_770be0544653ac88b0d701c77ddb768ed6c8be04d9a01408719d5c4b39af5c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770be0544653ac88b0d701c77ddb768ed6c8be04d9a01408719d5c4b39af5c40->enter($__internal_770be0544653ac88b0d701c77ddb768ed6c8be04d9a01408719d5c4b39af5c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_42e4114dded7965a898f6f071585933dbe7d5fb3e2ca19fb50a4d9205bac17a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e4114dded7965a898f6f071585933dbe7d5fb3e2ca19fb50a4d9205bac17a6->enter($__internal_42e4114dded7965a898f6f071585933dbe7d5fb3e2ca19fb50a4d9205bac17a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
   <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/markUpdate.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_42e4114dded7965a898f6f071585933dbe7d5fb3e2ca19fb50a4d9205bac17a6->leave($__internal_42e4114dded7965a898f6f071585933dbe7d5fb3e2ca19fb50a4d9205bac17a6_prof);

        
        $__internal_770be0544653ac88b0d701c77ddb768ed6c8be04d9a01408719d5c4b39af5c40->leave($__internal_770be0544653ac88b0d701c77ddb768ed6c8be04d9a01408719d5c4b39af5c40_prof);

    }

    public function getTemplateName()
    {
        return "EvaluatorBundle:Course:enter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 73,  245 => 72,  236 => 71,  219 => 62,  212 => 60,  206 => 59,  200 => 58,  194 => 55,  191 => 54,  188 => 53,  183 => 52,  179 => 51,  176 => 50,  170 => 49,  164 => 48,  158 => 45,  153 => 44,  150 => 43,  147 => 42,  144 => 41,  141 => 40,  138 => 39,  133 => 38,  129 => 37,  124 => 35,  120 => 33,  116 => 32,  111 => 29,  102 => 26,  99 => 25,  94 => 24,  83 => 21,  79 => 20,  76 => 19,  72 => 18,  61 => 10,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    
         <nav class=\"navbar navbar-dark bg-seconry\">
             <span class=\"nav navbar-nav\">
                 Curso: {{course.name}}
             </span>
             <span class=\"nav navbar-nav float-md-right\">
                 <a class=\"btn btn-secondary text-muted\" href=\"{{path(\"evaluator_add_partial\", {\"id\":course.id})}}\" id=\"nuevoParcialBtn\">Nuevo Parcial</a>
             </span>
         </nav>
             
    <table class=\"table table-striped\">
        <thead class=\"thead-inverse\">
            <tr>
                <th>Nombre Alumno</th>
                    {% for partial_no_final in partials_no_final %}
                    <th>
                        {{partial_no_final.name ~ ' (' ~ partial_no_final.weight ~ ')'}}
                        <a href=\"{{path(\"evaluator_delete_partial\", {\"idPartial\":partial_no_final.id, \"idCourse\":course.id})}}\"><img src=\"{{ asset('images/icon_delete_white.png') }}\"></a>
                    </th>
                {% endfor %}
                {% for final in partial_final %}
                    <th>
                        {{final.name }}
                    </th>
                {% endfor %}
            </tr>
        </thead>
        <tbody>
            {% for student in students %}
                <tr>
                    <td>
                        {{student.name}}
                    </td>
                    {% for partial_no_final in partials_no_final %}
                        {% for mark_no_final in marks_no_final %}
                            {% if mark_no_final.idPartial.id == partial_no_final.id  and  mark_no_final.idStudent.id == student.id %}
                                {% set idMarkCell = 'markCell'~mark_no_final.id %}
                                {% set idMark = mark_no_final.id %}
                                {% set markResult = mark_no_final.grade %}
                                {% set courseId = course.id%}
                                <td {{\" contenteditable class = %s id = %s data-mark-id = %s data-original-mark = %s data-course-id = %s\"|format(\"markCell\", idMarkCell, mark_no_final.id, mark_no_final.grade, courseId)}} >
                                    {{markResult}}
                                </td>
                            {% endif %}
                        {% endfor %}
                    {% endfor %}
  
                    {% for final in partial_final %}
                        {% for mark_final in marks_final %}
                            {% if mark_final.idPartial.id == final.id  and  mark_final.idStudent.id == student.id %}
                                <td>
                                    {{mark_final.grade}}
                                </td>
                            {% endif %}
                        {% endfor %}
                    {% endfor %}
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <div class=\"clearfix\"></div>
    <script>
        
    </script>
    
{% endblock %}

{% block javascripts %}
    {{ parent ()}}
   <script src=\"{{ asset('assets/js/custom/markUpdate.js')}}\"></script>
{% endblock%}




\t
", "EvaluatorBundle:Course:enter.html.twig", "C:\\wamp64\\www\\evaluator_sym\\src\\EvaluatorBundle/Resources/views/Course/enter.html.twig");
    }
}
