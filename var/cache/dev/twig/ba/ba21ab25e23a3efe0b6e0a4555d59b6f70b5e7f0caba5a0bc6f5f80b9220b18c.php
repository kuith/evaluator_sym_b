<?php

/* EvaluatorBundle:User:login.html.twig */
class __TwigTemplate_8116f8cb4848b6c22c0de81f28448678d77a5e9f098b89ba1be70d59f920be03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EvaluatorBundle::layout.html.twig", "EvaluatorBundle:User:login.html.twig", 1);
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
        $__internal_2c860ed400a4c4b7a3413d3f02bd548b4d072ef391dcd4752266ab7ab7c07375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c860ed400a4c4b7a3413d3f02bd548b4d072ef391dcd4752266ab7ab7c07375->enter($__internal_2c860ed400a4c4b7a3413d3f02bd548b4d072ef391dcd4752266ab7ab7c07375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:User:login.html.twig"));

        $__internal_69d2b92e01ba324b3411dbe322941d49687502a5be18108363dcdcdebf07f87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d2b92e01ba324b3411dbe322941d49687502a5be18108363dcdcdebf07f87d->enter($__internal_69d2b92e01ba324b3411dbe322941d49687502a5be18108363dcdcdebf07f87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c860ed400a4c4b7a3413d3f02bd548b4d072ef391dcd4752266ab7ab7c07375->leave($__internal_2c860ed400a4c4b7a3413d3f02bd548b4d072ef391dcd4752266ab7ab7c07375_prof);

        
        $__internal_69d2b92e01ba324b3411dbe322941d49687502a5be18108363dcdcdebf07f87d->leave($__internal_69d2b92e01ba324b3411dbe322941d49687502a5be18108363dcdcdebf07f87d_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_fcd0c50b10d31b08af006f8501e930dcbefdb44431bd27191fb4f1f1148e6c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd0c50b10d31b08af006f8501e930dcbefdb44431bd27191fb4f1f1148e6c0e->enter($__internal_fcd0c50b10d31b08af006f8501e930dcbefdb44431bd27191fb4f1f1148e6c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0a63bbf63d458ad5d5faeaded72c6a2673ac968f343f9543ba4e0a0588d9fc52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a63bbf63d458ad5d5faeaded72c6a2673ac968f343f9543ba4e0a0588d9fc52->enter($__internal_0a63bbf63d458ad5d5faeaded72c6a2673ac968f343f9543ba4e0a0588d9fc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <br/>
    <div class=\"col-lg-4\">
        <h4>Identif&iacute;cate</h4>
        <hr/>
        <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
            <label>Nombre:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" />
            <br/>
            <label>Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
            <br/>
            <input type=\"submit\" value=\"Entrar\" class=\"btn btn-success\">
            <input type=\"hidden\" name=\"_target_path\" value=\"/login\"> <!-- Para que no nos lleve a la raíz del proyecto (compor. por defecto)-->
            <br/>
        </form>
    </div>
    <div class=\"col-lg-4\">
        <h4>Reg&iacute;strate</h4>
        <hr/>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "                <div class=\"alert alert-success\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            
            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <div class=\"clearfix\"></div>
";
        
        $__internal_0a63bbf63d458ad5d5faeaded72c6a2673ac968f343f9543ba4e0a0588d9fc52->leave($__internal_0a63bbf63d458ad5d5faeaded72c6a2673ac968f343f9543ba4e0a0588d9fc52_prof);

        
        $__internal_fcd0c50b10d31b08af006f8501e930dcbefdb44431bd27191fb4f1f1148e6c0e->leave($__internal_fcd0c50b10d31b08af006f8501e930dcbefdb44431bd27191fb4f1f1148e6c0e_prof);

    }

    public function getTemplateName()
    {
        return "EvaluatorBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 27,  92 => 26,  89 => 25,  80 => 23,  76 => 22,  60 => 9,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
    <br/>
    <div class=\"col-lg-4\">
        <h4>Identif&iacute;cate</h4>
        <hr/>
        <form action=\"{{path(\"login_check\")}}\" method=\"post\">
            <label>Nombre:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{last_username}}\" class=\"form-control\" />
            <br/>
            <label>Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
            <br/>
            <input type=\"submit\" value=\"Entrar\" class=\"btn btn-success\">
            <input type=\"hidden\" name=\"_target_path\" value=\"/login\"> <!-- Para que no nos lleve a la raíz del proyecto (compor. por defecto)-->
            <br/>
        </form>
    </div>
    <div class=\"col-lg-4\">
        <h4>Reg&iacute;strate</h4>
        <hr/>
            {% for message in app.session.flashbag().get('status') %}
                <div class=\"alert alert-success\"> {{message}}</div>
            {% endfor %}
            
            {{form_start(form, {'action':'', 'method' : 'POST'})}}
            {{form_end(form)}}
    </div>
    <div class=\"clearfix\"></div>
{% endblock %}", "EvaluatorBundle:User:login.html.twig", "C:\\wamp64\\www\\evaluator_sym\\src\\EvaluatorBundle/Resources/views/User/login.html.twig");
    }
}
