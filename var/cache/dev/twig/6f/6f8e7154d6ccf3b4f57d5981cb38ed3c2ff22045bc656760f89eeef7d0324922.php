<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_6f8b5f37cdd6ba0333ba335e0b784ba70d280c32ebfbc9b8d614774be74fe12b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b9f9be1cc797740be7ec11d3ce7ff2f7b32097ad8372637acaaeca92624ce45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9f9be1cc797740be7ec11d3ce7ff2f7b32097ad8372637acaaeca92624ce45->enter($__internal_2b9f9be1cc797740be7ec11d3ce7ff2f7b32097ad8372637acaaeca92624ce45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_21ad523bc8306cf82e4cfcc3a72bcebca1b0ce9474d12c7e0fe62b87d3bcaa3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ad523bc8306cf82e4cfcc3a72bcebca1b0ce9474d12c7e0fe62b87d3bcaa3b->enter($__internal_21ad523bc8306cf82e4cfcc3a72bcebca1b0ce9474d12c7e0fe62b87d3bcaa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b9f9be1cc797740be7ec11d3ce7ff2f7b32097ad8372637acaaeca92624ce45->leave($__internal_2b9f9be1cc797740be7ec11d3ce7ff2f7b32097ad8372637acaaeca92624ce45_prof);

        
        $__internal_21ad523bc8306cf82e4cfcc3a72bcebca1b0ce9474d12c7e0fe62b87d3bcaa3b->leave($__internal_21ad523bc8306cf82e4cfcc3a72bcebca1b0ce9474d12c7e0fe62b87d3bcaa3b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ceb9f196598a8f7578b98a0d7acfe1f786b9dc4ab7194a30ea8e6685fe5bed16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb9f196598a8f7578b98a0d7acfe1f786b9dc4ab7194a30ea8e6685fe5bed16->enter($__internal_ceb9f196598a8f7578b98a0d7acfe1f786b9dc4ab7194a30ea8e6685fe5bed16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d317f86e085972e1501b5ea2d533a5c086009f618b407ac263ba43689d4a1f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d317f86e085972e1501b5ea2d533a5c086009f618b407ac263ba43689d4a1f21->enter($__internal_d317f86e085972e1501b5ea2d533a5c086009f618b407ac263ba43689d4a1f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d317f86e085972e1501b5ea2d533a5c086009f618b407ac263ba43689d4a1f21->leave($__internal_d317f86e085972e1501b5ea2d533a5c086009f618b407ac263ba43689d4a1f21_prof);

        
        $__internal_ceb9f196598a8f7578b98a0d7acfe1f786b9dc4ab7194a30ea8e6685fe5bed16->leave($__internal_ceb9f196598a8f7578b98a0d7acfe1f786b9dc4ab7194a30ea8e6685fe5bed16_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\evaluator_sym\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
