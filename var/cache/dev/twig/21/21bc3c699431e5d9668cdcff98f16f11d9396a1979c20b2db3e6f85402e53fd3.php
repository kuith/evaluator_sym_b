<?php

/* EvaluatorBundle:Default:index.html.twig */
class __TwigTemplate_560f1bc3c71108e62c6d7ed6a59a764dd89154561f0dd76e3cba68acf1332c4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EvaluatorBundle::layout.html.twig", "EvaluatorBundle:Default:index.html.twig", 1);
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
        $__internal_a2286fb10bfba89ab1646f7844f59ee69877c4913fa8b9887a2016604ecafd79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2286fb10bfba89ab1646f7844f59ee69877c4913fa8b9887a2016604ecafd79->enter($__internal_a2286fb10bfba89ab1646f7844f59ee69877c4913fa8b9887a2016604ecafd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Default:index.html.twig"));

        $__internal_b48de7864479cbd2e6b98e054caf2465da8050f6f9f17cd2ce6fd27a84811a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48de7864479cbd2e6b98e054caf2465da8050f6f9f17cd2ce6fd27a84811a69->enter($__internal_b48de7864479cbd2e6b98e054caf2465da8050f6f9f17cd2ce6fd27a84811a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2286fb10bfba89ab1646f7844f59ee69877c4913fa8b9887a2016604ecafd79->leave($__internal_a2286fb10bfba89ab1646f7844f59ee69877c4913fa8b9887a2016604ecafd79_prof);

        
        $__internal_b48de7864479cbd2e6b98e054caf2465da8050f6f9f17cd2ce6fd27a84811a69->leave($__internal_b48de7864479cbd2e6b98e054caf2465da8050f6f9f17cd2ce6fd27a84811a69_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0361ccc0a2f3c17a87db30c1621311a494f120fb216b126cf121739431f9fdf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0361ccc0a2f3c17a87db30c1621311a494f120fb216b126cf121739431f9fdf8->enter($__internal_0361ccc0a2f3c17a87db30c1621311a494f120fb216b126cf121739431f9fdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6eb731bd1968dd9801a67be2fbb518fc73d0cedea11c512fbcf22ec92005c3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb731bd1968dd9801a67be2fbb518fc73d0cedea11c512fbcf22ec92005c3f0->enter($__internal_6eb731bd1968dd9801a67be2fbb518fc73d0cedea11c512fbcf22ec92005c3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/evaluator_logo.png"), "html", null, true);
        echo "\" class =\"logoInicio\" alt=\"Evaluator. Symfony Version!\" />
";
        
        $__internal_6eb731bd1968dd9801a67be2fbb518fc73d0cedea11c512fbcf22ec92005c3f0->leave($__internal_6eb731bd1968dd9801a67be2fbb518fc73d0cedea11c512fbcf22ec92005c3f0_prof);

        
        $__internal_0361ccc0a2f3c17a87db30c1621311a494f120fb216b126cf121739431f9fdf8->leave($__internal_0361ccc0a2f3c17a87db30c1621311a494f120fb216b126cf121739431f9fdf8_prof);

    }

    public function getTemplateName()
    {
        return "EvaluatorBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    <img src=\"{{ asset('images/evaluator_logo.png') }}\" class =\"logoInicio\" alt=\"Evaluator. Symfony Version!\" />
{% endblock %}
", "EvaluatorBundle:Default:index.html.twig", "C:\\wamp64\\www\\evaluator_sym\\src\\EvaluatorBundle/Resources/views/Default/index.html.twig");
    }
}
