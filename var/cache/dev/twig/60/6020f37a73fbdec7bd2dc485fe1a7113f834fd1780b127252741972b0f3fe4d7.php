<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_00347a03c46e06358b0b8ec5f286b1d3b8782a847941a0a89711f98b53e198bc extends Twig_Template
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
        $__internal_b84bf629525c752ea5ac49d1d5f00f31fa8094f29e096d0976668b8e1887880b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b84bf629525c752ea5ac49d1d5f00f31fa8094f29e096d0976668b8e1887880b->enter($__internal_b84bf629525c752ea5ac49d1d5f00f31fa8094f29e096d0976668b8e1887880b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e405e7132c6128797fa5173cef7c2154fd9f3ce0a52377160656ecfe04fbddaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e405e7132c6128797fa5173cef7c2154fd9f3ce0a52377160656ecfe04fbddaa->enter($__internal_e405e7132c6128797fa5173cef7c2154fd9f3ce0a52377160656ecfe04fbddaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b84bf629525c752ea5ac49d1d5f00f31fa8094f29e096d0976668b8e1887880b->leave($__internal_b84bf629525c752ea5ac49d1d5f00f31fa8094f29e096d0976668b8e1887880b_prof);

        
        $__internal_e405e7132c6128797fa5173cef7c2154fd9f3ce0a52377160656ecfe04fbddaa->leave($__internal_e405e7132c6128797fa5173cef7c2154fd9f3ce0a52377160656ecfe04fbddaa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_400bf114af29e078d4927c9bf2e9dedc0eddd57173de1a9c53bdb5ca4a37e1ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400bf114af29e078d4927c9bf2e9dedc0eddd57173de1a9c53bdb5ca4a37e1ba->enter($__internal_400bf114af29e078d4927c9bf2e9dedc0eddd57173de1a9c53bdb5ca4a37e1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_03687c532e4cc2f6d48db9c663768662c880f8e099aae4ffdca42fd7bea3d60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03687c532e4cc2f6d48db9c663768662c880f8e099aae4ffdca42fd7bea3d60f->enter($__internal_03687c532e4cc2f6d48db9c663768662c880f8e099aae4ffdca42fd7bea3d60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_03687c532e4cc2f6d48db9c663768662c880f8e099aae4ffdca42fd7bea3d60f->leave($__internal_03687c532e4cc2f6d48db9c663768662c880f8e099aae4ffdca42fd7bea3d60f_prof);

        
        $__internal_400bf114af29e078d4927c9bf2e9dedc0eddd57173de1a9c53bdb5ca4a37e1ba->leave($__internal_400bf114af29e078d4927c9bf2e9dedc0eddd57173de1a9c53bdb5ca4a37e1ba_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87f043dc65aa6df13553a0ce2a46b60117c01f45390adce1db873ee07d3d8320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f043dc65aa6df13553a0ce2a46b60117c01f45390adce1db873ee07d3d8320->enter($__internal_87f043dc65aa6df13553a0ce2a46b60117c01f45390adce1db873ee07d3d8320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7f8a66f2cb9d0688f7d42d6b1591ccd56469ccfcb6083b3680aa39adf075bc21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8a66f2cb9d0688f7d42d6b1591ccd56469ccfcb6083b3680aa39adf075bc21->enter($__internal_7f8a66f2cb9d0688f7d42d6b1591ccd56469ccfcb6083b3680aa39adf075bc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7f8a66f2cb9d0688f7d42d6b1591ccd56469ccfcb6083b3680aa39adf075bc21->leave($__internal_7f8a66f2cb9d0688f7d42d6b1591ccd56469ccfcb6083b3680aa39adf075bc21_prof);

        
        $__internal_87f043dc65aa6df13553a0ce2a46b60117c01f45390adce1db873ee07d3d8320->leave($__internal_87f043dc65aa6df13553a0ce2a46b60117c01f45390adce1db873ee07d3d8320_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_910b3276514280f4d4d3a8ad69695094824d8c5aee59590ab7a6e4603966b256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910b3276514280f4d4d3a8ad69695094824d8c5aee59590ab7a6e4603966b256->enter($__internal_910b3276514280f4d4d3a8ad69695094824d8c5aee59590ab7a6e4603966b256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_423d522b103f1fe467e5ce134ddceb843472517398aef70fbe3aa8caa5d9d17a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423d522b103f1fe467e5ce134ddceb843472517398aef70fbe3aa8caa5d9d17a->enter($__internal_423d522b103f1fe467e5ce134ddceb843472517398aef70fbe3aa8caa5d9d17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_423d522b103f1fe467e5ce134ddceb843472517398aef70fbe3aa8caa5d9d17a->leave($__internal_423d522b103f1fe467e5ce134ddceb843472517398aef70fbe3aa8caa5d9d17a_prof);

        
        $__internal_910b3276514280f4d4d3a8ad69695094824d8c5aee59590ab7a6e4603966b256->leave($__internal_910b3276514280f4d4d3a8ad69695094824d8c5aee59590ab7a6e4603966b256_prof);

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
