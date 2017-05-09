<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8609834dda2935b99a2c9429413b566e1a309f5c308a17555acb78e69f1e82ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcc8b8f3b77b21595522166945c883d6469de6f3f89927b73b123393b48cef89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc8b8f3b77b21595522166945c883d6469de6f3f89927b73b123393b48cef89->enter($__internal_fcc8b8f3b77b21595522166945c883d6469de6f3f89927b73b123393b48cef89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4a25d7cd5d240ba597afd68279e103a0e9251939d87cec4f30c922288b7353a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a25d7cd5d240ba597afd68279e103a0e9251939d87cec4f30c922288b7353a0->enter($__internal_4a25d7cd5d240ba597afd68279e103a0e9251939d87cec4f30c922288b7353a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcc8b8f3b77b21595522166945c883d6469de6f3f89927b73b123393b48cef89->leave($__internal_fcc8b8f3b77b21595522166945c883d6469de6f3f89927b73b123393b48cef89_prof);

        
        $__internal_4a25d7cd5d240ba597afd68279e103a0e9251939d87cec4f30c922288b7353a0->leave($__internal_4a25d7cd5d240ba597afd68279e103a0e9251939d87cec4f30c922288b7353a0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a7843671e869399d2a53f3c915d4dbc89ef8007661cc8fa95d3139d0f10d8f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7843671e869399d2a53f3c915d4dbc89ef8007661cc8fa95d3139d0f10d8f7->enter($__internal_7a7843671e869399d2a53f3c915d4dbc89ef8007661cc8fa95d3139d0f10d8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_22e2676011a1d651fbc002fb6df970ec6d8780c7bf7ca05118a81e77b95dbbfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e2676011a1d651fbc002fb6df970ec6d8780c7bf7ca05118a81e77b95dbbfc->enter($__internal_22e2676011a1d651fbc002fb6df970ec6d8780c7bf7ca05118a81e77b95dbbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_22e2676011a1d651fbc002fb6df970ec6d8780c7bf7ca05118a81e77b95dbbfc->leave($__internal_22e2676011a1d651fbc002fb6df970ec6d8780c7bf7ca05118a81e77b95dbbfc_prof);

        
        $__internal_7a7843671e869399d2a53f3c915d4dbc89ef8007661cc8fa95d3139d0f10d8f7->leave($__internal_7a7843671e869399d2a53f3c915d4dbc89ef8007661cc8fa95d3139d0f10d8f7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f54139da7c25fa63862ccf9ff90cf22870e9aa9a08ac4cd5dde5073100b665b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54139da7c25fa63862ccf9ff90cf22870e9aa9a08ac4cd5dde5073100b665b1->enter($__internal_f54139da7c25fa63862ccf9ff90cf22870e9aa9a08ac4cd5dde5073100b665b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_22dd99aeca22088fe3bfc7c55897b1eeffe334145d3528f5ea46270c193f00f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22dd99aeca22088fe3bfc7c55897b1eeffe334145d3528f5ea46270c193f00f6->enter($__internal_22dd99aeca22088fe3bfc7c55897b1eeffe334145d3528f5ea46270c193f00f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_22dd99aeca22088fe3bfc7c55897b1eeffe334145d3528f5ea46270c193f00f6->leave($__internal_22dd99aeca22088fe3bfc7c55897b1eeffe334145d3528f5ea46270c193f00f6_prof);

        
        $__internal_f54139da7c25fa63862ccf9ff90cf22870e9aa9a08ac4cd5dde5073100b665b1->leave($__internal_f54139da7c25fa63862ccf9ff90cf22870e9aa9a08ac4cd5dde5073100b665b1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ccdddca300324162c9284f00b8c9f7412cede5a5920acfd0f21e123c911fe05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ccdddca300324162c9284f00b8c9f7412cede5a5920acfd0f21e123c911fe05->enter($__internal_0ccdddca300324162c9284f00b8c9f7412cede5a5920acfd0f21e123c911fe05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56fb005fe99d1209eb728260a128f38adfc741652742845fe631df0eb0f1f2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fb005fe99d1209eb728260a128f38adfc741652742845fe631df0eb0f1f2e1->enter($__internal_56fb005fe99d1209eb728260a128f38adfc741652742845fe631df0eb0f1f2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_56fb005fe99d1209eb728260a128f38adfc741652742845fe631df0eb0f1f2e1->leave($__internal_56fb005fe99d1209eb728260a128f38adfc741652742845fe631df0eb0f1f2e1_prof);

        
        $__internal_0ccdddca300324162c9284f00b8c9f7412cede5a5920acfd0f21e123c911fe05->leave($__internal_0ccdddca300324162c9284f00b8c9f7412cede5a5920acfd0f21e123c911fe05_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\evaluator_sym\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
