<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4f8013b187e7a49949aa24d25b57f82dbf6736c4d0afe406f5b012001d79496f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4071c3f6f93ad7680050991956998134e3daed71b00f6291358daca2ea4d993a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4071c3f6f93ad7680050991956998134e3daed71b00f6291358daca2ea4d993a->enter($__internal_4071c3f6f93ad7680050991956998134e3daed71b00f6291358daca2ea4d993a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_66401cb285d16608a23136349d5f281a3792dc1c104ec0b49c7397fb49b3a402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66401cb285d16608a23136349d5f281a3792dc1c104ec0b49c7397fb49b3a402->enter($__internal_66401cb285d16608a23136349d5f281a3792dc1c104ec0b49c7397fb49b3a402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4071c3f6f93ad7680050991956998134e3daed71b00f6291358daca2ea4d993a->leave($__internal_4071c3f6f93ad7680050991956998134e3daed71b00f6291358daca2ea4d993a_prof);

        
        $__internal_66401cb285d16608a23136349d5f281a3792dc1c104ec0b49c7397fb49b3a402->leave($__internal_66401cb285d16608a23136349d5f281a3792dc1c104ec0b49c7397fb49b3a402_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_028b1194c20677dfa378cbaa7f642ac3fa0b1c5f36db433426df4ae87b789aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_028b1194c20677dfa378cbaa7f642ac3fa0b1c5f36db433426df4ae87b789aea->enter($__internal_028b1194c20677dfa378cbaa7f642ac3fa0b1c5f36db433426df4ae87b789aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5b724641b7f2714fb116f9e7cee07cc5721dd20ab278ef4ec08144766b1a9b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b724641b7f2714fb116f9e7cee07cc5721dd20ab278ef4ec08144766b1a9b78->enter($__internal_5b724641b7f2714fb116f9e7cee07cc5721dd20ab278ef4ec08144766b1a9b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5b724641b7f2714fb116f9e7cee07cc5721dd20ab278ef4ec08144766b1a9b78->leave($__internal_5b724641b7f2714fb116f9e7cee07cc5721dd20ab278ef4ec08144766b1a9b78_prof);

        
        $__internal_028b1194c20677dfa378cbaa7f642ac3fa0b1c5f36db433426df4ae87b789aea->leave($__internal_028b1194c20677dfa378cbaa7f642ac3fa0b1c5f36db433426df4ae87b789aea_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f557eec14e0ca0818345ad444b44e08c8c64200dc327d0de2c18341f2ffd2df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f557eec14e0ca0818345ad444b44e08c8c64200dc327d0de2c18341f2ffd2df7->enter($__internal_f557eec14e0ca0818345ad444b44e08c8c64200dc327d0de2c18341f2ffd2df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd8b7f8e61ecc1033b9842fca475c301974c4d15c05470857ade0dab912cba85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8b7f8e61ecc1033b9842fca475c301974c4d15c05470857ade0dab912cba85->enter($__internal_fd8b7f8e61ecc1033b9842fca475c301974c4d15c05470857ade0dab912cba85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd8b7f8e61ecc1033b9842fca475c301974c4d15c05470857ade0dab912cba85->leave($__internal_fd8b7f8e61ecc1033b9842fca475c301974c4d15c05470857ade0dab912cba85_prof);

        
        $__internal_f557eec14e0ca0818345ad444b44e08c8c64200dc327d0de2c18341f2ffd2df7->leave($__internal_f557eec14e0ca0818345ad444b44e08c8c64200dc327d0de2c18341f2ffd2df7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9afab2b9e27558a78045c03561c51c1458522bd949d8035897ef0082d02f704d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9afab2b9e27558a78045c03561c51c1458522bd949d8035897ef0082d02f704d->enter($__internal_9afab2b9e27558a78045c03561c51c1458522bd949d8035897ef0082d02f704d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b829cf1a5b8c84604853801775b8b2f5ced686f5ba9626dbde95a6ca2fcdca2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b829cf1a5b8c84604853801775b8b2f5ced686f5ba9626dbde95a6ca2fcdca2d->enter($__internal_b829cf1a5b8c84604853801775b8b2f5ced686f5ba9626dbde95a6ca2fcdca2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b829cf1a5b8c84604853801775b8b2f5ced686f5ba9626dbde95a6ca2fcdca2d->leave($__internal_b829cf1a5b8c84604853801775b8b2f5ced686f5ba9626dbde95a6ca2fcdca2d_prof);

        
        $__internal_9afab2b9e27558a78045c03561c51c1458522bd949d8035897ef0082d02f704d->leave($__internal_9afab2b9e27558a78045c03561c51c1458522bd949d8035897ef0082d02f704d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\evaluator_sym\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
