<?php

/* EvaluatorBundle:Partial:add.html.twig */
class __TwigTemplate_2575ea2a66521596b8014a71f1cd5c9b617abdfa13547988033de84e39826930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EvaluatorBundle::layout.html.twig", "EvaluatorBundle:Partial:add.html.twig", 1);
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
        $__internal_0fc8ad5fa89e0528de3e897529f1dc3fd6c3451222f8539c089ff52279a185b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc8ad5fa89e0528de3e897529f1dc3fd6c3451222f8539c089ff52279a185b0->enter($__internal_0fc8ad5fa89e0528de3e897529f1dc3fd6c3451222f8539c089ff52279a185b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Partial:add.html.twig"));

        $__internal_17a28730c1e98f3071e31848a6c7442c4ad3cdc17ca31c9b94f97ea30b4f4648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a28730c1e98f3071e31848a6c7442c4ad3cdc17ca31c9b94f97ea30b4f4648->enter($__internal_17a28730c1e98f3071e31848a6c7442c4ad3cdc17ca31c9b94f97ea30b4f4648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Partial:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fc8ad5fa89e0528de3e897529f1dc3fd6c3451222f8539c089ff52279a185b0->leave($__internal_0fc8ad5fa89e0528de3e897529f1dc3fd6c3451222f8539c089ff52279a185b0_prof);

        
        $__internal_17a28730c1e98f3071e31848a6c7442c4ad3cdc17ca31c9b94f97ea30b4f4648->leave($__internal_17a28730c1e98f3071e31848a6c7442c4ad3cdc17ca31c9b94f97ea30b4f4648_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_cc8da7c1cc96390498c8367b3fe2ba55433c5dc6720707e4f6d0dca6e0ee7b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8da7c1cc96390498c8367b3fe2ba55433c5dc6720707e4f6d0dca6e0ee7b72->enter($__internal_cc8da7c1cc96390498c8367b3fe2ba55433c5dc6720707e4f6d0dca6e0ee7b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_731a9ddf6b51861dcecc3f36fda753b4032691e8adecb5396180f3f47e8c9f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731a9ddf6b51861dcecc3f36fda753b4032691e8adecb5396180f3f47e8c9f4e->enter($__internal_731a9ddf6b51861dcecc3f36fda753b4032691e8adecb5396180f3f47e8c9f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"col-lg-6\">
        <h2>Añadir Parcial</h2>
        
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <div class=\"clearfix\"></div>
";
        
        $__internal_731a9ddf6b51861dcecc3f36fda753b4032691e8adecb5396180f3f47e8c9f4e->leave($__internal_731a9ddf6b51861dcecc3f36fda753b4032691e8adecb5396180f3f47e8c9f4e_prof);

        
        $__internal_cc8da7c1cc96390498c8367b3fe2ba55433c5dc6720707e4f6d0dca6e0ee7b72->leave($__internal_cc8da7c1cc96390498c8367b3fe2ba55433c5dc6720707e4f6d0dca6e0ee7b72_prof);

    }

    public function getTemplateName()
    {
        return "EvaluatorBundle:Partial:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"col-lg-6\">
        <h2>Añadir Parcial</h2>
        
        {{form_start(form)}}
        {{form_end(form)}}
    </div>
    <div class=\"clearfix\"></div>
{% endblock %}", "EvaluatorBundle:Partial:add.html.twig", "C:\\wamp64\\www\\evaluator_sym\\src\\EvaluatorBundle/Resources/views/Partial/add.html.twig");
    }
}
