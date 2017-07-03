<?php

/* EvaluatorBundle:Course:add.html.twig */
class __TwigTemplate_03b364b8746c9f14db7b50d3e8efa0c0ffff1029504f9c1b98b3616024af1f28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EvaluatorBundle::layout.html.twig", "EvaluatorBundle:Course:add.html.twig", 1);
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
        $__internal_958495b8b08326fcd278ffdb97c814db32f3fe895e6cfcf363ee7a7911dd7791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_958495b8b08326fcd278ffdb97c814db32f3fe895e6cfcf363ee7a7911dd7791->enter($__internal_958495b8b08326fcd278ffdb97c814db32f3fe895e6cfcf363ee7a7911dd7791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Course:add.html.twig"));

        $__internal_d53edb55e472ddc689a0710294b371066e1a06b207574fc889c2bef8c8f48606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53edb55e472ddc689a0710294b371066e1a06b207574fc889c2bef8c8f48606->enter($__internal_d53edb55e472ddc689a0710294b371066e1a06b207574fc889c2bef8c8f48606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Course:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_958495b8b08326fcd278ffdb97c814db32f3fe895e6cfcf363ee7a7911dd7791->leave($__internal_958495b8b08326fcd278ffdb97c814db32f3fe895e6cfcf363ee7a7911dd7791_prof);

        
        $__internal_d53edb55e472ddc689a0710294b371066e1a06b207574fc889c2bef8c8f48606->leave($__internal_d53edb55e472ddc689a0710294b371066e1a06b207574fc889c2bef8c8f48606_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_45a159674e84281cbeacbda79aa34575f45f171d5bcb6ce769f58c0e51e3bf98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a159674e84281cbeacbda79aa34575f45f171d5bcb6ce769f58c0e51e3bf98->enter($__internal_45a159674e84281cbeacbda79aa34575f45f171d5bcb6ce769f58c0e51e3bf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cc88a14bbac4b3c8dcef1047796dad29b6dcb17104dcdd8bee803eee21a929ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc88a14bbac4b3c8dcef1047796dad29b6dcb17104dcdd8bee803eee21a929ac->enter($__internal_cc88a14bbac4b3c8dcef1047796dad29b6dcb17104dcdd8bee803eee21a929ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"col-lg-6\">
        <h2>Añadir curso</h2>
        
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
        
        $__internal_cc88a14bbac4b3c8dcef1047796dad29b6dcb17104dcdd8bee803eee21a929ac->leave($__internal_cc88a14bbac4b3c8dcef1047796dad29b6dcb17104dcdd8bee803eee21a929ac_prof);

        
        $__internal_45a159674e84281cbeacbda79aa34575f45f171d5bcb6ce769f58c0e51e3bf98->leave($__internal_45a159674e84281cbeacbda79aa34575f45f171d5bcb6ce769f58c0e51e3bf98_prof);

    }

    public function getTemplateName()
    {
        return "EvaluatorBundle:Course:add.html.twig";
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
        <h2>Añadir curso</h2>
        
        {{form_start(form)}}
        {{form_end(form)}}
    </div>
    <div class=\"clearfix\"></div>
{% endblock %}




", "EvaluatorBundle:Course:add.html.twig", "C:\\wamp64\\www\\evaluator_sym\\src\\EvaluatorBundle/Resources/views/Course/add.html.twig");
    }
}
